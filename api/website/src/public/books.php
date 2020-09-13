<?php

$db_database = "book_db";
$db_hostname = "172.17.0.2"; // "mysql-container"; // 172.17.0.2
$db_username = "root";
$db_password = "pedra123";

$db_dsn = "mysql:host=$db_hostname;dbname=$db_database";

$pdo = new PDO($db_dsn, $db_username, $db_password);
$pdo_stmt = $pdo->prepare("SELECT * FROM books");
$pdo_stmt->execute();

$result = $pdo_stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
