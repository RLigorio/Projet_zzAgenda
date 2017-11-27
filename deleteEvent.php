<?php
	session_start();
	
	$indice = $_GET['ind'];
	
  
	$arr = json_decode(file_get_contents('event.json'), true);
	
	$arr['events'] = array_values($arr['events']);
	
	unset($arr['events'][$indice]);
	
	$json = json_encode($arr);
	file_put_contents('event.json', $json);
	
	header('location: user.php');
?>
