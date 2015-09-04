<?php

include("../__soronta__/flo.php"); // connect to lontabodo
require_once '_includes_/init.php';
include("../user/traduction.php");

define('THIS_PAGE', "register");
$error = "";
$succes = "";
$errors = [];
if (isset($_POST['register'])) {
    //require_once './_includes_/db_connect.php';
    $expected = ['firstname','lastname','username', 'email', 'pwd', 'confirm', 'conditions'];
    // Assign $_POST variables to simple variables 
    foreach ($_POST as $key => $value) {
        if (in_array($key, $expected)) {
            $$key = trim($value);
        }
    }
	
	
	$firstname = htmlentities($_POST['firstname']);
	$lastname = htmlentities($_POST['lastname']);
	$username = htmlentities($_POST['username']);
	$email = htmlentities($_POST['email']);
	$confirmPassword = htmlentities($_POST['confirmPassword']);
	$lang = $_POST['lang'];
	$conditions = isset($_POST['conditions']);
	$active_code = md5($_POST['username'] + microtime());
	
	$data = array($firstname, $lastname, $username, $email, $lang);
	if (strlen($firstname) < 3) {
		$error = trad_lang('firstname_is_short');
	} elseif (strlen($lastname) < 3) {
		$error = trad_lang('lastname_is_short');
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = trad_lang('please_valide_email');
	} elseif (strlen($pwd) < 5) {
		$error = trad_lang('password_is_short');
	}
	// control the confirmPassword
	elseif ($confirm != $pwd) {
		$error = trad_lang('password_isnot_confirm');
	} elseif (!$conditions) {
		$error = trad_lang('agree_fasso_condition');
	} else {
		$firstname = html_entity_decode($_POST['firstname']);
		$lastname = html_entity_decode($_POST['lastname']);
		$username = html_entity_decode($username);
		$email = html_entity_decode($email);
		$lang = $_POST['lang'];
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
			if (username_exists($username, $con)) {
				$error = trad_double_lang('sorry_username_exists_1', $username, 'sorry_username_exists_2');
			} else {
					
				//$data = array('firstname', 'lastname','username', 'email', 'pwd');
				foreach ($expected as $key => $value) {
					//$data[] = $_POST[$key];
					$succes = 'It is OK!';
				}
				print_r($data);
				//print_r($_POST);
            	try {
                    // Generate a random 8-character user key and insert values into the database
                    $user_key = hash('crc32', microtime(true) . mt_rand() . $username);
                    $sql = 'INSERT INTO users (user_key, username, pwd)
                            VALUES (:key, :username, :pwd)';
                    $stmt = $db->prepare($sql);
                    $stmt->bindParam(':key', $user_key);
                    $stmt->bindParam(':username', $username);
                    // Store an encrypted version of the password
                    $stmt->bindValue(':pwd', password_hash($pwd, PASSWORD_DEFAULT));
                    $stmt->execute();
					
					// Insert the user info
					$insertQuery = "INSERT INTO registred (firstName, lastName, userName, email, kan, active_code)
					VALUE('$firstname', '$lastname', '$username', '$email', '$lang', '$active_code') ";
					// Send the confirmation mail to user by his email
					if (mysqli_query($con, $insertQuery)) {
						setcookie('email', $email, 0, '/', '', false, true);
						setcookie('username', $username, 0, '/', '', false, true);
						//echo $_COOKIE['userName'];
						//echo $_COOKIE['email'];
						/*send_email($email, trad_lang('active_account'),
							trad_lang('hello_registered1')." ".$firstName." ".$lastName." ".
							trad_lang('hello_registered2')."<br>".
							trad_lang('confirm_message_body_1')."<br>".
							trad_lang('confirm_message_body_2')."<br>".
							trad_lang('confirm_message_body_3')."<br>"."<br>".
							'<a href="'.'http://fasso.org/karanta/user/activate.php?username='.$userName.'&active_code='.$active_code.'">
								'.trad_lang("this_link").'
							</a>'."<br>".
							"<br> http://fasso.org/karanta/user/activate.php?userName=".$userName."&active_code=".$active_code
						 	."<br>"."<br>".trad_lang('forget_this_email')."<br>"
						 );*/
	
						$succes = trad_lang('succes_registred').'<br>'.trad_lang('please_check_your_email');
						header("Refresh: 2;URL=afterRegist.php");// Redirection à près 2 secondes
					}
					
                } catch (\PDOException $e) {
                    if (0 === strpos($e->getCode(), '23')) {
                        // If the user key is a duplicate, regenerate, and execute INSERT statement again
                        $user_key = hash('crc32', microtime(true) . mt_rand() . $username);
                        if (!$stmt->execute()) {
                            throw $e;
                        }
                    }
                }
                // The rowCount() method returns 1 if the record is inserted,
                // so redirect the user to the login page
                if ($stmt->rowCount()) {
                    header('Location: login.php');
                    exit;
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
?> 
>
<head>
<meta charset="utf-8">
<link rel="icon" href="http://www.fasso.org/karanta/_djiya_/fassoIcone.ico" type="image/x-icon">
<title>Fasso | Sign Up</title>
    <link rel="stylesheet" href="../user/css/regist.css" />
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
	<?php include("../user/menu_of_language.php") ?>
	
	<div id="menu">
		<!-- Title of sign up on menu -->
		<a class="active" href="regist.php">
		<?php echo trad_lang('signUp_menu'); ?></a>

		<!-- Title of login on menu -->
		<a href="login.php">
		<?php echo trad_lang('login_menu'); ?></a>
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

		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
				<tr><td <?php echo align_by_lang() ?> >
					<?php
						echo trad_lang('firstname') . ': ';
					?> </td><td>
					<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
						oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
						<?php
				        if (isset($firstname) && !isset($errors['firstname'])) {
				            echo 'value="' . htmlentities($firstname) . '">';
				        } else {
				            echo '>';
				        } ?></td>
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
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required
					<?php
			        if (isset($lastname) && !isset($errors['lastname'])) {
			            echo 'value="' . htmlentities($lastname) . '">';
			        } else {
			            echo '>';
			        } ?></td>
					<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('lastname');
					}
 				?> </td></tr>

				<tr><td <?php echo align_by_lang() ?>>
					<?php echo trad_lang('username') . ': '; ?> </td><td>
					<input class="textBox" type="text" name="username" maxlength="20" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
						<?php
			        if (isset($username) && !isset($errors['username'])) {
			            echo 'value="' . htmlentities($username) . '">';
			        } else {
			            echo '>';
			        }
			        if (isset($errors['username'])) {
			            echo $errors['username'];
			        } elseif (isset($errors['failed'])) {
			            echo $errors['failed'];
			        }
			        ?></td>
					<td <?php echo align_by_nko() ?>>
							<?php
						if (!isset($_GET['lang'])) { echo trad_nko('username');
						}
	 				?> 
	 				</td>
 				</tr>

				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('adressemail') . ': '; ?> </td><td>
					<input class="textBox" type="text" name="email" maxlength="60" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
					<?php
				        if (isset($email) && !isset($errors['email'])) {
				            echo 'value="' . htmlentities($email) . '">';
				        } else {
				            echo '>';
				        } ?></td>
					<td <?php echo align_by_nko() ?>>
						<?php
							if (!isset($_GET['lang'])) { echo trad_nko('adressemail');
						}
				 		?> 
				 </td></tr>

				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('password') . ': '; ?> </td><td>
					<input class="textBox" type="password" name="pwd" maxlength="15" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
					<td <?php echo align_by_nko() ?>>
						<?php
					if (!isset($_GET['lang'])) { echo trad_nko('password');
					}
 				?> </td></tr>
				
				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('confirmPassword') . ': '; ?> </td><td>
					<input class="textBox" type="password" name="confirm" maxlength="15" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
					<td <?php echo align_by_nko() ?>>
					<?php 
				        if (isset($errors['confirm'])) {
				            echo $errors['confirm'];
				        } elseif (isset($errors['nomatch'])) {
				            echo $errors['nomatch'];
				        }
				       
					if (!isset($_GET['lang'])) { echo trad_nko('confirmPassword');
					}
	 				?> </td>
	 			</tr>

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
					</td><td <?php echo align_by_nko() ?>>
						<?php if (!isset($_GET['lang'])){ echo trad_nko('my_language');} ?> 
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
        	<input type="submit" name="register" id="soumettre" 
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