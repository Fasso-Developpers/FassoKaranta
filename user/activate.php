<?php
	include("../__soronta__/flo.php");
	include("traduction.php");
	
	$error = "";
	$succes = "";
	/*if (isset($_GET['success']) === true && empty($_GET['success']) === TRUE) {
		echo "<h2>Thanks, we've activated your account...</h2>";
		echo "<p>Your are free to log in !</p>";
	}*/
	if(empty($_GET['userName']) || empty($_GET['active_code'])){
		$error = "<h1>Your account is not activated</h1>";
		$message = "<h3>Your email and activation code are incorrect </h3>";
		$message .= "<p>Please go to your email to active it </p>";
	}elseif(isset($_GET['userName'], $_GET['active_code']) === true){
		$userName = trim($_GET['userName']);
		$active_code = trim($_GET['active_code']);	
		//echo 'set';
		if(!username_exists($userName, $con) ){
			$error = "<h1>Usernamen given is not registered</h1>";
			$message = '<p>Please go to registration page to <a href="regist.php">Sign up</a> </p>';
		}elseif(!active_code_exists($userName, $active_code, $con)){
			$error = "<h1>Your activation code is incorrect</h1>";
			$message = '<p>Please check it in your email !</p>';
		}elseif(active_code_exists($userName, $active_code, $con)){
			//$succes = "<h1>Your activation code is correct</h1>";
			
			if(user_is_activated($userName, $con)) {
				$message = "<h3>You can leave to here</h3>";
				$message .= "<p>because your account is alredy activated</p>";
				header("Refresh: 5; URL=login.php");
			}elseif(activate($userName, $active_code, $con)){
				active_account($userName, $con);
				$succes = "<h1>ߌ ߓߘߴߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߘߟߊߞߊ߬ ߞߏߢߊ߬ ߹ ߺ</h1>";
				$succes .= "<h1>You are activated your account successfelly !</h1>";
				$succes .= "<h1>Vous avez activez votre compte avec succes!</h1>";
				$message = '<p>Please go to <a href="login.php">Login</a> page </p>';
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
				//print_r(activate($userName, $active_code, $con));
				$error = '<h1>We had problems to activate your account</h1>';
				$error .= '<p>we are very sorry, Please try again!';
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
	