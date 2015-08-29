<?php
	
	session_start();
	session_unset();
	session_destroy();
	// Remember these code can't unset the cookies value, so don't use cookie to login or to logout
	//setcookie("email",'', time()-3600);
	//setcookie("userName",'', time()-3600);
	header("Location: login.php");
	exit();

?>