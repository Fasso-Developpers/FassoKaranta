<?php
	define("MAIN_PAGE", "profile");
	include("../__soronta__/flo.php");
	$error = "";
	$succes = "";
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso | Profile</title>
	<link rel="icon" href="images/fassoIcone.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/styles_header.css" />
	<link rel="stylesheet" href="../css/styles_contenu_full.css" />
	<link rel="stylesheet" href="../css/styles_header.css" />
	<link rel="stylesheet" href="../css/styles_contenu_titre.css" />
	<link rel="stylesheet" href="css/styles_profile.css" />
	<link rel="stylesheet" href="css/editable_language.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/site.js"></script>
</head>

<body dir="auto">

<!-- Entête -->
	<?php include("../__soronta__/_lowla_/header.php"); ?>

<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" id="contenu" class="ombre">

		<!-- Titre -->
			<div id="titre" class="rectangle ombre">
				<h1>Profile info</h1>
				<ul id="lesTitres">
					<li><a href="profile.php">Infos</a>
					<li class="active"><a href="language.php">Language</a>
					<li><a href="profile_moreInfo.php">More</a>
					<li><a href="profile_parent.php">Parents</a>
				</ul>
			</div>

		<!-- Paragraphe texte -->
				<div id="paraTitre" class="rectangle ombre">
					<h1 class="rectangle">My profile</h1>
				</div>
				<div id="paraTexte" class="rectangle ombre">
				

				<!-- Update more information -->
				<form class="infoPerson" action="#" method="post">
					<fieldset >
					<legend>My explanation language</legend>
					
					<label>Choise your language: </label>
						<select class="lang" name="language">

							<option value="en">English</option>

							<option value="fr">Français</option>

							<option value="nko">N'ko</option>
						</select>
						<input id="soumettre" name="submit" type="submit" value="Save" />
						<p>This language will be your explanation language for N'ko courses and for your profile</p>
						<p>If your will pas to high level in courses, can change that to N'ko language to pratice N'ko courses.</p>
						<p>See the demonstration below!</p>
					</fieldset>
				</form>
				<div class="video">
					<div class="demo"></div>
					<div class="demo"></div>
					<div class="demo"></div>
				</div>
			</div>
			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>

</body>
</html>