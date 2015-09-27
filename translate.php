<?php
	include_once("__soronta__/flo.php");
	is_not_login();
	
	include_once("_main_index_translate_.php");
	define("MAIN_PAGE", "main_index");
	define("CHAPITRE", "");
	
	function right_or_left(){
		if (LABEL_LANG == 'nko') {
			return 'right: 59%'; 
		}elseif (LABEL_LANG == 'en'){
			return 'left: 81%'; 
		}elseif (LABEL_LANG == 'fr') {
			return 'left: 81%'; 
		}
	}
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
			width:75%;
			margin:0;
			padding:5px 5px 0 5px;
		}
		
		.status_info{
			font-size:18px;
			margin: 5px 5px 0 5px;
			text-align:right;
			width:75%;
			border-bottom: 1px solid #666;
		}
		.sauver{
			font-size:18px;
			color: #008000;
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
			width: 98%; max-width: 98%; min-width: 98%;
			height: auto; max-height: 100%; min-height: 50px;
			font-family: ebrima;
			
		}
		.zone_translate{
			min-height: 100px;
		}
		
		/* CSS STYLE OF TRANSLATABLE DATA */
		#tranlatable{
			top: 110px;
			<?php echo right_or_left(); ?> ;
			/*left: 81%; */
			//width:auto;
			width:18%;
			height: 82%;
			position: fixed;
			margin: 0;
			padding:3px;
			border: 1px solid #000;
			overflow: scroll;
		}
		#tranlatable #label_translatable{
			font-size: 24px;
			text-align: center;
			color:rgb(255,100,0);
		}
			#tranlatable ul{
				list-style: none;
				margin:0;
				padding:0;
				border: 1px solid #000;
				}
				
				#tranlatable li{
				width:100%;
				margin:0;
				border: 1px solid #000;
				font-size: 20px;
				}
				
				#tranlatable li:nth-child(3n-2) {
	    			background: rgba(255,0,0, .025);
	    		}
	    		
	    		#tranlatable li:nth-child(3n-1) {
	    			background: rgba(255,255,0, .025);
	    		}
	    		#tranlatable li:nth-child(3n+0) {
	    			background: rgba(0,255,0, .025);
	    		}
    		
			#tranlatable p{
				margin: 0;
				padding: 0 0 5px 0;
				font-size: 15px;
				color: #666;
			}
			
		#zone_info{
			margin: 5px;
			border: 1px solid #000;
			width: 75%;
			height: 180px;
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
				
				<p class="status_info">Valider vos données fournies
				 		<input class="sauver" type="submit" name="save" value="Sauver" />
				 		<input class="sauver" type="submit" name="review" value="Review" />
				 </p>
				 				
				<div id="trad_arrea">
				 	
					<p class="zone_label">Texte original</p>
					<textarea class="zone_texte" name="original_text" disabled readonly></textarea>
					
					<p class="zone_label">Texte traduit</p>
					<textarea class="zone_texte" name="translate_text" disabled  readonly ></textarea>
					
					<p class="zone_label">Zone de traduction</p>
					<textarea class="zone_texte zone_translate" name="translatable" autofocus=""></textarea>
					
					<!-- avec 50% ou plus de simulitude 
					<p class="zone_label">Texte similaire</p>
					<textarea class="zone_texte" name="seemed_text" disabled  readonly ></textarea>
					-->
				</div>
				
				<div id="zone_info">
				  
				</div>
				
				<div id="tranlatable">
				  <p id="label_translatable">Texte à traduire</p>
				  <ul>
				  	<li>texte 1
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 2
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 3
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 5
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 6
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 7
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 8
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 9
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 10
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	
				  	<li>texte 11
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 12
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 13
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 14
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 15
				  		<p>voici le texte à traduire </p>
				  	</li>
				  	<li>texte 16
				  		<p>voici le texte à traduire </p>
				  	</li>
				  </ul>
				  
				</div>
				
			</div>
		</div>
	<!--
		<textarea cols="40" rows="8" name="original_text" style="width: 690px; height: 163px;"></textarea>
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</body>
</html>