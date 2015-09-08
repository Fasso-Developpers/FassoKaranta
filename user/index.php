<?php
	include_once("../__soronta__/flo.php");
	if(logged_in())
	{
	/*	header("location: profile.php");
		exit();*/
	}else{
		header("location: http:/fasso.org/karanta/user/login.php");
		exit();
	}

?>