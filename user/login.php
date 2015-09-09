<?php

	include_once("../__soronta__/flo.php");
	include("traduction.php");

	// this page contstant
	define('THIS_PAGE', "login");

	// if you are login redirect to profile.php
		//echo $_SESSION['userName'];
		echo $_SESSION['user_id'];
		
		
		is_login();

		$error = "";
		$succes = "";
		if(isset($_POST['submit_login']))
		{
			$userName = htmlentities($_POST['username']);
			$password = htmlentities($_POST['password']);
			$checkbox = isset($_POST['keep']);
	
			$userName = html_entity_decode($userName);
			$password = html_entity_decode($password);
			
			if (username_exists($userName, $con))
			{
				//$result = mysqli_query($con, "SELECT password FROM registred WHERE userName='$userName' ");
				$result = mysqli_query($con, "SELECT password FROM user WHERE username='$userName' ");
				$retrievepassword = mysqli_fetch_assoc($result);
	
				$retrievepassword['password'];
				/*if (user_is_activated($userName, $con) === false) {
					$error = "Your account is not activated";
				}
				else
				 */
				 if(md5($password) !== $retrievepassword['password'] )
				{
					if (LABEL_LANG == 'en'){
						$error = $en['password_incorrect']; 
					}elseif (LABEL_LANG == 'fr') {
						$error = $fr['password_incorrect']; 
					}elseif (LABEL_LANG == 'nko') {
						$error = $nko['password_incorrect']; 
					}else{
						$error = $en['password_incorrect']; 
					}
					//print_r(user_is_activated($userName, $con));
					//echo md5($password).' and '.$retrievepassword['password'];
				}
				else 
				{	//$succes = "You are connected now !";
					$result1 = mysqli_query($con, "SELECT user_id FROM user WHERE username='$userName' ");
					$user_id_array = mysqli_fetch_assoc($result1);
					$user_id = $user_id_array['user_id'];
					//print_r($user_id_array);
					//echo '<br>'.$user_id;
					
					$level_in_array = get_nko_level($user_id, $con);
					$level_in = $level_in_array['nko_level'];
					//echo $level_in;
					 
					$lang_array = get_kan($user_id, $con);
					$lang = $lang_array['kan'];
					//echo '<br>'.$lang;
					connect_user($user_id, $level_in, $lang , $con);
					//echo '<br>'.$lang, '<br>'.$level_in, '<br>'.$user_id;
					//if(connect_user($user_id, $level_in, $lang , $con)){
						$error = 'You are connected';
						echo "You are connected now !";
						
						$_SESSION['user_id'] = $user_id;
						//$_COOKIE['user_id'] = $user_id;
						
						$_SESSION['userName'] = $userName;
						//$_COOKIE['userName'] = $userName;
		
						//echo $_SESSION['userName'].' '.$_COOKIE['userName'];
						
						if($checkbox == "on")
						{
							setcookie("userName",$userName, time()+3600);
						}
						header("Location: ../index.php");
						exit();
					/*}else{
						echo "Error !";
					}*/

				}
	
			}
			else
			{
				if (LABEL_LANG == 'en'){
					$error = $en['error_username_not_exist']; 
				}elseif (LABEL_LANG == 'fr') {
					$error = $fr['error_username_not_exist']; 
				}elseif (LABEL_LANG == 'nko') {
					$error = $nko['error_username_not_exist']; 
				}
				//echo "not matche !";
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
<head><title>Fasso | Login</title>
<link rel="stylesheet" href="css/regist.css" />
<!-- JS file: error message to field required -->
<script type="text/javascript">
	function InvalidMsg(textbox) {
	    if (textbox.value == '') {
	        textbox.setCustomValidity(
	        	<?php 
					if (LABEL_LANG == 'en'){
						echo '"'.$en['field_is_required'].'"'; 
					}elseif (LABEL_LANG == 'fr') {
						echo '"'.$fr['field_is_required'].'"'; 
					}elseif (LABEL_LANG == 'nko') {
						echo '"'.$nko['field_is_required'].'"'; 
					}
				?>
	        );
	    }
	    else if(textbox.validity.typeMismatch){
	        textbox.setCustomValidity(
	        	<?php 
					if (LABEL_LANG == 'en'){
						echo '"'.$en['info_is_not_valide'].'"'; 
					}elseif (LABEL_LANG == 'fr') {
						echo '"'.$fr['info_is_not_valide'].'"'; 
					}elseif (LABEL_LANG == 'nko') {
						echo '"'.$nko['info_is_not_valide'].'"'; 
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

<body>
<!-- The showing language -->
	<?php include("menu_of_language.php") ?>

	<div id="menu">
		<!-- Title of sign up on menu -->
		<a href="regist.php">
		<?php echo trad_lang('signUp_menu'); ?></a>

		<!-- Title of login on menu -->
		<a class="active" href="login.php">
		<?php echo trad_lang('login_menu'); ?></a>
	</div>
	<div class="signlogin">
		<!-- Login title-->
		<h1><?php echo trad_lang('login'); ?> </h1>
		
		<!-- Login comment-->
		<p><?php echo trad_lang('please_login_to_start'); ?> </p>

		<!-- ERROR or SUCCES PLACE -->
		<?php 
			if($error != "")
			{
				echo'<div id="error">'.$error.'</div>';
			}
			elseif ($succes != "") {
				echo'<div id="succes">'.$succes.'</div>';
			}
		?>

		<form action="login.php" method="post">
			<table>
				<tr>
					<td><?php echo trad_lang('username'); ?> 
					</td><td <?php echo align_by_lang() ?> >
					<input class="textBox" type="text" name="username" maxlength="60" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
					<td <?php echo align_by_nko() ?>>
						<?php if (!isset($_GET['lang'])){ echo trad_nko('username');} ?> </td>
				</tr>
				

				<tr><td>
					<?php echo trad_lang('password'); ?> 
					</td><td <?php echo align_by_lang() ?> >
					<input class="textBox" type="password" name="password" maxlength="15" 
					oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
					<td <?php echo align_by_nko() ?>>
						<?php if (!isset($_GET['lang'])){ echo trad_nko('password');} ?> </td>
				</tr>

				<tr><td <?php echo align_by_lang() ?> >
					<?php echo trad_lang('my_language'); ?> 
				</td><td>
					<select id="langues_selected" name ="lang">
						<?php 
							foreach ($langues as $key => $value) {
								echo '<option value="'.$key.'"';
								if ($key == LABEL_LANG){
									echo 'selected="selected"';
								}
								echo '>'.$value.'</option>';
							}
						?>
						</select>
				</td>
					<td <?php echo align_by_nko() ?>>
						<?php if (!isset($_GET['lang'])){ echo trad_nko('my_language');} ?> </td>
				</tr>

				<tr><td></td><td>
					<?php echo '<span class="checkbox">'. trad_lang('remember_me').' </span>'?>
					
					<input class="textBox" type="checkbox" name="keep" 
					title="<?php echo trad_lang('Remenber_me_focus'); ?> " />
					
					<?php if (!isset($_GET['lang'])){
							echo '<span class="checkbox">'.trad_nko('remember_me').'</span>'
					;} ?>
				</td></tr>
			</table>
			<input id="soumettre" name="submit_login" type="submit" 
			<?php 
					if (LABEL_LANG == 'en'){
						echo 'value="'.$en['submit_login'].'"'; 
					}elseif (LABEL_LANG == 'fr') {
						echo 'value="'.$fr['submit_login'].'"'; 
					}elseif (LABEL_LANG == 'nko') {
						echo 'value="'.$nko['submit_login'].'"'; 
					}
				?> />
		</form>
	</div>
</body>
</html> 