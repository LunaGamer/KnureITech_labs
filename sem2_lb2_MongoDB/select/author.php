<?php

require './connection.php';

$res = $db->literature->distinct('author');
$outauth[] = array();
unset($outauth[0]);

foreach ($res as $value) {
	$outauth[] .= $value;
}