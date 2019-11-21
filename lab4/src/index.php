<?php
session_start();
?>

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
<form class="form-name">
    <input type="text" placeholder="User name" name="user_name">
    <input type="submit" formmethod="post">
</form>



<?php
if(isset($_POST["user_name"])) {
$_SESSION["user_name"] = $_POST["user_name"];
}
?>
<span>Hello, <?php print $_SESSION["user_name"]?></span>
<br/>
<a href="page2.php">Page 2</a>
<br/>
<a href="page3.php">Page 3</a>
</body>
</html>