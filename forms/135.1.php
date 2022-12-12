<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="135.php" method="GET">
        <input type="text" name="x"><br>
        <input type="text" name="y"><br>
        <input type="text" name="z"><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $x = $_GET ['x'];
    $y = $_GET ['y'];
    $z = $_GET ['z'];
    $summ = $x + $y + $z;
	echo $summ;
?>