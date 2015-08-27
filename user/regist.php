<?php
	
	include ("../__soronta__/flo.php");
	include ("traduction.php");
	
	// this page contstant
	define('THIS_PAGE', "regist");
	
	if (logged_in()) {
		header("location: profile.php");
		exit();
	}
	
	$error = "";
	$succes = "";
	
	if (isset($_POST['submit_register'])) {
		$firstName = htmlentities($_POST['firstname']);
		$lastName = htmlentities($_POST['lastname']);
		$userName = htmlentities($_POST['username']);
		$email = htmlentities($_POST['email']);
		$password = htmlentities($_POST['password']);
		$confirmPassword = htmlentities($_POST['confirmPassword']);
		$lang = $_POST['lang'];
		$conditions = isset($_POST['conditions']);
		$active_code = md5($_POST['username'] + microtime());
	
		//echo $firstname."<br/>".$lastname."<br/>".$username."<br/>".$email;
	
		if (strlen($firstName) < 3) {
			$error = trad_lang('firstname_is_short');
		} elseif (strlen($lastName) < 3) {
			$error = trad_lang('lastname_is_short');
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = trad_lang('please_valide_email');
		} elseif (strlen($password) < 5) {
			$error = trad_lang('password_is_short');
		}
		// control the confirmPassword
		elseif ($confirmPassword != $password) {
			$error = trad_lang('password_isnot_confirm');
		} elseif (!$conditions) {
			$error = trad_lang('agree_fasso_condition');
		} else {
			//$firstName = utf8_encode($firstName);
			$password = md5($password);
			$firstName = html_entity_decode($_POST['firstname']);
			$lastName = html_entity_decode($_POST['lastname']);
			$userName = html_entity_decode($userName);
			$email = html_entity_decode($email);
			$lang = $_POST['lang'];
			$conditions = isset($_POST['conditions']);
	
			// On verifie si l'eamil ou le username exite deja
			function trad_double_lang($part1, $usermail, $part2) {
				global $en, $fr, $nko;
				if (LABEL_LANG == 'en') {
					return $en[$part1] . ' ' . $usermail . ' ' . $en[$part2];
				} elseif (LABEL_LANG == 'fr') {
					return $fr[$part1] . ' ' . $usermail . ' ' . $fr[$part2];
				} elseif (LABEL_LANG == 'nko') {
					return $nko[$part1] . ' ' . $usermail . ' ' . $nko[$part2];
				}
			}
	
			if (email_exists($email, $con)) {
				$error = trad_double_lang('sorry_email_exists_1', $email, 'sorry_email_exists_2');
			} else {
				if (username_exists($userName, $con)) {
					$error = trad_double_lang('sorry_username_exists_1', $userName, 'sorry_username_exists_2');
				} else {
					$insertQuery = "INSERT INTO registred (firstName, lastName, userName, email, language, password, active_code)
						VALUE('$firstName', '$lastName', '$userName', '$email', '$lang','$password', '$active_code') ";
	
					//print_r($insertQuery);
	
					if (mysqli_query($con, $insertQuery)) {
						setcookie('email', $email, 0, '/', '', false, true);
						setcookie('userName', $userName, 0, '/', '', false, true);
						echo $_COOKIE['userName'];
						echo $_COOKIE['email'];
						send_email($email, trad_lang('active_account'),
							trad_lang('hello_registered').$firstName." ".$lastName."\n\n".
							trad_lang('confirm_message_body_1')."\n\n".
							trad_lang('confirm_message_body_2')."\n\n".
							trad_lang('confirm_message_body_3')."\n\n".
							"\n\n link: http://localthost/karanta/user/active.php?username=".$userName."&active_code".$active_code
						 	."\n\n"."\n\n".trad_lang('forget_this_email')."\n\n"
						 );
	
						$succes = trad_lang('succes_registred').'<br>'.trad_lang('please_check_your_email');
						header("Refresh: 2;URL=afterRegist.php");// Redirection à près 2 secondes
					}
				}
			}
		}
	}
?>

<!doctype html>
<html 
	<?php
	if (LABEL_LANG == 'en') {
		echo 'dir="' . $en['direction'] . '"';
		echo 'lang="en"';
	} elseif (LABEL_LANG == 'fr') {
		echo 'dir="' . $fr['direction'] . '"';
		echo 'lang="fr"';
	} elseif (LABEL_LANG == 'nko') {
		echo 'dir="' . $nko['direction'] . '"';
		echo 'lang="nko"';
	}
	?> >
<head><title>Fasso | Sign Up</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/regist.css" />
<!-- JS file: error message to field required -->
<script type="text/javascript">
	function InvalidMsg(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity(
        	<?php
			if (LABEL_LANG == 'en') {
				echo '"' . $en['field_is_required'] . '"';
			} elseif (LABEL_LANG == 'fr') {
				echo '"' . $fr['field_is_required'] . '"';
			} elseif (LABEL_LANG == 'nko') {
				echo '"' . $nko['field_is_required'] . '"';
			}
			?>
        				);
    }
    else if(textbox.validity.typeMismatch){
        textbox.setCustomValidity(
        	<?php
			if (LABEL_LANG == 'en') {
				echo '"' . $en['info_is_not_valide'] . '"';
			} elseif (LABEL_LANG == 'fr') {
				echo '"' . $fr['info_is_not_valide'] . '"';
			} elseif (LABEL_LANG == 'nko') {
				echo '"' . $nko['info_is_not_valide'] . '"';
			}
			?>
				);
				}
				else {
					textbox.setCustomValidity('');
				}
				return true;
				}
</script>

</head>


<body 
	<?php
	if (LABEL_LANG == 'en') {
		echo 'dir="' . $en['direction'] . '"';
	} elseif (LABEL_LANG == 'fr') {
		echo 'dir="' . $fr['direction'] . '"';
	} elseif (LABEL_LANG == 'nko') {
		echo 'dir="' . $nko['direction'] . '"';
	}
	?>>

	<!-- The showing language -->
	<?php include("menu_of_language.php") ?>

	<div id="menu">
		<!-- Title of sign up on menu -->
		<a class="active" href="regist.php">
		<?php
			echo trad_lang('signUp_menu');
		?>
		</a>

		<!-- Title of login on menu -->
		<a href="login.php">
		<?php
			echo trad_lang('login_menu');
		?>
		</a>
	</div>
	<div class="signlogin">
		<!-- The title of sign up -->
		<h1><?php
			echo trad_lang('sign_up');
		?></h1>
		<!-- welcom message -->
		<p><?php
			echo trad_lang('welcome_message');
		?></p>
		
		<!-- please message -->
		<p><?php
			echo trad_lang('please_message');
		?></p>

		<!-- ERROR PLACE -->
		<div id="error"><?php echo $error; ?></div>
		<div id="succes"><?php echo $succes; ?></div>

		<form action='regist.php' method="post" 
			lang=<?php echo '"' . LABEL_LANG . '"'; ?> >


			<?php
			// function that restore the good value
			function restorvalue($name) {
				if (isset($_POST[$name])) {
					echo 'value="' . $_POST[$name] . '"';
				}
			}
			?>

			<table>
				<tr><td <?php echo align_by_lang() ?> >
				<?php
					echo trad_lang('firstname') . ': ';
				?> </td><td>
					<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
					<?php restorvalue("firstname"); ?>
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
				<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('firstname');
					}
 				?> </td></tr>

				<tr><td <?php echo align_by_lang() ?> >
				<?php
					echo trad_lang('lastname') . ': ';
				?> </td><td>
					<input class="textBox" type="text" name="lastname" maxlength="30" 
					<?php restorvalue("lastname"); ?>
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
				<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('lastname');
					}
 				?> </td></tr>

				<tr><td <?php echo align_by_lang() ?>>
					<?php echo trad_lang('username') . ': '; ?> </td><td>
					<input class="textBox" type="text" name="username" maxlength="20" 
					<?php restorvalue("username"); ?>
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
				<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('username');
					}
 				?> </td></tr>

				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('adressemail') . ': '; ?> </td><td>
					<input class="textBox" type="text" name="email" maxlength="60" 
					<?php restorvalue("email"); ?>
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
				<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('adressemail');
						}
				 ?> </td></tr>

				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('password') . ': '; ?> </td><td>
					<input class="textBox" type="password" name="password" maxlength="15" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
				<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('password');
					}
 				?> </td></tr>
				
				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('confirmPassword') . ': '; ?> </td><td>
					<input class="textBox" type="password" name="confirmPassword" maxlength="15" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
				<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('confirmPassword');
					}
 				?> </td></tr>

				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('my_language') . ': '; ?> </td><td>
					<select id="langues_selected" name ="lang">
						<?php
						foreach ($langues as $key => $value) {
							echo '<option value="' . $key . '"';
							if ($key == LABEL_LANG) {
								echo 'selected="selected"';
							}
							echo '>' . $value . '</option>';
						}
						?>
						</select>
				</td></tr>
				
				<tr><td></td><td><?php echo trad_lang('conditions'); ?> 
					<input class="checkbox" type="checkbox" name="conditions" maxlength="15" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
						<?php
						if (LABEL_LANG == 'en') {
							echo 'title="' . $en['conditions_agree'] . '"';
						} elseif (LABEL_LANG == 'fr') {
							echo 'title="' . $fr['conditions_agree'] . '"';
						} elseif (LABEL_LANG == 'nko') {
							echo 'title="' . $nko['conditions_agree'] . '"';
						}
						?> />
					 </td>
					<td <?php echo align_by_nko() ?>>
						<?php
						if (!isset($_GET['lang'])) { echo trad_nko('conditions');
						}
 					?> </td></tr>
			</table>
			<input id="soumettre" name="submit_register" type="submit" 
				<?php
				if (LABEL_LANG == 'en') {
					echo 'value="' . $en['submit_register'] . '"';
				} elseif (LABEL_LANG == 'fr') {
					echo 'value="' . $fr['submit_register'] . '"';
				} elseif (LABEL_LANG == 'nko') {
					echo 'value="' . $nko['submit_register'] . '"';
				}
				?>/>
		</form>
	</div>
</body>
</html>