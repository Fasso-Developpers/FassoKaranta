<?php
	include_once("__soronta__/flo.php");
	is_not_login();
	
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
	
	<style>
	#paraTexte{position: absolute; top: 40px; 
		width: 99%; max-width:100%; //min-width: 470px; 
	}
		#trad_arrea{
			margin:5px;
			padding:5px 5px 0 5px;
		}
		.zone_label{
			cursor: default;
			margin:5px 5px 0 5px;
			padding-bottom: 0;
			font-size: 20px;
			color: #aaa;
		}
		.zone_texte{
			margin:5px 5px 0 5px;
			padding-bottom: 0;
			font-size: 20px;
			width: 74%;
			height: auto;
			font-family: ebrima;
		}
		
		#tranlatable{
			top: 110px;
			left: 81%;
			//width:auto;
			width:18%;
			height: 100%;
			position: fixed;
			margin: 0;
			border: 1px solid #000;
			
		}
	</style>
	
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
					<h1 <?php align_by_lang('right','left'); ?>>Translation page</h1>
				</div>
			<div id="paraTexte" >
				<!--
				<section id="intro">
				</section>
				-->				
				<div id="trad_arrea">
				 	<p>Valider vos données fournies
				 		<input id="sauver" type="submit" name="save" value="Sauver" />
				 		<input id="sauver" type="submit" name="review" value="Review" />
				 	</p>
					
					<p class="zone_label">Texte original</p>
					<textarea class="zone_texte" name="original_text" readonly></textarea>
					
					<p class="zone_label">Zone de traduction</p>
					<textarea class="zone_texte" name="seemed_text" autofocus=""></textarea>
					
					<p class="zone_label">Texte similaire</p>
					<textarea class="zone_texte" name="translate_text" readonly ></textarea>
					
				</div>
				
				<div id="tranlatable">
				  
				</div>
				
			</div>
		</div>
	<!--
		<textarea cols="40" rows="8" name="original_text" style="width: 690px; height: 163px;"></textarea>
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</body>
</html>