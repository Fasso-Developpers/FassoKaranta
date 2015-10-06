<?php
//change interface in 'nko', 'en', 'fr';
	$show_lang = 'en';

	if (isset($_GET['lang'])) {
		$show_lang = $_GET['lang'];
	}elseif (isset($_POST['lang'])) {
		$show_lang = $_POST['lang'];
	}

	define('LABEL_LANG', $show_lang);

     $nko = array(
     			'direction' => "rtl",
     			'welcome' => "ߌ ߣߌ߫ ߛߣߍ߫ ߹",
     			'welcome_title' 	=> "ߊߟߎ߫ ߣߌ߫ ߛߣߍ߫ ߒߞߏ ߥߟߊ߬ߘߊ ߟߎ߬ ߘߐ߫", 
     			'welcome_text' 	=> "ߊ߲ ߓߘߴߊ߬ ߟߐ߲߫ ߊߟߎ߫ ߟߊ߫ ߦߊ߲߭ ߣߊ߬ߟߌ ߡߊ߬ ߞߏ߫ ߒߞߏ ߞߊߙߊ߲ߟߐ߮ ߦߴߊߟߎ߫ ߟߊ߫߸ ߊߟߎ߫ ߞߎߟߎ߲ߖߋ߫ ߏ߬ ߟߊ߫ ߸
						 ߊ߲ ߝߣߊ߫ ߊߟߎ߫ ߟߊ߫ ߓߌ߬ߟߊ ߘߐ߫. ߊߟߎ߫ ߘߌ߫ ߛߋ߫ ߒߞߏ ߞߊ߬ߙߊ߲߬ ߠߊ߫ ߞߊ߲߫ ߛߓߊ߬ ߘߐ߫ ߦߊ߲߬: ߒߞߏ߸ ߊ߲߬ߜߌߟߋ ߣߌ߫ ߝߊ߬ߙߊ߲߬ߛߌ.
						 ߊߟߎ߫ ߦߋ߫ ߞߊ߲ ߏ߬ ߟߎ߬ ߘߏ߫ ߘߐ߫ ߞߋߟߋ߲߫ ߕߊ߬ ߊߟߎ߫ ߟߊ߫ ߢߊߞߙߍ ߟߊ߫ ߞߊ߬ ߥߟߊ߬ߘߊ ߟߎ߬ ߘߊߡߌ߬ߣߊ߬.", 
     			'about_courses_title' 		=> "ߒߞߏ ߥߟߊ߬ߘߊ ߟߎ߬", 
     			'about_courses_text' 	=> "ߒߞߏ ߥߟߊ߬ߘߊ߬ ߛߌߦߊߡߊ߲߫ ߠߋ߬ ߘߌߕߐ߫ ߊ߲ ߓߟߏ߫ ߦߊ߲߬ (ߛߓߍߛߎ߲߸ ߜߋ߲߭߸ ߞߊ߲ߡߊߛߙߋ߸ ߞߊ߲ߜߍ ߣߌ߫ ߡߊ߲߬ߕߊ߬ߦߊ). ߘߏ߫ ߓߘߊ߫ ߞߍ߫ ߒߞߏ ߛߓߍߛߎ߲ ߠߋ߬ ߘߐߙߐ߲߫ ߘߐ߫ ߝߟߐ߫. ", 
     			'how_acces_courses' 	=> "ߥߟߊ߬ߘߊ ߏ߬ ߟߎ߬ ߦߋ߫ ߘߐߞߊ߬ߙߊ߲߬ ߠߊ߫ ߢߊ ߡߍ߲ ߏ߬ ߝߟߍ߫ ߣߌ߲߬.", 
     			'click_on_left' 	=> "ߞߵߊ߬ ߛߐ߲߬ߞߌ߲߫ ߓߟߏߡߊߙߊ߲ߝߍ ߛߓߍߟߌ ߏ߬ ߟߎ߫ ߞߊ߲߬. ߏ߬ ߓߊ߯ ߞߍ߫ ߖߌ߬ߦߊ߬ߖߟߎ ߘߌ߫ ߓߐ߫ ߕߍߡߊ߬ ߡߍ߲ ߘߐ߬ߞߊ߬ߙߊ߲߬ ߠߊ߫ ߊ߬ ߖߘߍ߬ ߢߍ߫.", 
     			'follow_courses_in_order' 	=> "ߊ߲ ߧߴߊߟߎ߫ ߟߊߟߌ߫ ߟߊ߫ ߥߟߊ߬ߘߊ ߟߎ߫ ߓߐ ߡߊ߬ ߊ߬ ߞߘߐ߫ ߟߋ߬ ߕߍߕߍߕߍ߫. ߣߴߌ ߞߵߌ ߓߌ߬ߟߊߓߌ߬ߟߊ߬ ߊ߬ߟߎ߬ ߢߊߝߍ߬ ߏ߬ ߕߍߓߍ߲߬߸ ߏ߬ ߕߍ߫ ߘߌߦߊ߫ ߊ߲ ߢߍ߫ ߝߣߊ߫.",
     			'watch_video_here' 	=> "ߊ߬ ߛߐ߲߬ߞߌ߲߫ ߘߎ߰ߟߊ߬ ߦߋߡߍ߲ߕߊ ߣߌ߲߫ ߞߊ߲߬ ߞߵߊ߬ ߕߐ߬ߝߍ߬ߦߊ߬ߣߍ߲ ߘߐߜߍ߫.",
     			'about_controler_' 	=> "ߊߟߎ߫ ߦߋ߫ ߞߊ߲߬ߙߊ߲ߕߊ ߖߍ߬ߘߍߖߍ߬ߘߍ ߟߋ߬ ߞߣߐ߫ ߣߌ߲߬߸ ߏ߬ ߘߐ߫ ߡߐ߱ ߘߏ߫ ߟߋ߬ ߊߟߎ߫ ߟߊߞߙߐ߬ߛߌ߬ ߟߊ߫߸ ߏ߬ ߘߌ߫ ߊ߬ ߟߐ߲߫ ߣߴߊߟߎ߫ ߓߘߊ߫ ߟߊ߬ߟߌ߬ߟߌ ߏ߬ ߟߎ߬ ߡߌ߬ߘߊ߬ ߥߟߊ߫ ߊߟߎ߫ ߓߘߊ߫ ߊ߬ߟߎ߬ ߡߊߛߐ߬ߛߐ߬.", 
     			'problem_ask_admin' 	=> "ߣߌ߫ ߝߙߋߞߋ ߞߊ߬ ߡߍ߲ ߛߐ߬ߘߐ߲߬ ߏ߬ ߦߋ߫ ߞߋߛߓߍ ߟߥߊ߫ ߊ߲ ߡߊ߬.", 
     			);
     $en = array(
     			'direction' => "ltr",
     			'welcome' => "Bienvenue !",
     			'welcome_title' 	=> "Welcome to N'ko courses !", 
     			'welcome_text' 	=> "Do you want to learn N'ko, very well, we are here for you.
						 You can learn N'ko in 3 languages: N'ko, English and French.<br>
						 Choose one of these languages in your profile after start your courses.", 
     			'about_courses_title' 		=> "About N’ko courses", 
     			'about_courses_text' 	=> "We will give here all courses about N’ko (alphabet, syllabe, accent, grammar and orthograph). Now there are only alphabet courses.", 
     			'how_acces_courses' 	=> "See how can you follow the courses.",
     			'click_on_left' 	=> "Click on the link in left, after that the video will upload on your screen center.", 
     			'follow_courses_in_order' 	=> "We recommand you to follow the vidoe in order. If you mixe the courses we will very sorry to that.", 
     			'watch_video_' 	=> "See below video for more info.", 
     			'about_controler_' 	=> "You are in real school, we will now what you do in this classroom, because there a controler, to now if you apply our recommandation or not.", 
     			'problem_ask_admin' 	=> "If you have a problem, send us a message.", 
     			); 
     $fr = array(
     			'direction' => "ltr",
     			'welcome' => "Welcome !",
     			'welcome_title' 	=> "Bienvenue aux cours N'ko !", 
     			'welcome_text' 	=> "Vous voulez surment apprendre le N'ko, félicitation, nous sommes à votre disposition.
						 Ici vous pouvez apprendre N'ko en 3 langues: N'ko, Anglais et Français.
						 Choisisez une de ces langues dans votre profile pour commencer vos cours.", 
     			'about_courses_title' 		=> "Sur les cours N’ko", 
     			'about_courses_text' 	=> "Nous allons mettre à votre disposition ici tous les cours sur le N’ko (alphabet, syllabe, accent, grammaire et orthographe). Pour le moment, ce sont les cours sur l’alphabet seulement qui sont disponible. ", 
     			'how_acces_courses' 	=> "Voici comment regarder ces vidéos.",
     			'click_on_left' 	=> "Cliquez sur les liens qui sont à gauche, une fois cela fait, vous verrez la vidéo se charger au milieu de votre écran.", 
     			'follow_courses_in_order' 	=> "Nous vous conseillons très fortement de suivre ces cours en ordre, ne mélanger jamais les cours. Si vous faite cela, nous serons vraiment désolé pour ça.", 
     			'watch_video_' 	=> "Regarder la vidéo ci-dessous pour plus de détails.	", 
     			'about_controler_' 	=> "Vous êtes vraiment dans une école en ligne, tout ce que vous faites en prenant des cours est surveillé. On saura donc si vous avez respecté ces conseils ou pas.", 
     			'problem_ask_admin' 	=> "Si vous avez un problème veillez nous envoyer des messages.", 
     			);
?>