<?php
	session_destroy();
	
	$cookieexpiry = (time() + 21600);
	setcookie("session_id", 'Logout', $cookieexpiry, '/');
	
	header('Location: /index.php');	
?>