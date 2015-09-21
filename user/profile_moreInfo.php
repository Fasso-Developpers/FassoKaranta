<?php
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile_more");
	include("../__soronta__/flo.php");
	include_once ("traduction.php");
	$error = "";
	$succes = "";

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
					<legend><?php echo trad_lang('more_information');?></legend>
					<table class="table">
						<tr><td><?php echo trad_lang('my_djamun') .': ';?></td><td>
							<input class="textBox" type="text" name="djamun" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td><?php echo trad_lang('my_sanankun') .': ';?></td><td>
							<input class="textBox" type="text" name="sanankun" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td><?php echo trad_lang('my_age') .': ';?></td><td>
							<input class="textBox" type="text" name="age" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td><?php echo trad_lang('my_sexe') .': ';?></td><td>
							<input class="textBox" type="text" name="sexe" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td><?php echo trad_lang('my_phone') .': ';?></td><td>
							<input class="textBox" type="text" name="tel" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td><?php echo trad_lang('my_country') .': ';?></td><td>
							<input class="textBox" type="text" name="my_country" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td><?php echo trad_lang('my_city') .': ';?></td><td>
							<input class="textBox" type="text" name="my_city" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>
						<tr><td><?php echo trad_lang('my_manden_country') .': ';?></td><td>
							<input class="textBox" type="text" name="manden_country" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required /></td></tr>

						<tr><td></td><td>
							<input id="soumettre" name="submit" type="submit" 
							<?php echo 'value="'. trad_lang('save_edit') .'"';?> /></td></tr>
					</table>
					
					</fieldset>
				</form>

			<!--
			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
			-->
		</div>

</body>
</html>