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
				'5' => 'chapitre_5'
				);
	$lesson = array(
				'1' => 'lesson_1',
				'2' => 'lesson_2',
				'3' => 'lesson_3',
				'4' => 'lesson_4',
				'5' => 'lesson_5',
				'6' => 'lesson_6'
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
				'3' => 'Ecrire son nom',
				'4' => 'Ressemblance',
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

							
	/* ******** APPLY COLOR BY USER LEVEL ******* */
	// function apply coloration on level
	function chapitre_Title_color($level_in, $rang){
		global $level_in, $level;
		if($level_in == $level[$rang]){
			return ' class="titreH1 titreH1_in " ';}
		else{
			return ' class="titreH1 titreH1_off " ';} 
	}
	// function apply coloration on chapitre
	function chapitre_content_color($chapitre_in, $rang){
		global $chapitre_in, $chap;
		if($chapitre_in == $chap[$rang]){
			return ' class=" lesTitres lesTitres_in lesTitres1 " ';
		}else{
			return ' class=" lesTitres lesTitres_off lesTitres2 " ';}
	}
	// function apply coloration on lesson
	function chapitre_lesson_color($chapitre_in, $rang1, $lesson_in, $rang2){
		global $chapitre_in, $chap, $lesson_in, $lesson;
		if($chapitre_in == $chap[$rang1] && $lesson_in == $lesson[$rang2]){
			return ' class=" lesLiens lesson_in " ';
		}else{
			return ' class=" lesLiens lesson_off " ';}
	}
	
?>
?>