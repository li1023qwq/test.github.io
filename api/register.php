<?php
// 引入数据库配置文件
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取提交的用户名和密码
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 使用 password_hash 生成哈希密码
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        // 在这里执行注册逻辑，将用户名和哈希密码存储到数据库中
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        echo "注册成功！";
    } catch (PDOException $e) {
        echo "注册失败: " . $e->getMessage();
    }
}
?>