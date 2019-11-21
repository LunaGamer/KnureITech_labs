<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 3</title>
</head>
<body>
<h1>It is page 3</h1>
<span>Your name is <?php print $_SESSION["user_name"]?></span>
<br/>
<a href="index.php">To main page</a>
</body>
</html>