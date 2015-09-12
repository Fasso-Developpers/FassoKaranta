<?php
	include("../__soronta__/flo.php");
	is_not_login();
	$error = "";
	$succes = "";
	define("MAIN_PAGE", "nko_index");
	define("CHAPITRE", "alphabet");
	// include the content menu
	include('_alphabet_title_.php');
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso school|N'ko</title>
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
		<div id="titre" >
			<h1 id="hautTitreH1">Menu contenu</h1>
			<!-- Make content title --> 
				<?php 
					// Make The differents chapiters of N'ko
					for ($i = 1; $i <= 5; $i++) {
						echo '<h1 '.chapitre_Title_color($chapitre_in, $i) . '>'.$chapiters[$i].'</h1>';
						echo '<ul '.chapitre_content_color($chapitre_in, $i). '>';
						
						// Make The differents lessons the chapiters
						for ($j = 1; $j <= 6; $j++) {
						echo '<li '.chapitre_lesson_color($chapitre_in, $i, $lesson_in, $j).' >';
						echo '<a href="'.$lesson_link[$i][$j].'">'.$lesson_name[$i][$j].'</a>'; ;
						echo '</li>';
						}
						
						echo '</ul>';
					}
				?>
		</div>
		
		<!-- les titres à fermer -->
		


	<!-- Paragraphe texte -->
		<div id="paraTitre" class="rectangle ombre">
			<h1 class="rectangle">L'Alphabet N'ko</h1>
		</div>
		<!--
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
		</div> -->
	</div>
</body>
	<!--
		<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</html>