<?php
	session_start();

	$eventN = $_POST['EventName'];
	$eventD = $_POST['EventDes'];
	$eventL = $_POST['EventPlace'];
	$eventS = $_POST['EventSpeak'];
	$eventDa = $_POST['EventDate'];
	$eventT = $_POST['EventTime'];
	
	$arr = json_decode(file_get_contents('event.json'), true);
	
	$arr['events'] = array_values($arr['events']);
	
	if(isset($_POST['ind'])) {
		$indice = $_POST['ind'];
		$arr['events'][$indice] = array('title' => $eventN, 'description' => $eventD, 'location' => $eventL, 'speaker'=> $eventS, 'date' => $eventDa, 'time' => $eventT);
	}
	
	else {
		$arr['events'][] = array('title' => $eventN, 'description' => $eventD, 'location' => $eventL, 'speaker'=> $eventS, 'date' => $eventDa, 'time' => $eventT);
	}


	$json = json_encode($arr);
	file_put_contents('event.json', $json);
	
	header('location: user.php');
	
?>
