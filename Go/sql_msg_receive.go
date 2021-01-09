package main

import (
	"log"
	"encoding/json"
	"errors"
	"fmt"
	"gorm.io/driver/mysql"
	"gorm.io/gorm"
	"github.com/streadway/amqp"
)

//sql_message struct
type SqlMessage struct {
	UserID    int		//用户ID
	GoodsID    int		//商品ID
	Count    int		//抢购商品数量
	GoodsPrice    int		//商品价格
            	Number    string		//订单号
}

//goods ...
type Goods struct {
	ID    int    `gorm:"primaryKey"`
	Name string `gorm:"column:name"`
	Count   int    `gorm:"column:count"`
	Status    int    `gorm:"column:status"`    //0 非卖品
	Pic   string    `gorm:"column:pic"`
	Price   int    `gorm:"column:price"`
}

//user ...
type User struct {
	ID     int			`gorm:"primaryKey"`
	Username	    string		`gorm:"column:username"`	
	Password    string		`gorm:"column:password"`	
	Token    string		`gorm:"column:token"`
	Money    int		`gorm:"column:money"`
}

//list....
type List struct {
	//ID     int			`gorm:"primaryKey"`
	User_id    int		`gorm:"column:user_id"`	
	User_name    string		`gorm:"column:user_name"`	
	Goods_id    int		`gorm:"column:goods_id"`
	Goods_name    string	`gorm:"column:goods_name"`
	Number    string		`gorm:"column:number"`
}

func failOnError(err error, msg string) {
	if err != nil {
		log.Fatalf("%s: %s", msg, err)
	}
}

func choose(user_id int, goods_id int, goods_price int, count int, number string) string{

	//连接数据库
	dsn := "root:hwj@tcp(127.0.0.1:3306)/homework?charset=utf8mb4&parseTime=True&loc=Local"
	db, err := gorm.Open(mysql.Open(dsn), &gorm.Config{})
	if err != nil {
		fmt.Println(err)
	}
	fmt.Println("------------连接数据库成功-----------")
	isok := 0

	// 取出user，查看客户的余额是否足够
	user := User{}
	errUser := db.Table("users").Where("id = ?", user_id).Where("money >= ?", goods_price).First(&user).Error
	if errors.Is(errUser, gorm.ErrRecordNotFound) {
		return ("购买失败！请重试！")
	} else {
		isok = 1
		fmt.Println(user.Username)
	}

	// 商品是否有存货
	goods := Goods{}
	errGoods := db.Table("goods").Where("status = 1").Where("id = ?", goods_id).Where("count >= ?", count).First(&goods).Error
	if errors.Is(errGoods, gorm.ErrRecordNotFound) { 
		return "购买失败！请重试！"
	}
	// 开始事务
	tx := db.Begin()
	if isok == 1{			
		err := tx.Table("goods").Where("id = ?", goods_id).Update("count", goods.Count - count).Error
		if err != nil {
			tx.Rollback()
			fmt.Println(err)
			return "购买失败！请重试！"
		}
		err = tx.Table("users").Where("id = ?", user_id).Update("money", user.Money - goods_price).Error
		if err != nil {
			tx.Rollback()
			fmt.Println(err)
			return "购买失败！请重试！"
		}
		list := List{
			User_id: user_id, 
			User_name: user.Username, 
			Goods_id: goods_id, 
			Goods_name: goods.Name, 
			Number: number,
		}
		err = tx.Table("list").Create(&list).Error
		if err != nil {
			tx.Rollback()
			fmt.Println(err)
		}
	}

	// 否则，提交事务
	tx.Commit()
	return "购买成功！"
}

func main() {
	conn, err := amqp.Dial("amqp://admin:admin@localhost:5672/")
	failOnError(err, "Failed to connect to RabbitMQ")
	defer conn.Close()

	ch, err := conn.Channel()
	failOnError(err, "Failed to open a channel")
	defer ch.Close()

	q, err := ch.QueueDeclare(
		"sql_msg", // name
		false,   // durable
		false,   // delete when unused
		false,   // exclusive
		false,   // no-wait
		nil,     // arguments
	)
	failOnError(err, "Failed to declare a queue")

	msgs, err := ch.Consume(
		q.Name, // queue
		"",     // consumer
		true,   // auto-ack
		false,  // exclusive
		false,  // no-local
		false,  // no-wait
		nil,    // args
	)
	failOnError(err, "Failed to register a consumer")



	forever := make(chan bool)

	go func() {
		for d := range msgs {
			log.Printf("Received a message: %s", d.Body)
			
			var mes SqlMessage
			err = json.Unmarshal(d.Body, &mes)
			if err != nil {
				fmt.Printf("json.Unmarshal failed, err:%v\n", err)
				return
			}
			fmt.Printf("mes:%#v\n", mes)
 			res := choose(mes.UserID, mes.GoodsID, mes.GoodsPrice, mes.Count, mes.Number)
			fmt.Printf("res:%s\n", res)
		}
	}()

	log.Printf(" [*] Waiting for messages. To exit press CTRL+C")

	<-forever


}
