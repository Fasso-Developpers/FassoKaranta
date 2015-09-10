<?php
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile_mere");
	include("../__soronta__/flo.php");
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

<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" class="contenu" class="ombre">

		<!-- Titre -->
			<div id="titre" class="rectangle ombre">
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
				<div id="paraTitre" class="rectangle ombre">
					<h1 class="rectangle">My profile</h1>
				</div>

				<!-- Update more information -->
				<form class="infoPerson" action="#" method="post">
					<fieldset >
					<legend>Parent of my mother</legend>
					<table class="table">
						<tr><td>Ma Grand mère: </td><td>
							<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
							<td><input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Mère de grand mère: </td><td>
							<input class="textBox" type="text" name="firstname" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
							<td><input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Grand mère de grand mère: </td><td>
							<input class="textBox" type="text" name="lastname" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
							<td><input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Mon Grand père: </td><td>
							<input class="textBox" type="text" name="lastname" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
							<td><input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Père de Grand père: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
							<td><input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td>Grand Père de Grand père: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
							<td><input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td colspan="2">Village de Grand mère: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						<tr><td colspan="2">Village de Grand père: </td><td>
							<input class="textBox" type="text" name="username" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td>
						</tr>
						

						<tr><td></td><td></td><td>
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