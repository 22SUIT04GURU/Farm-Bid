<?php

	session_start();
	session_destroy();
	$login_url = 'http://' . $_SERVER['HTTP_HOST'] . '/Farm-Bid/admin/index.php';
	header('location: '.$login_url);

?>