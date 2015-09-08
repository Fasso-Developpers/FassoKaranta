<?php
	
	include_once("../__soronta__/flo.php");
	include_once("../user/index.php");
	$error = "";
	$succes = "";
	define("MAIN_PAGE", "nko_index");
	define("CHAPITRE", "");
	
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso - N'ko school</title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
	<link rel="stylesheet" href="css/titre_lesson.css" />
</head>

<body dir="auto">

<!-- Entête -->
	<?php include_once("../__soronta__/logout_button.php"); ?>
	
	<?php include("../__soronta__/_lowla_/header.php"); ?>
	
	<?php include("subtitle_nko.php"); ?>
<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" class="contenu" class="ombre">

		<!-- Titre -->
			<div id="titre" class="rectangle ombre">
				<h1 id="hautTitreH1">Menu contenu</h1>
				<h1 class="titreH1"><a class="h1Liens" href="alphabet.php">Alphabet</a></h1>
				<ul class="lesTitres lesTitres1">
					<li>Lecture</li>
					<li>Ecriture</li>
					<li>Ecrire son nom</li>
					<li>Ressemblance</li>
					<li>Exercices</li>
					<li>Controles</li>
				</ul>
				<h1 class="titreH1"><a class="h1Liens" href="#">Syllabe</a></h1>
				<ul class="lesTitres lesTitres2">
					<li>Introduction</li>
					<li>Monosyllabe</li>
					<li>Disyllabe</li>
					<li>Plurisillabe</li>
					<li>Syllabe et Mot</li>
					<li>Ecrire les mots</li>
				</ul>
				<h1 class="titreH1"><a class="h1Liens" href="#">Accent</a></h1>
				<ul class="lesTitres lesTitres2">
					<li>Introduction</li>
					<li>Diphtone</li>
					<li>Voyelles</li>
					<li>Consonnes</li>
					<li>Chiffres</li>
					<li>Conclusion</li>
				</ul>
				<h1 class="titreH1"><a class="h1Liens" href="#">Grammaire</a></h1>
				<ul class="lesTitres lesTitres2">
					<li>Introduction</li>
					<li>Diphtone</li>
					<li>Voyelles</li>
					<li>Consonnes</li>
					<li>Chiffres</li>
					<li>Conclusion</li>
				</ul>
				<h1 class="titreH1"><a class="h1Liens" href="#">Orthographe</a></h1>
				<ul class="lesTitres lesTitres2">
					<li>Introduction</li>
					<li>Diphtone</li>
					<li>Voyelles</li>
					<li>Consonnes</li>
					<li>Chiffres</li>
					<li>Conclusion</li>
				</ul>
			</div>

		<!-- Paragraphe texte -->
				<div id="paraTitre" class="rectangle ombre">
					<h1 class="rectangle">Welcome | Bienvenue | ߌ ߣߌ߫ ߛߣߍ߫</h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					<h3>Welcome to N'ko courses!</h3>
					<p>
						 Do you want to learn N'ko, very well, we are here for you.
						 You can learn N'ko in 3 languages: N'ko, English and French.<br>
						 Choose one of these languages in your prifile after start your courses.<br>
					</p>

					<h3>Bienvenue aux cours N'ko</h3>
					<p>
						 Vous voulez surment apprendre le N'ko, félicitation, nous sommes à votre disposition.
						 Ici vous pouvez apprendre N'ko en 3 langues: N'ko, Anglais et Français.
						 Choisisez une de ces langues dans votre profile pour commenter vos cours.
					</p>

					<h3 dir="rtl">ߊߟߎ߫ ߣߌ߫ ߛߣߍ߫ ߒߞߏ ߥߟߊ߬ߘߊ ߟߎ߬ ߘߐ߫</h3>
					<p dir="rtl">
						 ߊ߲ ߓߘߊ߫ ߟߐ߲ ߊߟߎ߫ ߟߊ߫ ߦߊ߲߭ ߣߊ߬ߟߌ ߡߊ߬ ߞߏ߫ ߒߞߏ ߞߊߙߊ߲ߟߐ߮ ߦߴߊߟߎ߫ ߟߊ߫߸ ߊߟߎ߫ ߞߎߟߎ߲ߖߋ߫ ߏ߬ ߟߊ߫ ߸
						 ߊ߲ ߝߣߊ߫ ߊߟߎ߫ ߟߊߓߌ߬ߟߊ ߘߐ߫. ߊߟߎ߫ ߘߌ߫ ߛߋ߫ ߒߞߏ ߞߊ߬ߙߊ߲߬ ߠߊ߫ ߞߊ߲߫ ߛߓߊ߬ ߘߐ߫ ߦߊ߲߬: ߒߞߏ߸ ߊ߲߬ߜߌߟߋ ߣߌ߫ ߝߊ߬ߙߊ߲߬ߛߌ.
						 ߊߟߎ߫ ߦߋ߫ ߞߊ߲ ߏ߬ ߟߎ߬ ߘߏߘߐ߫ ߞߋߟߋ߲߫ ߕߊ߬ ߞߊ߬ ߥߟߊ߬ߘߊ ߟߎ߬ ߘߊߡߌ߬ߣߊ߬.
					</p>

					<p>
						See below a video for "Introduction to N'ko"
					</p>
					<p class="souhait">Good reading !</p>
					<video controls="controls" class="videoIntro" type="video/mp4">
						<source src="//localhost/karanta/nko/sbeisun/sbeisun.mp4" type="video/mp4" /> 
					</video>
				</section>
			</div>
		</div>
</body>
	<!--
		<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</html>