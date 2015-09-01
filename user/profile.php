<?php
	
	define("MAIN_PAGE", "profile");
	include("../__soronta__/flo.php");
	include ("traduction.php");
	$error = "";
	$succes = "";
	
	/*if(!logged_in())
	{
		header("Location: login.php");
		exit();
	}else{*/
		$userName = $_SESSION['userName'];
		//$image_name = $_FILES['avatar']['name'];
		$user_id = user_id_from_username($userName, $con);
		$profile_image = get_djiya_name($userName, $con);
		$image_name = $profile_image['djiya'];
		$_SESSION['image'] = './user_image/'.$image_name;
		
		if(isset($_POST['submit']) && !$_FILES['avatar']['error']) {
			$firstName = htmlentities($_POST['firstname']);
			$lastName = htmlentities($_POST['lastname']);
			$userName = htmlentities($_POST['username']);
			$email = htmlentities($_POST['email']);
			$max_size = '45728';
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
			}else{
							
				//$password = md5($password);
				$firstName = html_entity_decode($_POST['firstname']);
				$lastName = html_entity_decode($_POST['lastname']);
				$userName = html_entity_decode($userName);
				$email = html_entity_decode($email);
					
				if(isset($_FILES['avatar'])){
					$image = $_FILES['avatar'];
					$verif_imag = getimagesize($_FILES['avatar']['tmp_name']);
					if($verif_imag && $verif_imag[2] < 4){
						//move_uploaded_file($_FILES['avatar']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'test/img/'.basename($_FILES['avatar']['name']));
						$image_name = date("Y_m_d_h_i_sa").$_FILES['avatar']['name'];
						//move_uploaded_file($image['tmp_name'], './user_image/'.$_FILES['avatar']['name']);
						if(move_uploaded_file($image['tmp_name'], './user_image/'.$image_name)){
							$error = 'image uploaded successfully !'.'<br>';
							$userName = $_SESSION['userName'];
							//$user_id = user_id_from_username($userName, $con);
							update_djiya($userName, $con, $image_name);
							$_SESSION['image'] = './user_image/'.$image_name;			
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
	//}
	
?>


<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso | Profile </title>
	<link rel="icon" href="images/fassoIcone.ico" type="image/x-icon">
	<link rel="stylesheet" href="../_css_/styles_contenu_full.css" />
	<link rel="stylesheet" href="../_css_/styles_header.css" />
	<link rel="stylesheet" href="../_css_/styles_contenu_titre.css" />
	<link rel="stylesheet" href="css/styles_profile.css" />
	<link rel="stylesheet" href="css/editable.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/site.js"></script>
</head>

<body dir="auto">
<!-- Entête -->
	<?php include("../__soronta__/_lowla_/header.php"); ?>

<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" id="contenu" class="ombre">
					
		<!-- Titre -->
			<div id="titre" class="ombre">
				<h1>Profile info</h1>
				<div class="titre_contenu">
					<div><?php
						if(isset($_SESSION['image'])){
							echo '<img class="image_profile" src="'.$_SESSION["image"].'" />';
						}
					?></div>
					<ul id="lesTitres">
						<li class="active"><a href="profile.php">Infos</a>
						<li><a href="profile_language.php">Language</a>
						<li><a href="profile_moreInfo.php">More</a>
						<li><a href="profile_parent.php">Parents</a>
					</ul>
				</div>
			</div>

		<!-- Paragraphe texte -->
			<div id="para">
				<div id="paraTitre" class="rectangle ombre">
					<h1 class="rectangle">My profile</h1>
				</div>
				<div id="paraTexte" class="rectangle ombre">
				
				<table class="table"><tr>
				<td class="infoPerson"><fieldset >
					<legend>Registred Information</legend>

					<!-- Update information -->
					<table class="table">
						<tr><td>Firstname: </td><td>
							<label class="labaleTable" name="firstname">Firstname</label></td></tr>
						<tr><td>Lastname: </td><td>
							<label class="labaleTable" name="lastname">Lastname</label></td></tr>
						<tr><td>Username: </td><td>
							<label class="labaleTable" name="username">Username</label></td></tr>
						<tr><td>Adressemail: </td><td>
							<label class="labaleTable" name="email">Adressemail</label></td></tr>
					</table>
					<p>Date of my registration on Fasso: <?php ?> </p>
					<p>Date of last edition: <?php ?> </p>
				</fieldset></td>

				<!-- Update information ---Form --- -->
				<td class="infoPerson">
				<form action="profile.php" method="post" enctype="multipart/form-data">
					<fieldset >
					<legend>Edit my Information</legend>
					<table class="table">
						<tr><td>Firstname: </td><td>
							<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Lastname: </td><td>
							<input class="textBox" type="text" name="lastname" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Username: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Adressemail: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Profile picture: </td><td>
							<input class="file" type="file" name="avatar" title="upload image" value="Upload"
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
					</table>
					<input id="soumettre" name="submit" type="submit" value="Save edite" />
					</fieldset>
				</form></td>
				</tr></table>
					<div <!--style="border:1px solid #000; height:220px; display: block;-->">
					<?php 
						if(isset($_POST['avatar'])){
							var_dump($_FILES['avatar']);
							echo $error;
						}
						//print_r($user_id) ;
						//echo $user_id['Id_registred'];
						//echo $userName;
						echo $error;
						echo $image_name;
						if(isset($taille)){
							echo $taille;
						}
						if(isset($_SESSION['image'])){
							//echo '<img class="image_profile" style="float:right;" src="'.$_SESSION["image"].'" />';
						}
					?>
					</div>
				</div>	
			</div>
			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>
</body>
</html>