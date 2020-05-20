<?php
header('Content-Type: text/html; charset=utf-8');
$dsn = "mysql:host=localhost; dbname=var1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $blink = $_GET["res_starts"];

    $house = "SELECT * FROM literature LEFT JOIN resourse ON literature.FID_Resourse = resourse.ID_Resourse WHERE publisher = '". $blink ."'";
	$i = 1;
    if (!empty($house)){
        foreach ($dbh->query($house) as $raw) {
			echo "Книга ". $i ." Издательства ".$raw['publisher'].":".'</br>';
			echo "Название: ".$raw['name'] . '</br>' . "Год издания: ".$raw['year'] . '</br>'. 
			"Количество страниц: ".$raw['quantity'] . '</br>' ."Код ISBN: ".$raw['ISBN'].'</br>'."Доп. Ресурс: ".$raw['title'].'</br>'.'</br>';
			$i++;
        }
    }
    else{
        echo "ошибка";
    }
} catch (PDOException $e) {
    echo "Ошибка";
}