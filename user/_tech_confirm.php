<?php
	include("../__soronta__/flo.php");
	include("traduction.php");
	
	$error = "";
	$succes = "";

	if(empty($_GET['user_id']) || empty($_GET['confirm_code'])){
		$error = "<h1>". trad_lang('resize_is_not_confirm'). "</h1>";

		$message = "<h3>". trad_lang('user_id_and_confirm_code_incorrect'). "</h3>";

		$message .= "<p>". trad_lang('please_confirm_by_email_sended'). "</p>";
		
	}elseif(isset($_GET['user_id'], $_GET['confirm_code']) === true){
		$user_id = trim($_GET['user_id']);
		$confirm_code = trim($_GET['confirm_code']);
		//echo 'set';
		if(!user_id_exists($user_id, $con) ){
			$error = "<h1>". trad_lang('user_id_given_is_not_registered'). "</h1>";
		}elseif(!confirm_code_exists($user_id, $confirm_code, $con)){
			$error = "<h1>". trad_lang('confirmation_code_is_incorrect'). "</h1>";
			
			$message = "<p>". trad_lang('please_check_it_in_your_email'). "</p>";
			
		}elseif(confirm_code_exists($user_id, $confirm_code, $con)){
			//$succes = "<h1>Your activation code is correct</h1>";
			
			if(img_is_resized($user_id, $con)) {
				$message = "<h3>". trad_lang('thank_you_are_in_late'). "</h3>";
				
				$message .= "<p>". trad_lang('because_image_is_alredy_resized'). "</p>";
				header("Refresh: 5; URL=login.php");
			}elseif(must_activate($user_id, $confirm_code, $con)){
				confirm_resize($user_id, $con);
				
				$succes = "<h1>". trad_lang('image_is_succes_resized') ."</h1>";
					
				echo '
					<meta charset="UTF-8" />
					<head><title>Fasso | Activation</title>
					<link rel="stylesheet" href="css/regist.css" />
					</head>
					<body>
						<!-- ERROR PLACE -->
						<div id="succes">'.$succes.'</div>
						<div>'.$message.'</div>
					</body>';
				header("Refresh: 20; URL = login.php");
				exit();
			}else{
				$error = "<h1>".trad_lang('problem_to_confirm_resize') ."</h1>";
				$error .= "<p>".trad_lang('sorry_please_try_again') ."<p>";
			}
		}
	}
?>
<!doctype html>
<html 
	<?php 
		if (LABEL_LANG == 'en'){
			echo 'dir="'.$en['direction'].'"'; 
			echo 'lang="en"';
		}elseif (LABEL_LANG == 'fr') {
			echo 'dir="'.$fr['direction'].'"'; 
			echo 'lang="fr"';
		}elseif (LABEL_LANG == 'nko') {
			echo 'dir="'.$nko['direction'].'"'; 
			echo 'lang="nko"';
		}
	?> >
<head><title>Fasso | Activation</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/regist.css" />
</head>

<body>
	<!-- ERROR PLACE -->
	<div id="error"><?php echo $error; ?></div>
	<div id="succes"><?php echo $succes; ?></div>
	<div><?php echo $message; ?></div>
</body>
	