<?php 
		
	include("../__soronta__/flo.php");
	include("traduction.php");
	
	// this page contstant
	define('THIS_PAGE', "afterRegist");

	$error = "";
	$succes = "";
	

	if(isset($_POST['submit_level']))
	{	
		$userName = $_COOKIE['userName'];
		$email = $_COOKIE['email'];
		//echo $_COOKIE['userName'];
		//echo $_COOKIE['email'];
		
		$nko_level = htmlentities($_POST['nko_level']);
		
		if (isset($_POST['last_nko_student'])){
			$last_nko_student = $_POST['last_nko_student'];
		}else{
			$last_nko_student = 'no';
		}

		if (isset($_POST['dontRemenber'])){
			$dontRemenber = $_POST['dontRemenber'];
		}else{
			$dontRemenber = 'no';
		}

		$lastCountry = htmlentities($_POST['lastCountry']);
		$lastCity = htmlentities($_POST['lastCity']);
		$lastSchool = htmlentities($_POST['lastSchool']);
		$lastTeacher = htmlentities($_POST['lastTeacher']);
		$lastDate = htmlentities($_POST['lastDate']);
		$lastDuration = htmlentities($_POST['lastDuration']);
		//$level_otherInfo = utf8_decode() ;
		$lastComment = htmlentities($_POST['lastComment']);
		
		// la fonction html_entity_decode() permet de decoder, c'est  l'inverse de htmlentities()
		$nko_level = html_entity_decode($nko_level);
		$last_nko_student = $last_nko_student;
		$dontRemenber = $dontRemenber;
		$lastCountry = html_entity_decode($lastCountry);
		$lastCity = html_entity_decode($lastCity);
		$lastSchool = html_entity_decode($lastSchool);
		$lastTeacher = html_entity_decode($lastTeacher);
		$lastDate = html_entity_decode($lastDate);
		$lastDuration = html_entity_decode($lastDuration);
		$lastComment = html_entity_decode($lastComment);
		
		if(username_in_nqo($userName, $con)){
			$error = trad_lang('you_have_given_your_level').'<br>';
			$error .= trad_lang('you_can_update_in_profile').'<br>';
			//echo $userName;
			header("Refresh: 2; URL= profile.php");// Redirection après 2 secondes 
		}else{
			$insertQuery = "INSERT INTO nqo_level (userName, email, nko_level, last_nko_student, dontRemenber,
				lastCountry, lastCity, lastSchool, lastTeacher, lastDate, lastDuration, lastComment)
			VALUE('$userName', '$email', '$nko_level', '$last_nko_student', '$dontRemenber',
				'$lastCountry', '$lastCity', '$lastSchool', '$lastTeacher', '$lastDate', '$lastDuration', '$lastComment') ";
			
			//echo $insertQuery;
			if(mysqli_query($con, $insertQuery))
			{
				$succes  = trad_lang('succes_give_your_level');
				//setcookie('email', $email, time()-3600);
				//setcookie('userName', $userName, time()-3600);
				header("Refresh: 2; URL=../index.php");// Redirection après 2 secondes
			}
			else{
				echo "error !";
			}
		}
	}
?>

<!doctype html>
<html 
<?php 
	if (LABEL_LANG == 'en'){
		echo 'dir="'.$en['direction'].'"'; 
		echo 'lang="en"';
	}elseif (LABEL_LANG == 'fr') {
		echo 'dir="'.$fr['direction'].'"'; 
		echo 'lang="fr"';
	}elseif (LABEL_LANG == 'nko') {
		echo 'dir="'.$nko['direction'].'"'; 
		echo 'lang="nko"';
	}
?>>
<head>
	<meta charset="utf-8" />
	<title>ߝߊ߬ߛߏ | ߒߞߏ ߞߊ߬ߙߊ߲߬ߕߊ</title>
	<link rel="icon" href="images/fassoIcone.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/afterRegist.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/site.js"></script>

	<script type="text/javascript">
        function verif ()
        {
            var etatRadio = document.getElementById('radiobuton').checked;
            
            if(etatRadio)
            {
                document.getElementById('last').className = 'on';
            }
            else
            {
                document.getElementById('last').className = 'off';
            }
			// Cshow or hide the lastStudy fieldset
			var etat = document.getElementById('check').checked;
            if(etat)
            {
                document.getElementById('LastStudy').className = 'off';
            }
            else
            {
                document.getElementById('LastStudy').className = 'on';
            }
        }

		function InvalidMsg(textbox) {
		    if (textbox.value == '') {
		        textbox.setCustomValidity(
		        	<?php 
						if (LABEL_LANG == 'en'){
							echo '"'.$en['field_is_required'].'"'; 
						}elseif (LABEL_LANG == 'fr') {
							echo '"'.$fr['field_is_required'].'"'; 
						}elseif (LABEL_LANG == 'nko') {
							echo '"'.$nko['field_is_required'].'"'; 
						}
					?>
		        );
		    }
		    else if(textbox.validity.typeMismatch){
		        textbox.setCustomValidity(
		        	<?php 
						if (LABEL_LANG == 'en'){
							echo '"'.$en['info_is_not_valide'].'"'; 
						}elseif (LABEL_LANG == 'fr') {
							echo '"'.$fr['info_is_not_valide'].'"'; 
						}elseif (LABEL_LANG == 'nko') {
							echo '"'.$nko['info_is_not_valide'].'"'; 
						}
					?>
		        );
		    }
		    else {
		        textbox.setCustomValidity('');
		    }
		    return true;
		}
	</script>

	<style type="text/css">
	
		.on {
		    display: block;
		}
	 
		.off {
	    	display: none;
	    	transition-delay: 5s;
		}
	</style>

</head>

<body dir="auto" style="font-family:Ebrima">

<!-- The showing language -->
	<?php include("menu_of_language.php") ?>

	<div id="headText">
		<?php 
			echo '<p>'.trad_lang('successfully_registred').'</p>';
			echo '<p>'.trad_lang('plaese_give_your_level').'</p>';

			if ($error !== ''){
				echo '<p id="error">'.$error.'</p>';
			}elseif ($succes !== ''){
				echo '<p id="succes">'.$succes.'</p>';
			}	
		?>
	
	<form id="form" name="form1" method="post" action='afterRegist.php'>
		<fieldset><legend><?php echo trad_lang('after_registration_fieldset') ?></legend>
			<fieldset><legend><?php echo trad_lang('your_level_in_nko') ?></legend>
				<ul>
					<li>
						<label><?php echo trad_lang('choise_your_level_in_nko') ?> : </label>
						<select id="levels" name="nko_level">
							<OPTGROUP class="descLevel" <?php echo 'label="'.trad_lang('description_of_level_1').'"' ?>>
							<option value="nko_level1"><?php echo trad_lang('nko_level_1') ?></option>
							</OPTGROUP>
							<OPTGROUP class="descLevel" <?php echo 'label="'.trad_lang('description_of_level_2').'"' ?>>
							<option value="nko_level2"><?php echo trad_lang('nko_level_2') ?></option>
							</OPTGROUP>
							<OPTGROUP class="descLevel" <?php echo 'label="'.trad_lang('description_of_level_3').'"'?>>
							<option value="nko_level3"><?php echo trad_lang('nko_level_3') ?></option>
							</OPTGROUP>
							<OPTGROUP class="descLevel" <?php echo 'label="'.trad_lang('description_of_level_4').'"'?>>
							<option value="nko_level4"><?php echo trad_lang('nko_level_4') ?></option>
							</OPTGROUP>
						</select>
					</li>
				</ul>
			</fieldset>


			<fieldset id="ancienEleve">
				<legend><?php echo trad_lang('old_nko_student') ?></legend>
				
				<p class="questionYN" <?php echo align_by_lang('right','left') ?>><?php echo trad_lang('old_nko_student_question') ?></p>
				<p class="reponse" <?php echo align_by_lang('right','left') ?>>
				<label id="yes"><?php echo trad_lang('yes') ?></label>
				<input type="radio" name="last_nko_student" id="radiobuton" class="radiobuton" onChange="verif();" value="yes" />

				<label id="no"><?php echo trad_lang('no') ?></label>
				<input type="radio" name="last_nko_student" id="radiobuton" class="radiobuton" onChange="verif();" value="no" />
				</p>
				
				<div id="last" class="on">
				 <p <?php echo align_by_lang('right','left') ?>>
				 	<label><?php echo trad_lang('dont_remember_this_info') ?></label>
				<input type="checkbox" id="check" name="dontRemenber" onChange="verif();"  /></p>
				
				<fieldset id="LastStudy" class="on">
					<legend><?php echo trad_lang('last_nko_study') ?><pre id="aboutLast"> ...<?php echo trad_lang('informations_about_study') ?>... </pre></legend>
					
					<table>

						<tr <?php echo align_by_lang() ?>><td >
						<label id="lastCountry"><?php echo trad_lang('last_country') ?> :</label>
						</td>
						<td>
						<input type="text" name="lastCountry" id="lastCountry" />
						</td></tr>

						<tr><td <?php echo align_by_lang() ?>>
						<label id="lastCity"><?php echo trad_lang('last_city') ?> :</label>
						</td>
						<td>
						<input type="text" name="lastCity" id="lastCity" />
						</td></tr>

						<tr><td <?php echo align_by_lang() ?>>
						<label id="lastSchool"><?php echo trad_lang('last_school_name') ?>:</label>
						</td>
						<td>
						<input type="text" name="lastSchool" id="lastSchool" />
						</td></tr>

						<tr><td <?php echo align_by_lang() ?>>
						<label id="lastTeacher"><?php echo trad_lang('last_teacher_name') ?> :</label>
						</td>
						<td>
						<input type="text" name="lastTeacher" id="lastTeacher" />
						</td></tr>

						<tr><td <?php echo align_by_lang() ?>>
						<label id="lastDate"><?php echo trad_lang('last_begin_date') ?> :</label>
						</td>
						<td>
						<input type="text" name="lastDate" id="lastDate" />
						</td></tr>

						<tr><td <?php echo align_by_lang() ?>>
						<label id="lastDuration"><?php echo trad_lang('last_duration') ?> :</label>
						</td>
						<td>
						<input type="text" name="lastDuration" id="lastDuration" />
						</td></tr>
					</table>
				</fieldset>
				</div>
			</fieldset>

			<!-- Another information -->
			<fieldset><legend><?php echo trad_lang('another_information') ?></legend>
				<label id="anoterInfo">
					<p class="descTexarea" <?php echo align_by_lang() ?>><?php echo trad_lang('please_write_your_comment') ?></p>
				</label>
				<textarea id="anoterInfo" name="lastComment"></textarea>
			</fieldset>
			<input id="soumettre" name="submit_level" type="submit"  <?php echo align_by_lang('left','right') ?>
				<?php echo 'value="'.trad_lang('submit_level').'"' ?> />
		</fieldset>
	</form>
	</div>			
</body>

</html>