package main

import (
	"fmt"
	"log"
	"strconv"
	"net/http"
	"encoding/json"
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
func failOnError(err error, msg string) {
	if err != nil {
		log.Fatalf("%s: %s", msg, err)
	}
}

func doSend(w http.ResponseWriter, r *http.Request) {
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
	
	/////////////////////////////////////////////

	r.ParseForm() //解析参数，默认不会解析
	fmt.Println("r.Form=", r.Form) //这些信息是输出到服务器端的打印信息 , Get参数

	var mes SqlMessage
	mes.UserID, _ = strconv.Atoi(r.Form["user_id"][0])
	mes.GoodsID, _ = strconv.Atoi(r.Form["goods_id"][0])
	mes.GoodsPrice, _ = strconv.Atoi(r.Form["goods_price"][0])
	mes.Count, _ = strconv.Atoi(r.Form["count"][0])
	mes.Number= r.Form["number"][0]

	body, _ := json.Marshal(mes)
	/////////////////////////////////////////////

	err = ch.Publish(
		"",     // exchange
		q.Name, // routing key
		false,  // mandatory
		false,  // immediate
		amqp.Publishing{
			ContentType: "application/json",
			Body:        []byte(body),
		})
	log.Printf(" [x] Sent %s", body)
	failOnError(err, "Failed to publish a message")
}

func main() {
	http.HandleFunc("/send", doSend)            //设置访问的路径
	err := http.ListenAndServe(":8787", nil) //设置监听的端口
	if err != nil {
		log.Fatal("ListenAndServe: ", err)
	}
	
}
