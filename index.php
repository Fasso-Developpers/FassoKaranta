<?php
	include_once("__soronta__/flo.php");
	is_not_login();
	
	// Information to translate the page for user
	$user_id = $_SESSION['user_id'];
	$kan_array = get_kan($user_id, $con);
	$_POST['lang'] = $kan_array['kan'];
	
	include_once("_main_index_translate_.php");
	define("MAIN_PAGE", "main_index");
	define("CHAPITRE", "");
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title><?php echo trad_lang('page_title'); ?></title>
	<link rel="icon" href="http://www.fasso.org/karanta/_djiya_/fassoIcone.ico" type="image/x-icon">
	<!--[if IE]><link rel="shortcut icon" type="image/x-icon" 
		href="http://www.fasso.org/karanta/_djiya_/fassoIcone.ico" /><![endif]-->
	
	<link rel="stylesheet" href="_css_/styles_header.css" />
	<link rel="stylesheet" href="_css_/styles_subtitle.css" />
	<link rel="stylesheet" href="_css_/styles_contenu_full.css" />
	<link rel="stylesheet" href="_css_/styles_contenu_titre.css" />
	<link rel="stylesheet" href="_css_/styles_contenu_para.css" />
	<link rel="stylesheet" href="_css_/styles_footer.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="_js_/site.js"></script>
	
</head>

<body <?php align_by_lang('right','left'); ?> >

<!-- Entête -->
	
		<?php include_once("__soronta__/logout_button.php"); ?>
		
		<?php include("__soronta__/_lowla_/header.php"); ?>
			
		<?php include("subtitle.php"); ?>
		

<!-- Cette partie contient le contenu de la page -->
		<div <?php align_by_lang('right','left'); ?> class="contenu" class="ombre">

			<!-- Titre -->
			<?php include("__soronta__/_lowla_/contenu_titre_main.php"); ?>
			
			<!-- Paragraphe texte -->
				<div id="paraTitre" class="rectangle ombre">
					<h1 <?php align_by_lang('right','left'); ?>><?php echo trad_lang('main_welcome'); ?></h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					<p style="text-align:center;">
						<?php echo trad_lang('on_fasso'); ?>
					</p>
					
					<p style="margin:0 20px 0 20px;" <?php align_by_lang('right','left'); ?>>
						<?php echo trad_lang('for_example'); ?></p>

					<ul id="listDmalon" <?php align_by_lang('right','left'); ?>>
						<li> <a href="nko/index.php"><?php echo trad_lang('nqo'); ?></a> 
							<p class="def">(<?php echo trad_lang('nqo_desc'); ?>)</p>
						</li>
						<li> <a href="computer/index.php"><?php echo trad_lang('computer'); ?></a> 
							<p class="def">(<?php echo trad_lang('computer_desc'); ?>)</p>
						</li>
						<li> <a href="game/index.php"><?php echo trad_lang('game'); ?></a> 
							<p class="def">(<?php echo trad_lang('game_desc'); ?>)</p>
						</li>
						<li> <a href="culture/index.php"><?php echo trad_lang('culture'); ?></a> 
							<p class="def">(<?php echo trad_lang('culture_desc'); ?></p>
						</li>
					</ul>
					
					<p <?php align_by_lang('right','left'); ?> class="souhait"><?php echo trad_lang('souhait'); ?></p>
				</section>
			</div>
		</div>
	<!--
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</body>
</html>