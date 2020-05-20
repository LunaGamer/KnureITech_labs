<?php
header('Content-Type: text/html; charset=utf-8');
$dsn = "mysql:host=localhost; dbname=var1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $author = $_GET["author"];

    $authorstar = "SELECT * FROM literature, resourse , authors, Book_Authors WHERE authors.ID_Authors = Book_Authors.FID_Authors 
	and literature.ID_Book = Book_Authors.FID_Book and authors.Author_name = '". $author ."' and literature.FID_Resourse = resourse.ID_Resourse";


	
	$i = 1;
    if (!empty($authorstar)){
        foreach ($dbh->query($authorstar) as $raw) {
			echo "Книга ". $i ." Автора ".$raw['Author_name'].":".'</br>';
			echo "Название: ".$raw['name'] . '</br>' ."Издательство: ".$raw['publisher'].'</br>'. "Год издания: ".$raw['year'] . '</br>'. 
			"Количество страниц: ".$raw['quantity'] . '</br>' ."Код ISBN: ".$raw['ISBN'] .'</br>'. "Доп. Ресурс: ".$raw['title'].'</br>'.'</br>';
			$i++;
        }
    }
    else{
        echo "ошибка";
    }
	
	
} catch (PDOException $e) {
    echo "Ошибка";
}