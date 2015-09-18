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
		$result = mysqli_query($con, "SELECT `user_id` FROM user WHERE `userName` = '$userName' AND active = '1'"); 
		if (mysqli_num_rows($result) == 1)
		{
			return true; 
		}else{
			return false;
		}
	}
	
	function active_code_exists($userName, $active_code, $con){
		$result = mysqli_query($con, "SELECT `user_id` FROM `user` WHERE userName = '$userName' AND active_code = '$active_code'"); 
		
		//return mysqli_num_rows($result);
		if (mysqli_num_rows($result) == 1)
		{
			return true; 
		}else{
			return false;
		}
	}
	// ------- This function verify if user account is active or not -------
	function activate($userName, $active_code, $con){
		$result = mysqli_query($con, "SELECT `user_id` FROM `user` WHERE userName = '$userName' AND active_code = '$active_code' AND active = '0' ");
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
		mysqli_query($con, "UPDATE `user` SET `active` = 1 WHERE `userName` = '$userName'");
	}
	
	
	/* ******************* CONNEXION FUNCTIONS **********************  */
	
	// Connect user if arguments are ok
	function connect_user($user_id, $level_in, $f_kan, $y_kan , $con){
		// query update account of user to active this
		$connectQuery = "INSERT INTO session (user_id, level_in, f_kan, y_kan, login)
										VALUE('$user_id', '$level_in', '$f_kan', '$y_kan', 1)";
		mysqli_query($con, $connectQuery);
		//mysqli_query($con, "UPDATE `session` SET `login` = 1 WHERE `user_id` = '$user_id'");
	}	
	
	// Disconnect user if logout
	function disconnect_user($user_id, $con){
		// delete user in session table
		$disconnectQuery = "DELETE FROM `session` WHERE `user_id` = '$user_id' ";
		mysqli_query($con, $disconnectQuery);
	}	
	
	//  ------- Get cours info for user to apply coloration -----
	function get_cours_info($user_id, $con){
		$query = "SELECT `level_in`, `chapitre_in`, `lesson_in` FROM `nqo_cours` WHERE `user_id` = '$user_id' ";
		$result = mysqli_query($con, $query);
		$resultat = mysqli_fetch_assoc($result);
		return $resultat;
	}
	
	
	/* ***************  Verify if is login or logout ************* */
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
			//if login redirect to profile.php
			header("Location: http://fasso.org/karanta/user/profile.php");
			exit();
		}
	}
	
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


/* *************************** PROFILE ************************ */

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

function info_to_profile($user_id, $con){
	$query = "SELECT `firstName`,`lastName`,`userName`, `email`, `f_kan`, `y_kan`, `djiya`, `join_date` 
				FROM `registred` WHERE `Id_registred` = '$user_id' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
}

// ++++++++++++++++ GREAT PROFILE IMAGE +++++++++++++++++
function have_great_img($user_id, $img_name, $confirm_code, $con){
	$query = "INSERT INTO `great_img` (`user_id`, `img_name`, `confirm_code`)
							VALUE('$user_id', '$img_name', '$confirm_code')";
	mysqli_query($con, $query);
}

function tech_informed($user_id, $con){
	$query = "UPDATE `great_img` SET `t_inform` = '1' WHERE `user_id` = '$user_id' ";
	mysqli_query($con, $query);
}

// Verify if user_id exists in great_img table
function user_id_exists($user_id, $con){
		$query = "SELECT `user_id` FROM `great_img` WHERE `user_id` = '$user_id' ";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) >= 1)
		{
			return true; 
		}else{
			return false;
		}
	}

// Verify if confirm_code exists in great_img table
function confirm_code_exists($user_id, $confirm_code, $con){
	$query = "SELECT `user_id` FROM `great_img` WHERE user_id = '$user_id' AND confirm_code = '$confirm_code'";
	$result = mysqli_query($con, $query); 
		
		if (mysqli_num_rows($result) == 1)
		{
			return true; 
		}else{
			return false;
		}
}

// Verify if another technician has not resize great image
function img_is_resized($user_id, $con){
	$query = "SELECT `user_id` FROM `great_img` WHERE `user_id` = '$user_id' AND `resized` = '1'";
	$result = mysqli_query($con, $query); 
		if (mysqli_num_rows($result) >= 1)
		{
			return true; 
		}else{
			return false;
		}
}

function must_activate($user_id, $confirm_code, $con){
	$query = "SELECT `user_id` FROM `great_img` WHERE `user_id` = '$user_id' AND `confirm_code` = '$confirm_code' AND `resized` = '0' ";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) == 1)
		{	
			return true;
		} else {
			return false;
		}
	}

function confirm_resize($user_id, $con){
		// query update account of user to active this
		$query = "UPDATE `great_img` SET `resized` = 1 WHERE `user_id` = '$user_id'";
		mysqli_query($con, $query);
	}


/* ***************** GET SOME INFO TO SESSION ************* */

function get_nko_level($user_id, $con){
	$query = "SELECT `level_in` FROM `nqo_cours` WHERE `user_id` = '$user_id' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
}

function get_kan($user_id, $con){
	$query = "SELECT `f_kan`, `y_kan` FROM `registred` WHERE `Id_registred` = '$user_id' ";
	$result = mysqli_query($con, $query);
	$resultat = mysqli_fetch_assoc($result);
	return $resultat;
}

function update_kan($user_id, $f_kan, $y_kan, $con){
	$query = "UPDATE `registred` SET `f_kan` = '$f_kan', `y_kan` = '$y_kan' WHERE `Id_registred` = '$user_id'";
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
		return true;
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