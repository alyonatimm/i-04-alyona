<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$arr['a'] = '4';
	$arr['b'] = '5';
	$arr['c'] = '6';
    echo $arr['a'].' '.$arr['b'].' '.$arr['c'];
?>