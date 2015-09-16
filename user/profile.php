<?php
	
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile");
	include("../__soronta__/flo.php");
	include ("traduction.php");
	$error = "";
	$succes = "";

	//$image_name = $_FILES['avatar']['name'];
	if(is_not_login()){ // If not connected, say you must login
		echo '<!doctype html>';
		echo '<html>';
		echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<title>Profile</title>';
		include("../__soronta__/_lowla_/header.php");
		echo '<body>';
		echo '<h1>You are not connected</h1>';
		echo '<p>You must be connected to access your profile</p>';
		echo '<p>Please go to <a href="login.php">connexion page</a> to login</p>';
		echo '</body>';
		echo '</head>';
		echo '</html>';
	
	}else{
		$user_id = $_SESSION['user_id'];
		$profile_info = info_to_profile($user_id, $con);
		
		$firstname =  $profile_info['firstName'];
		$lastname =  $profile_info['lastName'];
		$userName =  $profile_info['userName'];
		$email =  $profile_info['email'];
		$inscri_date =  $profile_info['join_date'];
		
		/* ********** USER PROFILE IMAGE ********* */
		//$profile_image = get_djiya_name($user_id, $con);
		$image_name = $profile_info['djiya'];
		$_SESSION['image'] = './user_image/'.$image_name;
		// change image name to show for user
		$img_name_array = explode('--', $image_name);
		$image_show = $img_name_array[1];
		
		if(isset($_POST['submit']) && !$_FILES['avatar']['error']) {
			$firstName = htmlentities($_POST['firstname']);
			$lastName = htmlentities($_POST['lastname']);
			$userName = htmlentities($_POST['username']);
			$email = htmlentities($_POST['email']);
			$image = $_FILES['avatar']['name'];
			$tmp_image = $_FILES['avatar']['tmp_name'];
			//$taille = filesize($_FILES['avatar']['tmp_name']);
			//$password = htmlentities($_POST['password']);
			define("FILE_SIZE", filesize($_FILES['avatar']['tmp_name']));
			
			if (strlen($firstName) < 3) {
				$error = trad_lang('firstname_is_short');
			} elseif (strlen($lastName) < 3) {
				$error = trad_lang('lastname_is_short');
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error = trad_lang('please_valide_email');
			} elseif (FILE_SIZE > '3145728') {
				 // we dont want to upload the image grather than 3 MO.
				$error = "This image is greather than maximum size: 3 Mo"."<br>";
				$error .= "Please choose another image"."<br>";
				$error .= "Before that, your old image will be use for your profile".'<br>';
			}
			//print_r($_FILES['avatar']);
			  
			 
			else{
							
				//$password = md5($password);
				$firstName = html_entity_decode($_POST['firstname']);
				$lastName = html_entity_decode($_POST['lastname']);
				$userName = html_entity_decode($userName);
				$email = html_entity_decode($email);
					
				if(isset($_FILES['avatar'])){
					$image = $_FILES['avatar'];
					$verif_imag = getimagesize($_FILES['avatar']['tmp_name']);
					if($verif_imag && $verif_imag[2] < 4){ //The image format is ok
						$image_name = date("Y_m_d_h_i_sa").'--'.$_FILES['avatar']['name'];
						if($verif_imag[0] <= 200 && $verif_imag[1] <= 200 ){
							echo 'image uploaded successfully !';
							if(move_uploaded_file($image['tmp_name'], './user_image/'.$image_name)){
								$error = 'image uploaded successfully !'.'<br>';
								//$user_id = user_id_from_username($userName, $con);
								update_djiya($userName, $con, $image_name);
								$_SESSION['image'] = './user_image/'.$image_name;			
							}
						}else{
							if(move_uploaded_file($image['tmp_name'], './user_image/_great_/'.$image_name)){
								$error = 'Image width or height are great than 200px <br>';
								$error .= "It is saved but it can't be use for your profile image <br>";
								$error .= "You can resize the image to 200px * 200px to use it<br>";
								$error .= "Now it dimension is: $verif_imag[0] * $verif_imag[1] <br>";
								$error .= "Or wait our Technician to do for you ";
								
								// unset image in variable
								$verif_imag = "";			
							}
						}
					}else{
						$error = 'This file is not a image'.'<br>';
						$error .= 'Please choose a image to your profile'.'<br>';
						unlink($_FILES['avatar']['tmp_name']);
						unset($_FILES['avatar']);
					}	
				}	
			}
		}
?>


<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso | Profile </title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
	 <link rel="stylesheet" href="css/styles_profile.css" /> 
</head>

<body dir="auto">
<!-- Entête -->
	<?php include("../__soronta__/_lowla_/header.php"); ?>
	<?php include_once("../__soronta__/logout_button.php"); ?>
<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" class="contenu" >
					
		<!-- Titre -->
			<div id="titre" class="ombre">
				<h1 id="hautTitreH1">Profile info</h1>
				<div class="titre_contenu">
					<div><?php
						if(isset($_SESSION['image'])){
							echo '<img class="image_profile" src="'.$_SESSION["image"].'" />';
						}
					?></div>
					<ul id="lesTitres">
						<?php include('_profile_pages_.php') ?>
					</ul>
				</div>
			</div>

		<!-- Paragraphe texte -->
			<div id="para">
				<div id="paraTitre" >
					<h1 class="rectangle">My profile</h1>
				</div>
				
				<div >
					<?php 
					echo $img_show;
					?>
					</div>
				
				<form action='profile.php' method="post" enctype="multipart/form-data">
				<div class="infoPerson">
				<fieldset >
					<legend>Registration Infos</legend>
					<!-- Update information -->
					<table class="table"  cellspacing=0>
						<tr>
							<td>Firstname: </td><td>
							<label class="labaleTable" name="firstname"><?php echo $firstname ?></label></td><td>
							<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr>
							<td>Lastname: </td><td>
							<label name="lastname"><?php echo $lastname ?></label></td><td>
							<input class="textBox" type="text" name="lastname" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Username: </td><td>
							<label name="username"><?php echo $userName ?></label></td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Adressemail: </td><td>
							<label  name="email"><?php echo $email ?></label></td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Profile picture: </td><td><?php echo $image_show ?></td><td>
							<input type="file" name="avatar" /></td>
						</tr>
						<tr><td colspan=2>Registration date: </td>
							<td><?php echo $inscri_date; ?></td>
						</tr>
						<tr><td colspan=2>Last update: </td>
							<td><?php ?></td>
						</tr>
						<tr><td></td><td></td>
							<td> <input id="soumettre" name="submit" type="submit" value="Save edite" /></td>
						</tr>
						<tr>
							<td colspan=3> <?php echo $error; ?></td>
						</tr>
					</table>
					<?php 
						/*
						print_r($_FILES['avatar']);
						if(isset($_POST['avatar'])){
							var_dump($_FILES['avatar']);
						}
						*/
					?>
				</fieldset></td>

				
					<div ">
					<?php 
						/*print_r($_FILES['avatar']);
						if(isset($_POST['avatar'])){
							var_dump($_FILES['avatar']);
							print_r($_FILES['avatar']);
							echo $error;
						}
						
						if(isset($taille)){
							echo $taille;
						}
						if(isset($_SESSION['image'])){
						}*/
					?>
					</div>
				</div></form>	
			</div>
		</div>
</body>
</html>

 <?php } ?> 