<?php
	$con = mysqli_connect("localhost","root","","fasso_karanta");
	if(mysqli_connect_error())
	{
		echo "Error occured while connecting with database".mysqli_connect_error();
	}
	
	try {
	    $db = new PDO('mysql:host=localhost;dbname=fasso_karanta', 'root', '');
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    $error = $e->getMessage();
	}
	session_start();
?>