<?php
	include_once("../__soronta__/flo.php");
	if(!logged_in())
	{
		header("location: http://www.fasso.org/karanta/user/login.php");
		exit();
	}else{
		header("location: http://www.fasso.org/karanta/user/profile.php");
	}

?>