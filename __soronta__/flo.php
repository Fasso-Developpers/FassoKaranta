<?php
	ini_set("display_errors",0);error_reporting(0); // hide the errors
    date_default_timezone_set("GMT+0");
    include("_lontabdo_/connect.php");
	include("_keya_/function.php");
	
	//Take user language if exists
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		$profile_info = info_to_profile($user_id, $con);
		if(!empty($profile_info['y_kan'])){
			$_POST['lang'] = $profile_info['y_kan'];
		}	
	}
?>