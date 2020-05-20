<?php

$dsn = "mysql:host=localhost; dbname=var1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

} catch (PDOException $e) {
    echo "Ошибка";
}