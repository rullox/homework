package main

import (
	"log"
	"encoding/json"
	"github.com/streadway/amqp"
)

//sql_message struct
type SqlMessage struct {
	UserID    int		//用户ID
	GoodsID    int		//商品ID
	Count    int		//抢购商品数量
}

func failOnError(err error, msg string) {
	if err != nil {
		log.Fatalf("%s: %s", msg, err)
	}
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
	
	/////////////////////////////////////////////
	//定义测试数据
	var mes SqlMessage
	mes.UserID = 1
	mes.GoodsID = 1
	mes.Count = 1

	//body := "Hello World!"
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
