<?php
	require_once './_includes_/init.php';
    require_once './_includes_/authenticate.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Profile</title>
	</head>
	
	<body>
		<h1> Hi <?= htmlentities($_SESSION['username']); ?>, here is your profile</h1>
	</body>
	
</html>