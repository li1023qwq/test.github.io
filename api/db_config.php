<?php
$host = "mysql.sqlpub.com";
$port = 3306;
$dbname = "li1023";
$username = "li1023";
$password = "cc2fbeaaa195da71";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "连接成功！";
} catch (PDOException $e) {
    echo "连接失败: " . $e->getMessage();
}
?>