<?php
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile_lang");
	include("../__soronta__/flo.php");
	$error = "";
	$succes = "";
	
	// GET language of user
	$user_id = $_SESSION['user_id'];
	$kan_array = get_kan($user_id, $con);
	$kan = $kan_array['kan'];
	if(isset($_POST['submit'])){
		$kan = $_POST['language'];
		//echo $kan;
		update_kan($user_id, $kan, $con);
	}
	
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso | Profile</title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
	 <link rel="stylesheet" href="css/styles_profile.css" /> 
</head>

<body dir="auto">

<!-- Entête -->
	<?php include("../__soronta__/_lowla_/header.php"); ?>

<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" class="contenu" class="ombre">

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
				<div id="paraTitre" >
					<h1 class="rectangle">My profile</h1>
				</div>
				
				<!-- Update more information -->
				<form class="infoPerson" action="#" method="post">
					<fieldset >
					<legend>My explanation language</legend>
					
					<label>Choise your language: </label>
						<select class="lang" name="language">

							<option value="nko" <?php if($kan=="nko")echo 'selected'?>>N'ko</option>

							<option value="en" <?php if($kan=="en")echo 'selected'?>>English</option>

							<option value="fr" <?php if($kan=="fr")echo 'selected'?>>Français</option>
						</select>
						<input id="soumettre" name="submit" type="submit" value="Save" />
						<p>This language will be your explanation language for N'ko courses and for your profile</p>
						<p>If your will pas to high level in courses, can change that to N'ko language to pratice N'ko courses.</p>
						<p>See the demonstration below!</p>
						
						<div class="video">
							
						</div>
					</fieldset>
				</form>

			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>

</body>
</html>