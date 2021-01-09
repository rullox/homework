# "生产者"：sql_msg_send.go
# "消费者"：sql_msg_receive.go
## 实现与预想的差异
    · 项目预想：后端PHP做为生产者向RabbitMQ消息队列中插入SQL信息，Go程序作为消费者
    · 实际实现：采用了两个Go程序作为分别生产者与消费者
        · 其中后端PHP向第一个Go程序（sql_msg_send.go）发送SQL请求数据，由其（sql_msg_send.go）向RabbitMQ消息队列中插入信息
        · 第二个Go程序（sql_msg_receive.go）作为消费者，从RabbitMQ消息队列取出信息并进行处理
