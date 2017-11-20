<?php
	session_start();

	$userN = $_POST['username'];
	$passW = $_POST['password'];
	$userlist = file('users.txt');
	
	$success = false;
	foreach($userlist as $user) {
		$user_details = explode(';', $user);
		if ($user_details[0] == $userN && $user_details[1] == md5($passW)) {
			$success = true;
			$_SESSION["username"] = $userN;
			$_SESSION["admin"] = $user_details[2];
			break;
		}
	}
	
	if ($success) {
		header('location: user.php');
	}
	else {
		echo "<br> You have entered the wrong username or password. Please try again.";
	}
	
?>
