<?php
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile_parents");
	include("../__soronta__/flo.php");
	include_once ("traduction.php");
	$error = "";
	$succes = "";

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
	<?php include("subtitle_profile.php"); ?>
	
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
					<legend>Information of my parents</legend>
					<table class="table">
						<tr><td>First Name of Mother: </td><td>
							<input class="textBox" type="text" name="mother_firstname" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Last Name of your Mother: </td><td>
							<input class="textBox" type="text" name="mother_lastname" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Native village of Mother: </td><td>
							<input class="textBox" type="text" name="mother_place" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Number children of Mother: </td><td>
							<input class="textBox" type="text" name="mother_children" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Place in manden: </td><td>
							<input class="textBox" type="text" name="mother_manden_place" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>First name of your Father: </td><td>
							<input class="textBox" type="text" name="father_firstname" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Native village of Father: </td><td>
							<input class="textBox" type="text" name="father_place" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Number children of Father: </td><td>
							<input class="textBox" type="text" name="father_children" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td>Place in manden: </td><td>
							<input class="textBox" type="text" name="father_manden_place" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>

						<tr><td></td><td>
							<input id="soumettre" name="submit" type="submit" value="Save" /></td></tr>
					</table>
					
					</fieldset>
				</form>

			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>

</body>
</html>