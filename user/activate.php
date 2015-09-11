<?php
	include("../__soronta__/flo.php");
	include("traduction.php");
	
	$error = "";
	$succes = "";

	if(empty($_GET['userName']) || empty($_GET['active_code'])){
		$error = "<h1>". trad_lang('account_is_not_activated'). "</h1>";

		$message = "<h3>". trad_lang('email_and_activation_code_incorrect'). "</h3>";

		$message .= "<p>". trad_lang('please_go_to_your_email_and_click'). "</p>";
		
	}elseif(isset($_GET['userName'], $_GET['active_code']) === true){
		$userName = trim($_GET['userName']);
		$active_code = trim($_GET['active_code']);
		$lang = trim($_GET['lang']);
		//echo 'set';
		if(!username_exists($userName, $con) ){
			$error = "<h1>". trad_lang('username_given_is_not_registered'). "</h1>";
			
		}elseif(!active_code_exists($userName, $active_code, $con)){
			$error = "<h1>". trad_lang('activation_code_is_incorrect'). "</h1>";
			
			$message = "<p>". trad_lang('please_check_it_in_your_email'). "</p>";
			
		}elseif(active_code_exists($userName, $active_code, $con)){
			//$succes = "<h1>Your activation code is correct</h1>";
			
			if(user_is_activated($userName, $con)) {
				$message = "<h3>". trad_lang('you_can_leave_to_here'). "</h3>";
				
				$message .= "<p>". trad_lang('because_account_is_alredy_activated'). "</p>";
				header("Refresh: 5; URL=login.php");
			}elseif(activate($userName, $active_code, $con)){
				active_account($userName, $con);
				if(empty($_GET['lang'])){
					$succes = "<h1>ߌ ߓߘߴߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߘߟߊߞߊ߬ ߞߏߢߊ߬ ߹ ߺ</h1>";
					$succes .= "<h1>You are activated your account successfelly !</h1>";
					$succes .= "<h1>Vous avez activez votre compte avec succes!</h1>";
					$message = '<p><a href="login.php">ߜߊ߲߬ߞߎ߲߬ߠߌ Login Connexion</a></p>';
				}else{
					$succes = "<h1>". trad_lang('account_is_succes_activated') ."</h1>";
					$message = '<p>'.trad_lang('you_can_login_now').' 
						<a href="login.php">'.trad_lang("login").'</a> </p>';
				}
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
				$error = "<h1>".trad_lang('problem_to_activate_account') ."</h1>";
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
	