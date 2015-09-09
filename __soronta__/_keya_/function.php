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
	
	// ******************* Theses function activate user account *******************
	
	// ------- This function verify if user account is activate or not -------
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
	
	function active_code_exists($userName, $active_code, $con){
		$result = mysqli_query($con, "SELECT Id_registred FROM registred WHERE userName = '$userName' AND active_code = '$active_code'"); 
		
		//return mysqli_num_rows($result);
		if (mysqli_num_rows($result) == 1)
		{
			return true; 
		}else{
			return false;
		}
	}
	// ------- This function upada user account if the arguments are good -------
	function activate($userName, $active_code, $con){
		$result = mysqli_query($con, "SELECT `Id_registred` FROM `registred` WHERE userName = '$userName' AND active_code = '$active_code' AND active = '0' ");
		if (mysqli_num_rows($result) == 1)
		{	
			return true;
		} else {
			return false;
		}
	}
	// Make user account active if arguments are ok
	function active_account($userName, $con){
		// query update account of user to active this
		mysqli_query($con, "UPDATE `registred` SET `active` = 1 WHERE `userName` = '$userName'");
	}
	
	// Connect user account active if arguments are ok
	function connect_user($user_id, $level_in, $lang , $con){
		// query update account of user to active this
		$connectQuery = "INSERT INTO session (user_id, level_in, kan, login)
										VALUE('$user_id', '$level_in', '$lang', 1)";
		mysqli_query($con, $connectQuery);
		//mysqli_query($con, "UPDATE `session` SET `login` = 1 WHERE `user_id` = '$user_id'");
	}	
	
	
	// -------------- Verify if login or logout ----is_not_login()--------------
	function is_not_login(){
		if(logged_in() === FALSE){
			// if not login redirect to login.php
			echo "You are not login";
			header("Location: http://www.fasso.org/karanta/user/login.php");
			exit();
		}
	}
	
	function is_login(){
		if(logged_in()){
			// ------ if login redirect to profile.php
			//echo "You are login";
			
			header("Location: http://fasso.org/karanta/user/profile.php");
			exit();
		}
	}
	
/*	function logged_in()
	{
		if(isset($_SESSION['userName']))
		{
			return true;
		}else{
			return false;
		}
	}
*/
	function logged_in()
	{
		if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0)
		{
			return true;
		}else{
			return false;
		}
	}
//  ----- ----- user_id_from_username ---- -----
function user_id_from_username($userName, $con){
	$query = "SELECT `Id_registred` FROM `registred` WHERE `userName` = '$userName' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
}

//  ----- ----- user_id_from_username ---- -----
function level_of_user($user_id, $con){
	$query = "SELECT `nko_level` FROM `nqo_level` WHERE `id` = '$user_id' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
}



// update djiya
//$query = ""; mysqli_query($con, "UPDATE `registred` SET `djiya` = '$image_name' WHERE `userName` = '$userName' ");
function update_djiya($userName, $con, $image_name){
	mysqli_query($con, "UPDATE `registred` SET `djiya` = '$image_name' WHERE `userName` = '$userName' ");
}

function get_djiya_name($user_id, $con){
	$query = "SELECT `djiya` FROM `registred` WHERE `Id_registred` = '$user_id' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
}

function get_nko_level($user_id, $con){
	$query = "SELECT `nko_level` FROM `nqo_level` WHERE `id` = '$user_id' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
}

function get_kan($user_id, $con){
	$query = "SELECT `kan` FROM `registred` WHERE `Id_registred` = '$user_id' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
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