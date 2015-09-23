<?php
   	/* *********** GET USER LEVEL AND APPLY COLORATION ******** */
	$user_id = $_SESSION['user_id'];
	$cours_info = get_cours_info($user_id, $con);
	$level_in = $cours_info['level_in'];
	//print($cours_info);
	$chapitre_in = $cours_info['chapitre_in'];
	$lesson_in = $cours_info['lesson_in'];
	
	$level = array(
				'1' => 'level_1',
				'2' => 'level_2',
				'3' => 'level_3',
				'4' => 'level_4',
				'5' => 'level_5'
				);
	$chap = array(
				'1' => 'chapitre_1',
				'2' => 'chapitre_2',
				'3' => 'chapitre_3',
				'4' => 'chapitre_4',
				'5' => 'chapitre_5',
				'6' => 'chapitre_6'
				);

	
	/* ---- The lessons of chapiter ---- */
	$chapiters = array(
				'1' => 'Alphabet',
				'2' => 'Syllabe',
				'3' => 'Accents',
				'4' => 'Grammaire',
				'5' => 'Orthographe'
				);
	$chap_link = array(
				'1' => 'alphabet.php',
				'2' => '#',
				'3' => '#',
				'4' => '#',
				'5' => '#'
				);
						
	/* ---- The lessons of chapiter ---- */
	$chp_lessons = array(
		    1 => array(
				'1' => 'Lecture',
				'2' => 'Ecriture',
				'3' => 'Ressemblance',
				'4' => 'Ecrire son nom',
				'5' => 'Exercices',
				'6' => 'Controles'
				),
		    2 => array(
	 			'1' => 'Introduction',
				'2' => 'Monosyllabe',
				'3' => 'Disyllabe',
				'4' => 'Plurisyllabe',
				'5' => 'Syllabe et Mot',
				'6' => 'Ecrire les mots'
				),
			3 => array(
				'1' => 'Lecture',
				'2' => 'Ecriture',
				'3' => 'Ecrire son nom',
				'4' => 'Ressemblance',
				'5' => 'Exercices',
				'6' => 'Controles'
				),
			4 => array(
				'1' => 'Lecture',
				'2' => 'Ecriture',
				'3' => 'Ecrire son nom',
				'4' => 'Ressemblance',
				'5' => 'Exercices',
				'6' => 'Controles'
				),
			5 => array(
				'1' => 'Lecture',
				'2' => 'Ecriture',
				'3' => 'Ecrire son nom',
				'4' => 'Ressemblance',
				'5' => 'Exercices',
				'6' => 'Controles'
				),
	);

$level_in_array = explode('_', $level_in);
$level_id = $level_in_array[1];
	
$chap_id_array = explode('_', $chapitre_in);
$chap_id = $chap_id_array[1];

					
	/* ******** APPLY COLOR BY USER LEVEL ******* */
	// function apply coloration on level title
	function level_Title_color($level_in, $rang){
		global $level_in, $level, $level_id;
		if($level_in == $level[$rang]){
			return ' class="titreH1 titreH1_in " ';
		}elseif($rang < $level_id){
			return ' class="titreH1 titreH1_pass " ';
		}elseif($rang > $level_id){
			return ' class="titreH1 titreH1_off " ';} 
	}
	// function apply coloration on level
	function level_content_color($level_in, $rang){
		global $level_in, $level, $level_id;
		if($level_in == $level[$rang]){
			return ' class=" lesTitres lesTitres_in lesTitres1 " ';
		}elseif($rang < $level_id){
			return ' class=" lesTitres lesTitres_pass lesTitres2 " ';
		}elseif($rang > $level_id){
			return ' class=" lesTitres lesTitres_off lesTitres2 " ';}
	}
	// function apply coloration on chapiter
	function chapitre_color($level_in, $chapitre_in, $rang1, $rang2){
		global $level_in, $chapitre_in, $level, $level_id, $chap, $chap_id;
		if($level_in == $level[$rang1] && $chapitre_in == $chap[$rang2] ){
			return ' class=" lesLiens lesson_in " ';
		
		}elseif($rang1 < $level_id){
			return ' class=" lesLiens lesson_pass " lesTitres2';
		
		}elseif($rang1 == $level_id){
			if( $rang2 < $chap_id){
				return ' class=" lesLiens lesson_pass " lesTitres2';
			}elseif( $rang2 > $chap_id){
				return ' class=" lesLiens lesson_off " lesTitres2';
			}
		
		}elseif($rang1 > $level_id){
			return ' class=" lesLiens lesson_off " lesTitres2';
			}
	}
	
?>