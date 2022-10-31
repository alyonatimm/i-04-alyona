<?php
$day = 4;
$dec = 0;
if ($day > 0 and $day <= 10) {
    echo 'Первая декада месяца';
} 
elseif ($day > 10 and $day <= 20) {
    echo 'Вторая декада месяца';
} 
else 
    echo 'Третья декада месяца';
?>