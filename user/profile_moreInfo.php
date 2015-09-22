<?php
	define("MAIN_PAGE", "profile");
	define("PAGE", "profile_more");
	include("../__soronta__/flo.php");
	include_once ("traduction.php");
	$error = "";
	$succes = "";
	$user_id = $_SESSION['user_id'];
	
	$profile_info = info_to_profile($user_id, $con);
	$lastname =  $profile_info['lastName'];
	
	// get more info to display
	$more_info_array = get_more_info($user_id, $con);
	$djamun =  $more_info_array['djamun'];
	$sanankun =  $more_info_array['sanankun'];
	$age =  $more_info_array['age'];
	$sexe =  $more_info_array['sexe'];
	$phone =  $more_info_array['phone'];
	$country =  $more_info_array['country'];
	$city =  $more_info_array['city'];
	$md_country =  $more_info_array['md_country'];
	
	// Verify if user_id in registered in more_info table
	$find_user_id_array = success_insersion($user_id, $con);
	$user_id_finded = $find_user_id_array['user_id'];
	
	if( $user_id_finded === $user_id){
		$succes = trad_lang('alredy_regist_more_info');
		$succes .= '<br> '. trad_lang('you_can_update_info'); 	
	}else{
		$error = trad_lang('not_regist_more_info');
	}
	
	if(isset($_POST['submit'])) {
			$si = htmlentities($lastname);
			$djamun = 	htmlentities($_POST['djamun']);
			$sanankun = htmlentities($_POST['sanankun']);
			$age = 		htmlentities($_POST['age']);
			$sexe = 	htmlentities($_POST['sexe']);
			$phone = 		htmlentities($_POST['tel']);
			$country = 	htmlentities($_POST['my_country']);
			$city = 	htmlentities($_POST['my_city']);
			$md_country = htmlentities($_POST['md_country']);
			
			if(empty($_POST['djamun']) && empty($_POST['sanankun'])){
				$error = trad_lang('must_give_djamun_or_sanankun');
			}else{
				//$error =  $djamun .' '. $sanankun.' '.$age.' '. $sexe.' '. $tel.' '. $country.' '. $city.' '. $md_country;
				
				//$error = add_moreinfo($user_id, $si, $djamun, $sanankun, $age, $sexe, $phone, $country, $city, $md_country, $con);
				add_moreinfo($user_id, $si, $djamun, $sanankun, $age, $sexe, $phone, $country, $city, $md_country, $con);
				
				// verify if more information is registered
				if( $user_id_finded === $user_id){
					$succes = trad_lang('succes_give_more_info');	
				}
				
			}
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
				<form class="infoPerson" action="profile_moreInfo.php" method="post">
					<fieldset >
					<legend><?php echo trad_lang('more_info');?></legend>
					<table class="table">
						<!-- error place -->
						<tr><td colspan=3> 
							<?php 
								if($error != "")
								{
									echo'<div id="error">'.$error.'</div>';
								}
								elseif ($succes != "") {
									echo'<div id="succes">'.$succes.'</div>';
								}
							?>
						</td></tr>
						<tr><td><?php echo trad_lang('my_lastname') .': ';?></td><td>
							<label> <?php echo $lastname; ?></label> </td></tr>
							
						<tr><td><?php echo trad_lang('my_djamun') .': ';?></td><td>
							<input class="textBox" type="text" name="djamun" maxlength="30" autofocus 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
							<?php echo 'value="'.$djamun .'"'; ?> /></td></tr>
							
						<tr><td><?php echo trad_lang('my_sanankun') .': ';?></td><td>
							<input class="textBox" type="text" name="sanankun" maxlength="30" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
							<?php echo 'value="'.$sanankun .'"'; ?> /></td></tr>
							
						<tr><td><?php echo trad_lang('my_age') .': ';?></td><td>
							<input class="textBox" type="text" name="age" maxlength="20" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" 
							<?php echo 'value="'.$age .'"'; ?> /></td></tr>
							
						<tr><td><?php echo trad_lang('my_sexe') .': ';?></td><td>
							<input class="textBox" type="text" name="sexe" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
							<?php echo 'value="'.$sexe .'"'; ?> /></td></tr>
							
						<tr><td><?php echo trad_lang('my_phone') .': ';?></td><td>
							<input class="textBox" type="text" name="tel" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
							<?php echo 'value="'.$phone .'"'; ?> /></td></tr>
							
						<tr><td><?php echo trad_lang('my_country') .': ';?></td><td>
							<input class="textBox" type="text" name="my_country" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" 
							<?php echo 'value="'.$country .'"'; ?> /></td></tr>
							
						<tr><td><?php echo trad_lang('my_city') .': ';?></td><td>
							<input class="textBox" type="text" name="my_city" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required 
							<?php echo 'value="'.$city .'"'; ?> /></td></tr>
							
						<tr><td><?php echo trad_lang('my_manden_country') .': ';?></td><td>
							<input class="textBox" type="text" name="md_country" maxlength="60" 
							oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" 
							<?php echo 'value="'.$md_country .'"'; ?> /></td></tr>
						
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