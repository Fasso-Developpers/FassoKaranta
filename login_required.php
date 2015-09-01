<?php

	include("__soronta__/flo.php");
	
	is_login("index.php");
?>

<!DOCTYPE html>
<html>
	<head >
		<meta charset="UTF-8" />
		<title>Login Required</title>
		<link rel="stylesheet" href="user/css/regist.css" />
	</head>
	
	<body>
		<h1> Sorry! you must be login to acces this page</h1>
		<h3>Please connect you, or create a account</h3>
		<h3>Go to <a href="user/login.php">login</a> or <a href="user/regist.php">Sign up</a> page</h3>
	</body>
	
</html>