<?php
require_once '_includes_/init.php';
include("../__soronta__/_keya_/function.php"); // connect to lontabodo
include("../user/traduction.php");
	
	// this page contstant
	define('THIS_PAGE', "login");
	
use _Sessions_\AutoLogin;
$error = "";
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $pwd = trim($_POST['pwd']);
    $stmt = $db->prepare('SELECT pwd FROM users WHERE username = :username');
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $stored = $stmt->fetchColumn();
    if (password_verify($pwd, $stored)) {
        session_regenerate_id(true);
        $_SESSION['username'] = $username;
        $_SESSION['authenticated'] = true;
        if (isset($_POST['remember'])) {
            // create persistent login
            $autologin = new AutoLogin($db);
            $autologin->persistentLogin();
        }
        header('Location: restricted1.php');
        exit;
    } else {
        $error = 'Login failed. Check username and password.';
    }
}else{
	echo 'error !';
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
<head>
<meta charset="utf-8">
<link rel="icon" href="http://www.fasso.org/karanta/_djiya_/fassoIcone.ico" type="image/x-icon">
<head><title>Fasso | Login</title>
    <link rel="stylesheet" href="../user/css/regist.css" />
    <!--<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/regist.css" rel="stylesheet" type="text/css">-->
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
	<?php include("../user/menu_of_language.php") ?>
	
	<div id="menu">
		<!-- Title of sign up on menu -->
		<a href="register.php">
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
	
	
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
		    <tr><td><?php echo trad_lang('username'); ?> 
				</td><td <?php echo align_by_lang() ?> >
		        <input type="text" name="username" id="username" 
		        oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required/>
		    	<td <?php echo align_by_nko() ?>>
				<?php if (!isset($_GET['lang'])){ echo trad_nko('username');} ?> </td>
			</tr>
		    <tr><td>
					<?php echo trad_lang('password'); ?> 
					</td><td <?php echo align_by_lang() ?> >
		        <input type="password" name="pwd" id="pwd" 
		        oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required/></td>
				<td <?php echo align_by_nko() ?>>
					<?php if (!isset($_GET['lang'])){ echo trad_nko('password');} ?> </td>
			</tr>
		    <!--<p>
		        <input type="checkbox" name="remember" id="remember">
		        <label for="remember">Remember me </label>
		    </p>-->
		    </table>
		    <input id="soumettre" name="login" type="submit" 
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