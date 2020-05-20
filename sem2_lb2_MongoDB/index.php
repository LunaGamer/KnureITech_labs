<?php require 'connection.php'; ?>
<?php require 'select/publisher.php'; ?>
<?php require 'select/author.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MongoDB</title>
</head>
<body>

    


    <form action="dates.php" id="Form1">
        <p><b>Литература за указанный период</b></p>
        <input type="date" name="date_start">
		<input type="date" name="date_end">
        <p>
            <input type="submit">
        </p>
    </form>


    <form action="auth.php" method="get">
        <p><b>Литературе указанного автора</b></p>
        <select name="author">
			<?php
			foreach ($outauth as $resb) {
				echo "<option value=\"$resb\">$resb</option>";
			}
			?>
        </select>
        <p>
            <input type="submit">
        </p>
    </form>

    <form action="pub.php" method="get">
        <p><b>Литература указанного издательства</b></p>
        <select name="pub">
			<?php
			foreach ($outpub as $resb) {
				echo "<option value=\"$resb\">$resb</option>";
			}
			?>
            <!--<option>Kharkov</option>
            <option>Kiev</option>
            <option>Moscow</option>-->
        </select>
        <p>
            <input type="submit">
        </p>
    </form>

</body>
</html>