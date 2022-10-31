<?php
	$a = 15;
	$b = 3;
	$rest = $a % $b;
	
	if ($rest === 0) {
		echo 'делится нацело';
	} else {
		echo 'делится с остатком' . $rest; 
	}
?>