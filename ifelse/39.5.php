<?php
	$str = 123124;
	$str .='';
    $sum1 = $str[2] + $str[1] + $str[0];
    $sum2 = $str[3] + $str[4] + $str[5];

	if ($sum1 == $sum2) {
        echo '+';
	}
    else
    echo '-';
?>