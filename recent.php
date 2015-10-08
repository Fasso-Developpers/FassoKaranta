<?php
	include_once("__soronta__/flo.php");
	is_not_login();
	
	$nb = nb_registered($con);
	include_once("_main_index_translate_.php");
	define("MAIN_PAGE", "main_index");
	define("CHAPITRE", "recent");
	
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title><?php echo trad_lang('page_title_r'); ?></title>
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
	
	<!-- STYLE OF TABLE ABOUT RECENT -->
	<style rel="stylesheet">
		.table_info{
			margin: 20px auto;
			border:1px solid #999;
		}
		.table_info th{
			border:1px solid #999;
			margin: 5px;
			padding: 16px;
			font-size: 30px;
			text-align: center;
		}
		.table_info td{
			border:1px solid #999;
		}
		.desc_ks{
			margin:5px; 
			padding:10px; 
			font-size:20px
		}
		.nb_ks{
			margin:5px; 
			padding:10px; 
			font-size:30px
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
					<h1 <?php align_by_lang('right','left'); ?>><?php echo trad_lang('main_welcome_r'); ?>
						<span style="font-size: 14px; color: rgb(100,100,100)"><?php echo trad_lang('on_fasso_r'); ?></span>
					</h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					
					<p style="text-align:center; margin:0; padding:5px;"><?php echo trad_lang('actuality_on_fasso'); ?></p>
					
					<table class="table_info">
						<th colspan=2><?php echo trad_lang('on_registration'); ?></th>
						<tr><td class="desc_ks"><?php echo trad_lang('nb_student_registered')?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
						
						<tr><td class="desc_ks"><?php echo trad_lang('nb_today_registered'); ?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
						<tr><td class="desc_ks"><?php echo trad_lang('last_registered'); ?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
						<tr><td class="desc_ks"><?php echo trad_lang('nb_student_registered'); ?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
					</table>
					
					<table class="table_info">
						<th colspan=2><?php echo trad_lang('on_courses'); ?></th>
						<tr><td class="desc_ks"><?php echo trad_lang('nb_follow_courses')?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
						
						<tr><td class="desc_ks">
							<?php echo trad_lang('nb_courses_today'); ?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
						<tr><td class="desc_ks"><?php echo trad_lang('most_populaire'); ?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
						<tr><td class="desc_ks"><?php echo trad_lang('nb_student_registered'); ?></td>
							<td class="nb_ks"><?php echo $nb; ?></td>
						</tr>
					</table>
					
				</section>
			</div>
		</div>
	<!--
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</body>
</html>