<?php

	session_start();
	session_destroy();
	$login_url = 'http://' . $_SERVER['HTTP_HOST'] . '/Farm-Bid/login.php';
	header('location: '.$login_url);

?>