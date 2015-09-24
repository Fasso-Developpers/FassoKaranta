<?php
	include_once("../__soronta__/flo.php");
	$user_id = $_SESSION['user_id'];
?>

<li <?php if(PAGE == 'profile') echo 'class="active"' ?>>
	<a href="profile.php"><?php echo trad_lang('profile_page');?></a>
<li <?php if(PAGE == 'profile_more') echo 'class="active"' ?>>
	<a href="profile_moreInfo.php"><?php echo trad_lang('profile_more_info');?></a>

<!-- if nko level not given show profile_nko level -->
<?php if(!user_id_in_nqo($user_id, $con)){ ?>
<li <?php if(PAGE == 'profile_level') echo 'class="active"' ?>>
	<a href="profile_level.php"><?php echo trad_lang('profile_level');?></a>
<?php } ?>

<li <?php if(PAGE == 'profile_lang') echo 'class="active"' ?>>
	<a href="profile_language.php"><?php echo trad_lang('profile_languages_page');?></a>
<li <?php if(PAGE == 'profile_parents') echo 'class="active"' ?>>


<!-- for futur -->

<!--	
	<a href="profile_parents.php"><?php echo trad_lang('profile_parents');?></a>
<li <?php if(PAGE == 'profile_mere') echo 'class="active"' ?>>
	<a href="profile_mere.php"><?php echo trad_lang('profile_mothers');?></a>
<li <?php if(PAGE == 'profile_pere') echo 'class="active"' ?>>
	<a href="profile_pere.php"><?php echo trad_lang('profile_fathers');?></a>
-->