<?php

$dsn = "mysql:host=localhost; dbname=var1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $authorsname = "SELECT Author_name FROM `authors`";
    $out[] = array();
    unset($out[0]);

    foreach ($dbh->query($authorsname) as $row) {
        $out[] .= $row['Author_name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}