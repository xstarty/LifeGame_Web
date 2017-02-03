<html>
<head>	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Inc/IncludeHead.php'); ?>
</head>

<body>
	<?php
		require_once('./Login_Logout/Incsession.php');
	?>
	
	<form action="./Login_Logout/Logout.php" method="POST">
		<input type="submit" name="submit" value=<?php echo $Lang_Logout; ?>>	
	</form>
	
</body>	
	
</html>