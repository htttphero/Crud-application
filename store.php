<?php
// $_POST

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST); //true || false

//отправки письма

//отправки СМС

//уведомления админа

//уведомления определенного пользователя



header("Location: /"); exit;



