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
	<link rel="stylesheet" href="css/editable_parent.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="../_js_/site.js"></script>
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
					<li><a href="profile_moreInfo.php">More</a>
					<li class="active"><a href="profile_parent.php">Parents</a>
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
					<legend>Parent of my mother</legend>
					<table class="table">
						<tr><td>Prenom de ma Grand mère: </td><td>
							<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Nom de ma Grand mère: </td><td>
							<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Prennom Mère de ma grand mère: </td><td>
							<input class="textBox" type="text" name="lastname" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Nom Mère de ma grand mère: </td><td>
							<input class="textBox" type="text" name="lastname" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Prenom Grand mère de ma grand mère: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Nom Grand mère de ma grand mère: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
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