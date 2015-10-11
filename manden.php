<?php
	include_once("__soronta__/flo.php");
	is_not_login();
	
	include_once("_main_index_translate_.php");
	define("MAIN_PAGE", "main_index");
	define("CHAPITRE", "manden");
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
	
	<!-- STYLE OF TABLE ABOUT MANDEN_SCHOOL -->
	<style rel="stylesheet">
		.table_info{
			margin: 15px auto;
			border:1px solid #999;
			line-height: 130%;
		}
		.table_info th{
			border:1px solid #999;
			margin: 5px;
			padding: 5px;
			font-size: 20px;
			text-align: center;
		}
		.table_info td{
			border:1px solid #999;
		}
		.desc_ks{
			margin:5px; 
			padding:10px; 
			font-size:24px
		}
		.nb_ks{
			margin:5px; 
			padding:10px; 
			font-size:18px;
		}
		
		/*	give yours */
		.give_yours{
			margin-top: 10px; 
			padding: 5px;
			font-size: 14px;
		}
		.legend{
			font-size: 16px;
		}
		/* for nzerekore nko school*/
		
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073786111 1 0 415 0;}
@font-face
	{font-family:Ebrima;
	panose-1:2 0 0 0 0 0 0 0 0 0;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-1610612641 33554497 2048 0 147 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:130%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-bidi-font-family:"Times New Roman";}
p.msochpdefault, li.msochpdefault, div.msochpdefault
	{mso-style-name:msochpdefault;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-bidi-font-family:"Times New Roman";}
p.msopapdefault, li.msopapdefault, div.msopapdefault
	{mso-style-name:msopapdefault;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:130%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-hansi-font-family:Calibri;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:130%;}
@page WordSection1
	{size:792.0pt 1224.0pt;
	margin:70.85pt 70.85pt 70.85pt 70.85pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Tableau Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin-top:0cm;
	mso-para-margin-right:0cm;
	mso-para-margin-bottom:8.0pt;
	mso-para-margin-left:0cm;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;}-->
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
					<h1 <?php align_by_lang('right','left'); ?>><?php echo trad_lang('manden_nko_school'); ?></h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					
					<h3 style="text-align:center;">
						<?php echo trad_lang('nko_school_in_manden'); ?>
					</h3>
					<p ">
						<?php echo trad_lang('web_nko_school') 
						.' '. trad_lang('nko_shool_in_place'); ?>
					</p>
					<p>
						<?php echo trad_lang('question_to_info')
						.' '. trad_lang('response_to_info') 
						.' '.trad_lang('will_upload_info_here') ; ?>
					</p>
					<p id="give_yours"><?php echo trad_lang('give_us_yours'); ?></p>
					
					<!-- Info about Karanta in table -->
					<table class="table_info" cellpadding="0" cellspacing="0">
						<tr></tr>
							<th><?php echo trad_lang('locality'); ?></th>
							<th><?php echo trad_lang('recoltor'); ?></th>
							<th><?php echo trad_lang('givor'); ?></th>
							<th><?php echo trad_lang('loader'); ?></th>
						</tr>
						<tr>
							<td class="desc_ks"><?php echo trad_lang('guinea_nze')?></td>
							<td class="nb_ks"><?php echo trad_lang('gui_nze_recoltor')?></td>
							<td class="nb_ks"><?php echo trad_lang('gui_nze_givor')?></td>
							<td class="nb_ks"><?php echo trad_lang('gui_nze_loader')?></td>
						</tr>
					</table>
					
					<!-- Nzerekore nko_school -->
					<?php include 'manden__gui_nze__.php'; ?>
						<p class="give_yours">ߟߊ߬ߘߛߏ߬ߟߌ ߟߎ߬ ߞߘߐ:</span>
						<span class="legend">ߝ. (ߝߙߍߕߍ)</span>
						<span class="legend">ߞ. (ߞߊ߬ߙߊ߲߬ߕߊ)</span>
				</section>
			</div>
		</div>
	<!--
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</body>
</html>