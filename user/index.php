<?php
	if(logged_in())
	{
	/*	header("location: profile.php");
		exit();*/
	}else{
		header("location: //localhost/karanta/user/login.php");
		exit();
	}

?>