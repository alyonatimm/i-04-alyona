<?php
	$user = ['name' => 
		'john', 'age' 
		=> 30]; 
	
	$name = isset($user['name']) 
		? $user['name']
        : 'unknown';
?>