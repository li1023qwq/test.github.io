<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// 创建数据库连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接数据库失败: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <style>
        #chat-container {
            height: 400px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <div id="chat-container">
        <ul id="chat-messages"></ul>
    </div>
    <form id="chat-form">
        <input type="text" id="message-input" placeholder="Type your message...">
        <button type="submit">Send</button>
    </form>

    <script>
        // 假设已经连接到名为 "1023qwq" 的数据库

        // 获取聊天消息
        function getChatMessages() {
            // 从数据库中获取聊天消息的逻辑
            // 并将消息添加到 #chat-messages 元素中
        }

        // 发送聊天消息
        function sendChatMessage(message) {
            // 将消息存储到数据库中的逻辑
        }

        // 监听表单提交事件
        document.getElementById("chat-form").addEventListener("submit", function(e) {
            e.preventDefault(); // 阻止表单的默认提交行为

            const messageInput = document.getElementById("message-input");
            const message = messageInput.value.trim();

            if (message !== "") {
                sendChatMessage(message);
                messageInput.value = ""; // 清空输入框
            }
        });

        // 定时获取聊天消息
        setInterval(getChatMessages, 1000); // 每隔1秒获取一次聊天消息
    </script>
</body>
</html>