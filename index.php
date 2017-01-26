<?php
	include('./Login_Logout/Incsession.php');

	echo '這是會員區';
?>

	<form action="./Login_Logout/Logout.php" method="POST">
		<input type="submit" name="submit" value="Logout">	
	</form>