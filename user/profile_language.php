<?php
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile_lang");
	include("../__soronta__/flo.php");
	include_once ("traduction.php");
	$error = "";
	$succes = "";
	
	// GET language of user
	$user_id = $_SESSION['user_id'];
	$kan_array = get_kan($user_id, $con);
	$f_kan = $kan_array['f_kan'];
	$y_kan = $kan_array['y_kan'];
	if(isset($_POST['submit'])){
		$f_kan = $_POST['e_language'];
		$y_kan = $_POST['d_language'];
		//echo $kan;
		update_kan($user_id, $f_kan, $y_kan, $con);
	}
	
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title><?php echo trad_lang('title_of_profile');?></title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
	 <link rel="stylesheet" href="css/styles_profile.css" /> 
</head>

<body dir="auto">

<!-- Entête -->
	<?php include("../__soronta__/_lowla_/header.php"); ?>
	<?php include("subtitle_profile.php"); ?>
	
<!-- Cette partie contient le contenu de la page -->
		<div <?php echo dir_lang('direction'); ?> class="contenu" class="ombre">

		<!-- Titre -->
			<div id="titre" class="ombre">
				<h1 id="hautTitreH1"><?php echo trad_lang('content_title');?></h1>
				<div class="titre_contenu">
					<div><?php
						if(isset($_SESSION['image'])){
							echo '<img class="image_profile" src="'.$_SESSION["image"].'" />';
						}
					?></div>
					<ul id="lesTitres">
						<?php include('_profile_pages_.php') ?>
					</ul>
				</div>
			</div>

		<!-- Paragraphe texte -->
				<div id="paraTitre" >
					<h1 class="rectangle"><?php echo trad_lang('my_profile');?></h1>
				</div>
				
				<!-- Update more information -->
				<form class="infoPerson" action="#" method="post">
					<fieldset >
						<legend><?php echo trad_lang('my_languages').' ('. trad_lang('choose_your_language').')';?></legend>
						
						<label><?php echo trad_lang('my_explanation').': ';?> </label>
						<select class="lang" name="e_language">

							<option value="nko" <?php if($f_kan=="nko")echo 'selected'?>>ߒߞߏ N'ko</option>

							<option value="en" <?php if($f_kan=="en")echo 'selected'?>>ߊ߲߬ߜ߭ߌߟߋ English</option>

							<option value="fr" <?php if($f_kan=="fr")echo 'selected'?>>ߝߊ߬ߙߊ߲߬ߛߌ Français</option>
						</select>
						<label><?php echo trad_lang('my_display').': ';?> </label>
						<select class="lang" name="d_language">

							<option value="nko" <?php if($y_kan=="nko")echo 'selected'?>>ߒߞߏ N'ko</option>

							<option value="en" <?php if($y_kan=="en")echo 'selected'?>>ߊ߲߬ߜ߭ߌߟߋ English</option>

							<option value="fr" <?php if($y_kan=="fr")echo 'selected'?>>ߝߊ߬ߙߊ߲߬ߛߌ Français</option>
						</select>
						<input id="soumettre" name="submit" type="submit" 
						<?php echo 'value="'. trad_lang('save_edit') .'"';?> />
						<p><?php echo trad_lang('explanation_importance');?></p>
						
						<p><?php echo trad_lang('display_importance');?></p>
						
						<p><?php echo trad_lang('high_level_languages');?></p>
						
						<p><?php echo trad_lang('see_demo_below');?></p>
						
						<div class="video">
							
						</div>
						
					</fieldset>
				</form>

			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>

</body>
</html>