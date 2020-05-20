<?php require 'other/author.php'; ?>
<?php require 'other/publisher.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="page_author.php" name="author" target="_parent">
    <p><b>Книги указанного автора:</b></p>
    <select name="author" id="">
        <?php
        foreach ($out as $author) {
            echo "<option value=\"$author\">$author</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>

<form action="times.php" name="dates" target="_parent">
    <p><b>Книги, журналахы и газеты, опубликованныу за указанный временной период:;</b></p>
       <input type="date" name="date_start" required="required">
	   <input type="date" name="date_end" required="required">
    <p><input type="submit" value="Выбрать"></p>
</form>

<form action="publ.php" name="res_starts" target="_parent">
    <p><b>Книги указанного издательства:</b></p>
    <select name="res_starts" id="">
        <?php
        foreach ($outres as $resb) {
            echo "<option value=\"$resb\">$resb</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>



</body>
</html>