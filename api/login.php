<?php
// 引入数据库配置文件
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取提交的用户名和密码
    $username = $_POST["username"];
    $password = $_POST["password"];

    $error_message = ""; // 初始化错误信息

    try {
        // 在这里执行验证逻辑，检查用户名是否存在并验证密码
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            header("Location: index.html");
            exit();
        } else {
            $error_message = "登录失败，请检查用户名和密码。";
        }
    } catch (PDOException $e) {
        $error_message = "登录失败: " . $e->getMessage();
    }

    // 在这里检查是否有错误信息，然后输出
    if (!empty($error_message)) {
        echo $error_message;
    }
}
?>