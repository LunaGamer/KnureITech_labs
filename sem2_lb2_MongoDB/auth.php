<?php

require 'connection.php';

$test = $_GET['author'];

$cond=array("author"=> array('$eq' => $test));
$cursor = $db->literature->find($cond);
$result = iterator_to_array($cursor);


$cursor = $db->literature->find(array('$or' => array(
array('author' => array('$eq' => $test)),
array('array' => array('$in' =>	array($test)))
)));

$i = 1;

foreach ($result as $key => $value) {
	echo "Книга № ".$i." Автора ".$test.'</br>';
	echo "Название: ".$value['name'].'</br>';
	if (is_object($value['author'])) {
		$a = 1;
		echo "Другие авторы:".'</br>';
		foreach ($value['author'] as $key => $author) {
			if ($author != $test) {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;'."\tАвтор ".$a.": ".$author.'</br>';
				$a++;
			}
		}
	}
	if (isset($value['year'])) echo "Год издания: ".$value['year'].'</br>';
	if (isset($value['publisher'])) echo "Издательство ".$value['publisher'].'</br>';
	if (isset($value['date'])) echo "Дата: ".$value['date']->toDateTime()->format('Y-m-d').'</br>';	
	if (isset($value['quantity'])) echo "Количество страниц: ".$value['quantity'].'</br>';
	if (isset($value['number'])) echo "Номер: ".$value['number'].'</br>';
	if (isset($value['ISBN'])) echo "Код ISBN: ".$value['ISBN'].'</br>';
	echo "Тип : ".$value['literate'].'</br>';
	if (isset($value['Resourse'])) {
		if (is_object($value['Resourse'])) {
		$r=1;
		echo "Доп. ресурсы: ".'</br>';
		foreach ($value['Resourse'] as $Res) {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;'."\tРесурс ".$r.": ".$Res.'</br>';
				$r++;
			}
		}
		else echo "Доп. ресурс: ".$value['Resourse'].'</br>';
	}
	echo '</br>';
	$i++;
}
?>