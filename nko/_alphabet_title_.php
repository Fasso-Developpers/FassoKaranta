<?php
   	/* *********** GET USER LEVEL AND APPLY COLORATION ******** */
	$user_id = $_SESSION['user_id'];
	$cours_info = get_cours_info($user_id, $con);
	$level_in = $cours_info['level_in'];
	//print($cours_info);
	$chapitre_in = $cours_info['chapitre_in'];
	$lesson_in = $cours_info['lesson_in'];
	
	/* --- variable provide of database --- */
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
	
	/* ******* The chapiters and lessons of alphabet ****** */
	/* --- the chapiter of alphabet --- */
	$chapiters =  array(
				'1' => 'Lecture',
				'2' => 'Ecriture',
				'3' => 'Ecrire son nom',
				'4' => 'Ressemblance',
				'5' => 'Exercices',
				'6' => 'Controles'
				);
	/* --- the link of lessons --- */
	$lesson_link = array(
		    1 => array(
				'1' => '#',
				'2' => '#',
				'3' => '#',
				'4' => '#',
				'5' => '#',
				'6' => '#'
				),
		    2 => array(
	 			'1' => '#',
				'2' => '#',
				'3' => '#',
				'4' => '#',
				'5' => '#',
				'6' => '#'
				),
			3 => array(
				'1' => '#',
				'2' => '#',
				'3' => '#',
				'4' => '#',
				'5' => '#',
				'6' => '#'
				),
			4 => array(
				'1' => '#',
				'2' => '#',
				'3' => '#',
				'4' => '#',
				'5' => '#',
				'6' => '#'
				),
			5 => array(
				'1' => '#',
				'2' => '#',
				'3' => '#',
				'4' => '#',
				'5' => '#',
				'6' => '#'
				),
			6 => array(
				'1' => '#',
				'2' => '#',
				'3' => '#',
				'4' => '#',
				'5' => '#',
				'6' => '#'
				),
	);
						
	/* --- the name of lessons --- */
	$lesson_name = array(
		    1 => array(
				'1' => 'Introduction',
				'2' => 'Diphtone',
				'3' => 'Voyelles',
				'4' => 'Consonnes',
				'5' => 'Chiffres',
				'6' => 'Conclusion'
				),
		    2 => array(
	 			'1' => 'Introduction',
				'2' => 'Diphtone',
				'3' => 'Voyelles',
				'4' => 'Consonnes',
				'5' => 'Chiffres',
				'6' => 'Conclusion'
				),
			3 => array(
				'1' => 'Introduction',
				'2' => 'Les prémons',
				'3' => 'Les noms',
				'4' => 'Nos noms',
				'5' => 'Mots simple',
				'6' => 'Conclusion'
				),
			4 => array(
				'1' => 'Introduction',
				'2' => 'Entre voyelle',
				'3' => 'Entre consonne',
				'4' => 'Entre chiffre',
				'5' => 'Entre tous',
				'6' => 'Conclusion'
				),
			5 => array(
				'1' => 'Introduction',
				'2' => 'Diphtone',
				'3' => 'Voyelle',
				'4' => 'Consonne',
				'5' => 'Chiffres',
				'6' => 'Conclusion'
				),
			6 => array(
				'1' => 'Introduction',
				'2' => 'Diphtone',
				'3' => 'Voyelle',
				'4' => 'Consonne',
				'5' => 'Chiffres',
				'6' => 'Conclusion'
				),
	);

							
	/* ******** APPLY COLOR BY USER LEVEL ******* */
	// function apply coloration on level
	function chapitre_Title_color($chapitre_in, $rang){
		global $chapitre_in, $chap;
		if($chapitre_in == $chap[$rang]){
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