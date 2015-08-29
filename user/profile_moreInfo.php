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
	<link rel="stylesheet" href="../_css_/styles_header.css" />
	<link rel="stylesheet" href="../_css_/styles_contenu_full.css" />
	<link rel="stylesheet" href="../_css_/styles_header.css" />
	<link rel="stylesheet" href="../_css_/styles_contenu_titre.css" />
	<link rel="stylesheet" href="css/styles_profile.css" />
	<link rel="stylesheet" href="css/editable_moreInfo.css" />

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
					<li><a href="profile_language.php">Language</a>
					<li class="active"><a href="profile_moreInfo.php">More</a>
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
					<legend>Edit more Information</legend>
					<table class="table">
						<tr><td>Djamun: </td><td>
							<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Sanankun: </td><td>
							<input class="textBox" type="text" name="lastname" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Age: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Sexe: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Tel.: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>First Name of Mother: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Last Name of your Mother: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>First name of your Father: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Country: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>City: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Pays of manden: </td><td>
							<input class="textBox" type="text" name="email" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>

						<tr><td></td><td>
							<input id="soumettre" name="submit" type="submit" value="Save" /></td></tr>
					</table>
					
					</fieldset>
				</form>

			</div>
			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>

</body>
</html>