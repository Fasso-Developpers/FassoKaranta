<?php
	include_once("__soronta__/flo.php");
	is_not_login();
	
	include_once("_main_index_translate_.php");
	define("MAIN_PAGE", "main_index");
	define("CHAPITRE", "");
	
	$user_id = $_SESSION['user_id'];
	
	
	if(isset($_POST['sauver'])){
		$value = $_POST['translatable'];
		$reference = $_POST['ref'];
		
		$data_i = get_to_translate($reference, $con);
		
		$key 	= $data_i['reference'];
		$nko_i 	= $data_i['nko'];
		$en_i 	= $data_i['en'];
		$fr_i 	= $data_i['fr'];
	}

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
	
<script>
$(document).ready(function(){
	chargePage("page.php");

	$('#trad_link a').click(function(e){
		page=$(this).attr('href');

		e.preventDefault();
		chargePage(page);
	});

	function chargePage(page){
		$.ajax({
			url: page,
			cache: false,
			success : function(html){
				affiche(html);
			},
			error:function(){}
		});
	}
	function affiche(data){
		$('#translate_area').fadeOut(500, function(){
			$('#translate_area').empty().append(data).fadeIn(500);
		});
	}
});
</script>
	
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
		
		.zone_reference{
			width: 98%; max-width: 98%; min-width: 98%;
			height: auto; max-height: 20px; min-height: 20px;
			font-size: 16px;
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
			height: auto; max-height: 100px; min-height: 100px;
			font-family: ebrima;
			
		}
		.zone_translate{
			height:auto; max-height:100px; min-height: 100px;
		}
		
		/* CSS STYLE OF TRANSLATABLE DATA */
		#tranlatable_title{
			position: fixed;
			top: 60px;
			<?php echo right_or_left(); ?> ;
			width: 18.5%;
		}
		
		#tranlatable_title #label_translatable{
				font-size: 24px;
				text-align: center;
				color:rgb(255,100,0);
				border: 1px solid #000;
			}
		#tranlatable{
			position: fixed;
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
			
			#tranlatable ul{
				list-style: none;
				margin:0;
				padding:0;
				//border: 1px solid #000;
				}
				
				#tranlatable li{
				margin:0;
				padding: 0;
				border: 1px solid #000;
				font-size: 18px;
				text-align: center;
				
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
    		
    		#tranlatable h3{
    			margin: 0;
    			padding: 2px 0 10px 2px;
    		}
			#tranlatable p{
				margin: 0;
				padding: 0 0 5px 0;
				font-size: 15px;
				color: #666;
			}
			
			#tranlatable a{
				text-decoration: none;
			}
			
		#zone_info{
			margin: 5px;
			border: 1px solid #000;
			width: 75%;
			height: 100px;
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
					<?php echo $value; 
					print_r($_POST);
					
					?>
				</div>
			<div id="paraTexte" >
				
				<div id="tranlatable_title">
					<p id="label_translatable">Texte à traduire</p>
				</div>
				<div id="tranlatable">
				  
				  <ul>
				  	<?php 
				  		
						/* ****************************
						 * 	GET TRANSLATABLE DATA 
						 * ***************************/
						$nb_row = nbre_row($con); //echo $nb_row;
						
						for ($i=1; $i < $nb_row; $i++) { 
							$data = translatable_data($i, $con);
							
							$key 	= $data['reference'];
							$nko_i 	= $data['nko'];
							$en_i 	= $data['en'];
							$fr_i 	= $data['fr'];
							
							echo 
							  	'<li id="trad_link"> 
							  		<a href="page.php?ref='. $key .'">
								  		<h3>'. $key. '</h3>
								  		<p>'. $nko_i .'</p>
								  		<p>'. $en_i .'</p>
								  		<p>'. $fr_i .'</p>
							  		</a>
							  	</li>'
							  	;
						}
				  	?>
				  </ul>
				  
				</div>
				<form action="translate.php" method="post" accept-charset="utf-8">
					  <!-- Translate section -->
					<p class="status_info">Valider vos données fournies
					 		<input class="sauver" type="submit" name="sauver" value="Sauver" />
					 		<input class="sauver" type="submit" name="review" value="Review" />
					 </p>
					 
					<div id="translate_area">
					  
					</div>
		
				</form>
				<!--			
				<div id="zone_info">
					<?php
					// This part import translate data to database
					foreach ($nko as $key => $value){
						$nko_i = $nko[$key];
						$en_i = $en[$key];
						$fr_i = $fr[$key];
						
						$nko_i =  ($nko_i);
						$en_i = htmlentities($en_i);
						$fr_i = htmlentities($fr_i);
						
						$nko_i =  addslashes($nko_i);
						$en_i = addslashes($en_i);
						$fr_i = addslashes($fr_i);
						
						//echo '<p>'. translate_in_table($user_id, $key, $nko_i, $en_i, $fr_i) .'</p>';
						
						//translate_in_table($user_id, $key, $nko_i, $en_i, $fr_i, $con);
						
						if(!reference_exists($key, $con)){
							translate_in_table($user_id, $key, $nko_i, $en_i, $fr_i, $con);
						}
					}
					?>
				</div>
				-->
			</div>
		</div>
	<!--
		<textarea cols="40" rows="8" name="original_text" style="width: 690px; height: 163px;"></textarea>
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
	-->
</body>
</html>