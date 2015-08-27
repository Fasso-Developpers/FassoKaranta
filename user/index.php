<?php
	include("../__soronta__/flo.php");
	if(logged_in())
	{
		header("location: profile.php");
		exit();
	}else{
		header("location: login.php");
		exit();
	}

?>