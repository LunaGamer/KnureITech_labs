<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
</head>
<body>
<?php print $_SESSION["user_name"]?>,
<span>it is page 2</span>
<br/>
<a href="index.php">To main page</a>
</body>
</html>