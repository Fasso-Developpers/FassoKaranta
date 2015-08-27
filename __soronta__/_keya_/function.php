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
	
	
	function verif_login(){
		if(logged_in())
		{
			echo "You are login";
			echo('
				<a class="loged_in" href="//localhost/karanta/user/logout.php" >Logout<a>
				<p id="log_statut">You are login</p>
			');
		}else{
			echo "You are not login";
			header("location: //localhost/karanta/user/login.php");
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
	$header_mail = "From: karanta@fasso.org";
	$header_mail .= "Reply-To: karanta@fasso.org";
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