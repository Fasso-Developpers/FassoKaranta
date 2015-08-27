<?php
	$con = mysqli_connect("localhost","root","","fasso_karanta");
	if(mysqli_connect_error())
	{
		echo "Error occured while connecting with database".mysqli_connect_error();
	}

	session_start();
	
	// Registered table
	define("RTABLE", "registred");
	define("LTABLE", "nqo_level");
	
?>