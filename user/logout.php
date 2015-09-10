<?php
	include_once '../__soronta__/flo.php';
	$user_id = $_SESSION['user_id'];
	disconnect_user($user_id, $con); // delete user in session table
	session_unset();
	session_destroy();

	// Remember these code can't unset the cookies value, so don't use cookie to login or to logout
	//setcookie("email",'', time()-3600);
	//setcookie("userName",'', time()-3600);
	header("Location: login.php");
	exit();

?>