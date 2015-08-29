<?php
	function email_exists($email, $con)
	{
		$result = mysqli_query($con, "SELECT * FROM registred WHERE email = '$email' ");

		if (mysqli_num_rows($result) == 1)
		{
			return true;
		}else{
			return false;
		}
	}

	function username_exists($userName, $con)
	{
		// dans la requete il faut prendre '*' et non 'id'
		$result = mysqli_query($con, "SELECT * FROM registred WHERE userName = '$userName' ");
		if (mysqli_num_rows($result) == 1)
		{
			return true; 
		}else{
			return false;
		}
	}
	
		function username_in_nqo($userName, $con)
	{
		// dans la requete il faut prendre '*' et non 'id'
		$result = mysqli_query($con, "SELECT * FROM nqo_level WHERE userName = '$userName' ");
		if (mysqli_num_rows($result) == 1)
		{
			return true; 
		}else{
			return false;
		}
	}
	
	// ----- Theses function activate user account -----------
	function user_is_activated($userName, $con){
		//return (mysqli_result(mysqli_query($con, "SELECT COUNT(`Id_registred`) FROM `registred` WHERE userName = '$userName' AND `active` = 1"), 0) ==1)? true: false;
		$result = mysqli_query($con, "SELECT Id_registred FROM registred WHERE userName = '$userName' AND active = '1'"); 
		
		//return mysqli_num_rows($result);
		if (mysqli_num_rows($result) == 1)
		{
			return true; 
		}else{
			return false;
		}
	}
	
	/*
	function activate($userName, $active_code){
		$userName 			= mysql_real_escape_string($userName);
		$active_code	= mysql_real_escape_string($active_code);
		if (mysqli_result(mysqli_query($con, "SELECT COUNT(`Id_registred`) FROM `registred` WHERE userName = '$userName' AND active_code = '$active_code' AND active = '0' "), 0) == 1) {
			// query update account of user to active this
			mysqli_query($con, "UPDATE `registred` SET `active` = 1 WHERE `userName` = $userName");
			return true;
			
		} else {
			return false;
			
		}
		
	}
	*/
	
	// -------------- Verify if login or logout ------------------
	function verif_login(){
		if(logged_in())
		{
			echo "You are login";
			echo('
				<a class="loged_in" href="http://fasso.org/karanta/user/logout.php" >Logout<a>
				<p id="log_statut">You are login</p>
			');
		}else{
			echo "You are not login";
			header("location: http://fasso.org/karanta/user/login.php");
		}
	}
	
	function logged_in()
	{
		if(isset($_SESSION['userName']))
		{
			return true;
		}else{
			return false;
		}
	}
// ------------  SEND A CONFIRMATION MAIL -----------
	$header_mail 	= "From: karanta@fasso.org"."\r\n";
	$header_mail 	.= "Reply-To: karanta@fasso.org"."\r\n";
	$header_mail 	.= 'Content-type: text/html; charset=utf-8'."\r\n";
	$header_mail 	.= "\r\n";
	
	function send_email($to, $subject, $body){
		global $header_mail;
		mail($to, $subject, $body, $header_mail);
	}
	

// -----------------  TRANSLATE FUNCTIONS  -----------------
	// this function tranlate the information in 3 languages
	function trad_lang($traduction){
		global $en, $fr, $nko;
		if (LABEL_LANG == 'en'){
			return $en[$traduction]; 
		}elseif (LABEL_LANG == 'fr') {
			return $fr[$traduction]; 
		}elseif (LABEL_LANG == 'nko') {
			return $nko[$traduction]; 
		}
	}
	// this function show the information in nko
	function trad_nko($traduction){
		global $nko;
		if (LABEL_LANG_2 == 'nko'){
			return $nko[$traduction];
		}
	}

	// this function align the label as well as the direction of the display langaue
	function align_by_lang($dir_nko='left',$dir_latin='right'){
		if (LABEL_LANG == 'en'){
			 $align = 'style="text-align: '.$dir_latin.'"'; 
		}elseif (LABEL_LANG == 'fr') {
			 $align = 'style="text-align: '.$dir_latin.'"'; 
		}elseif (LABEL_LANG == 'nko') {
			 $align = 'style="text-align: '.$dir_nko.'"'; 
		}
		return $align;
	}

	// this function align the label to rigth
	function align_by_nko(){
		if (LABEL_LANG_2 == 'nko') {
			 $align = 'style="text-align: left"'; 
		}
		return $align;
	}

?>