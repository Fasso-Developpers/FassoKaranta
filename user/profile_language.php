<?php
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile_lang");
	include("../__soronta__/flo.php");
	$error = "";
	$succes = "";
	
	// GET language of user
	$user_id = $_SESSION['user_id'];
	$kan_array = get_kan($user_id, $con);
	$f_kan = $kan_array['f_kan'];
	$y_kan = $kan_array['y_kan'];
	if(isset($_POST['submit'])){
		$f_kan = $_POST['e_language'];
		$y_kan = $_POST['d_language'];
		//echo $kan;
		update_kan($user_id, $f_kan, $y_kan, $con);
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
						<legend>My languages (choose your language)</legend>
						
						<label>Explanation language: </label>
						<select class="lang" name="e_language">

							<option value="nko" <?php if($f_kan=="nko")echo 'selected'?>>N'ko</option>

							<option value="en" <?php if($f_kan=="en")echo 'selected'?>>English</option>

							<option value="fr" <?php if($f_kan=="fr")echo 'selected'?>>Français</option>
						</select>
						<label>Display language: </label>
						<select class="lang" name="d_language">

							<option value="nko" <?php if($y_kan=="nko")echo 'selected'?>>N'ko</option>

							<option value="en" <?php if($y_kan=="en")echo 'selected'?>>English</option>

							<option value="fr" <?php if($y_kan=="fr")echo 'selected'?>>Français</option>
						</select>
						<input id="soumettre" name="submit" type="submit" value="Save" />
						<p>Explanation language will use for N'ko courses</p>
						
						
						
						<p>Display language will use to every page in Fasso karanta and your profile</p>
						
						
						<p>If you pass to high level in N'ko courses, we recommand you to choose N'ko for all,
							to pratice your N'ko courses.</p>
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