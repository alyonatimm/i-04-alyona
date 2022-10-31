<?php
$month = 2;
$dec = 0;
if ($month > 8 and $month <= 11) {
    echo 'осень';
} 
elseif ($month > 2 and $month <= 5) {
    echo 'весна';
} 
elseif ($month > 5 and $month <= 8) {
    echo 'лето';
}
else
    echo 'зима';
?>