<?php
	
	include_once("../__soronta__/flo.php");
	is_not_login();
	$error = "";
	$succes = "";
	include_once("_index_translate_.php");
	define("MAIN_PAGE", "nko_index");
	define("CHAPITRE", "");
	// include the content menu
	include('_index_title_.php');

?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso school- N'ko </title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
	<link rel="stylesheet" href="_css_/titre_lesson.css" />
</head>

<body <?php echo dir_lang('direction'); ?> >

<!-- Entête -->
	<?php include_once("../__soronta__/logout_button.php"); ?>
	
	<?php include("../__soronta__/_lowla_/header.php"); ?>
	
	<?php include("subtitle_nko.php"); ?>
<!-- Cette partie contient le contenu de la page -->
		<div <?php echo align_by_lang('right','left'); ?>  class="contenu" class="ombre">

		<!-- Titre -->
			<div id="titre" class="rectangle ombre">
				<h1 id="hautTitreH1">Menu contenu</h1>
				<!-- Make content title --> 
				<?php 
					// Make The differents level of N'ko
					for ($i = 1; $i <= 5; $i++) {
						echo '<h1 '.level_Title_color($level_in, $i) . '>';
						echo '<a class="h1Liens" href="'.$chap_link[$i].'">'.$chapiters[$i].'</a>';
						echo '</h1>';
						echo '<ul '.level_content_color($level_in, $i). '>';
						
						// Make The differents chapiters in level
						for ($j = 1; $j <= 6; $j++) {
						echo '<li '.chapitre_color($level_in, $chapitre_in, $i, $j).' >'.$chp_lessons[$i][$j].'</li>';
						}
						
						echo '</ul>';
					}
				?>
				
			</div>

		<!-- Paragraphe texte -->
				<div id="paraTitre" class="rectangle ombre">
					<h1 class="rectangle" <?php echo align_by_lang('right','left'); ?>>
						<?php echo trad_lang('welcome'); ?>
					</h1>
					<!--<?php
					echo '<br>' .$level_in .$level['1'] ;
					?>-->
				</div>
			<div id="paraTexte" class="rectangle ombre" style="margin:10px">
				<section id="intro">
					<h3 <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('welcome_title'); ?></h3>
					<p <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('welcome_text'); ?></p>
					<h3 <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('about_courses_title'); ?></h3>
					<p <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('about_courses_text'); ?></p>
					<p <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('how_acces_courses'); ?></p>
					<p <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('follow_courses_in_order'); ?></p>
					<p <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('watch_video_here'); ?></p>
					<p <?php echo align_by_lang('right','left'); ?>><?php echo trad_lang('about_controler_'); ?></p>
					<p <?php echo align_by_lang('center','center'); ?>><?php echo trad_lang('problem_ask_admin'); ?></p>
				</section>
				
			</div>
		</div>
</body>
	<!--
		<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</html>