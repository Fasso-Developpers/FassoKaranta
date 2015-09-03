<?php
	
	include("../__soronta__/flo.php");
	$error = "";
	$succes = "";
	define("MAIN_PAGE", "nko_index");
	
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso|N'ko school</title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
</head>

<body dir="auto">

<!-- Entête -->
	<?php include("../__soronta__/_lowla_/header.php"); ?>

<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" class="contenu" class="ombre">

		<!-- Titre -->
			<div id="titre" class="rectangle ombre">
				<h1>Contents Menu</h1>
				<ul id="lesTitres">
					<li><a href="#">Alphabet</a>
					<li><a href="#">Diphtone</a>
					<li><a href="#">Vowels</a>
					<li><a href="#">Consonant</a>
					<li><a href="#">Revison</a>
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
						 Ici vous pouvez apprendre N'ko en 3 langues: N'ko, Anglais et Français.<br>
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
					<video controls="controls" class="videoIntro">
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