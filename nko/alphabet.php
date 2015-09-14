<?php
	include("../__soronta__/flo.php");
	is_not_login();
	$error = "";
	$succes = "";
	define("MAIN_PAGE", "nko_index");
	define("CHAPITRE", "alphabet");
	// include the content menu
	include('_alphabet_title_.php');
	$link_to_movie = "";
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso school|N'ko</title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
	<link rel="stylesheet" href="_css_/titre_lesson.css" />
	<script src="_js_/chargePage.js"></script>
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
							if(is_array($lesson_link[$i][$j])){
								echo '<h1 '.sub_chap_Title_color($lesson_in, $j) . '>'.$lesson_name[$i][$j].'</h1>';
								echo '<ul '.sub_chap_lesson_color($chapitre_in, $i, $lesson_in, $j). '>';
								foreach ($lesson_link[$i][$j] as $key => $value) {
									echo '<li '.chapitre_lesson_color($chapitre_in, $i, $lesson_in, $j).' >';
									//echo '<a href="'.$value.'">'.$lesson_name[$i][$j].' '. $key .'</a>';
									echo '<a href="_kogbei_/page.php?link='.$value.'&titre='.$lesson_name[$i][$j].' '. $key.'">'.
									$lesson_name[$i][$j].' '. $key .'</a>';
									echo '</li>';
								}
								echo '</ul>';
							}else{
								echo '<li '.chapitre_lesson_color($chapitre_in, $i, $lesson_in, $j).' >';
								echo '<a href="_kogbei_/page.php?link='.$lesson_link[$i][$j].'&titre='.$lesson_name[$i][$j].'">'.
								$lesson_name[$i][$j].'</a>'; ;
								//echo '<a href="'.$lesson_link[$i][$j].'">'.$lesson_name[$i][$j].'</a>'; ;
								echo '</li>';
							}
						
						}
						
						echo '</ul>';
					}
				?>
		</div>
		
		<!-- les titres à fermer -->
		


	<!-- Paragraphe texte -->
		<div id="paraTitre" class="rectangle ombre">
			<h1 class="rectangle">Partie 1: Alphabet N'ko</h1>
		</div>
		
		<div id="paraTexte" >
			<section id="intro">
				<!-- Insert Title here -->
				<h3><?php  ?></h3>
				
				<div id="videoPlace">
					<!--
					<iframe width="640" height="390"
					<?php echo 'src="http://www.youtube.com/embed/'.$link_to_movie.'?rel=0&autoplay=1&origin=http://fasso.org"' ?>
				  	frameborder="0" allowfullscreen />
				 	-->
				</div>
				
			</section>
		</div> 
	</div>
</body>
	<!--
		<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</html>