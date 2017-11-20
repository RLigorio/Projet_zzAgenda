<?php
	session_start();

	$eventN = $_POST['EventName'];
	$eventD = $_POST['EventDes'];
	$eventL = $_POST['EventPlace'];
	$eventS = $_POST['EventSpeak'];
	$eventlist = file('event.txt');
	
	header('location: user.php');
	
	
?>
