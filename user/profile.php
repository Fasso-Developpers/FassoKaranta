<?php
	
	define("MAIN_PAGE", "profile");
	include("../__soronta__/flo.php");
	$error = "";
	$succes = "";
	
	if(!logged_in())
	{
		header("Location: login.php");
		exit();
	}
	
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
			<div id="titre" class="rectangle ombre">
				<h1>Profile info</h1>
				<ul id="lesTitres">
					<li class="active"><a href="profile.php">Infos</a>
					<li><a href="profile_language.php">Language</a>
					<li><a href="profile_moreInfo.php">More</a>
					<li><a href="profile_parent.php">Parents</a>
				</ul>
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
							<label class="labaleTable" name="firstname">Lastname</label></td></tr>
						<tr><td>Username: </td><td>
							<label class="labaleTable" name="firstname">Username</label></td></tr>
						<tr><td>Adressemail: </td><td>
							<label class="labaleTable" name="firstname">Adressemail</label></td></tr>
					</table>
					<p>Date of my registration on Fasso: <?php ?> </p>
					<p>Date of last edition: <?php ?> </p>
				</fieldset></td>

				<!-- Update information -->
				<td class="infoPerson">
				<form action="#" method="post">
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
						<tr><td>Password: </td><td>
							<input class="textBox" type="password" name="password" maxlength="15" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
					</table>
					<input id="soumettre" name="submit" type="submit" value="Save edite" />
					</fieldset>
				</form></td>
				</tr></table>

				</div>
			</div>
			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>

</body>
</html>