<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     if (empty($_GET)) {
    ?>
        <form action="test.php" method="GET">
            <input type="text" name="x"><br>
            <select name="act">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <input type="text" name="y"><br>
            <input type="submit">
        </form>
    <?php
   } else {
        if (!empty($_GET['x']) && !empty($_GET['y']) && !empty($_GET['act'])) {
            $x = $_GET ['x'];
            $y = $_GET ['y'];
            if (!is_numeric($x) || !is_numeric($y)) die('Некорректные данные');
            $act = $_GET ['act'];

            if ($act == '+') {
                $z = $x + $y;
            }
            else if ($act == '-') {
                $z = $x - $y;
            }
            else if ($act == '*') {
                $z = $x * $y;
            }
            else if ($act == '/') {
                    if (!$y) die ('Деление на 0');
                $z = $x / $y;
            }
            echo $x.' '.$act.' '.$y.'='.$z;
        }
    }
?>
</body>
</html>