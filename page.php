<?php 
	include("__soronta__/flo.php");
	$user_id = $_SESSION['user_id'];
	
	$not_ref = 'Aucune reference';
	$nko_pre_info = 'ߌ ߞߍߕߐ߫ ߒߞߏ ߞߟߏߜߍ ߟߎ߬ ߦߋ߫ ߟߊ߫ ߦߊ߲߬ ߠߋ߬';
	$en_pre_info = 'You will see english text here';
	$fr_pre_info = 'Vous verez le texte français ici';
	
	if(isset($_GET['ref']) || isset($_GET['sauver'])){
		$reference = $_GET['ref'];
	/* ******************************************************
	 * 					GET TRANSLATABLE DATA 
	 * **************************************************** */
		$data_i = get_to_translate($reference, $con);
		
		$key 	= $data_i['reference'];
		$nko_i 	= $data_i['nko'];
		$en_i 	= $data_i['en'];
		$fr_i 	= $data_i['fr'];
	}
	
	if(isset($_POST['sauver'])){
		$value = $_POST['translatable'];
		$reference = $_POST['ref'];
		
		$data_i = get_to_translate($reference, $con);
		
		$key 	= $data_i['reference'];
		$nko_i 	= $data_i['nko'];
		$en_i 	= $data_i['en'];
		$fr_i 	= $data_i['fr'];
	}
	
?>

<!doctype html>
<html>
<body>
 
	 <!-- Translate zone -->
	<div id="trad_arrea">
			
	<!-- Insert Title here -->
		<p id="index" name="ref" >
			<textarea dir="auto" class="zone_reference" name="ref" disabled readonly >
			<?php if(isset($_GET['ref']) OR isset($_POST['ref'])){ echo trim($key);
				}else{ echo $not_ref; }; ?>
		</textarea>
		</p>
		<p class="zone_label">Texte original</p>
		<textarea dir="auto" class="zone_texte" name="original_text" disabled readonly >
<?php if(isset($_GET['ref'])){ echo trim($nko_i);}else{ echo $nko_pre_info; }; ?>
		</textarea>
		
		<p class="zone_label">Texte traduit</p>
		<textarea dir="auto" class="zone_texte" name="translate_text" disabled readonly >
<?php if(isset($_GET['ref'])){ echo trim($en_i); }else{ echo $en_pre_info; }; ?>
		</textarea>
		
		<p class="zone_label">Zone de traduction</p>
		<textarea dir="auto" class="zone_texte zone_translate" name="translatable" >
<?php if(isset($_GET['ref']) || isset($_POST['ref'])){ echo trim($fr_i) ; }else{ echo $fr_pre_info; }; ?>
		</textarea>

	</div>					

</body>
</html>

