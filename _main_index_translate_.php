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
     			'page_title' 	=> "ߝߊ߬ߛߏ ߞߊ߬ߙߊ߲߬ߕߊ", 
     			'main_welcome' 	=> "ߊߟߎ߫ ߣߌ߫ ߛߣߍ߫ ߝߊ߬ߛߏ ߞߊ߬ߙߊ߲߬ߕߊ ߟߊ߫ ߹", 
     			'on_fasso' 		=> "ߊߟߎ߫ ߦߋ߫ ߝߊ߬ߛߏ ߞߊ߬ߙߊ߲߬ߕߊ ߟߋ߬ ߟߊ߫ ߣߌ߲߬߸ ߊߟߎ߫ ߣߌ߫ ߛߣߍ߫. ߒߞߏ ߛߙߊ߫ ߘߐ߫߸ ߊߟߎ߫ ߘߌ߫ ߞߏ߫ ߛߌߦߊߡߊ߲߫ ߟߐ߲߫ ߦߊ߲߬", 
     			'for_example' 	=> "ߟߊߒߡߊ߫ ߘߐ߫", 
     			'nqo' 			=> "ߒߞߏ", 
     			'nqo_desc'		=> "ߌ ߓߘߊ߫ ߒߞߏ ߞߏߡߍ߲߫ ߓߊ߬؟ ߣߴߌ ߡߊ߫ ߊ߬ ߞߏߡߍ߲߫ ߝߟߐ߫߸ ߏ߬ ߕߍ߫ ߖߎ߯ߡߊ߲߫ ߘߌ߫. ߒ߬ߓߊ߬ ߌ ߣߌ߫ ߛߣߍ߫ ߒߞߏ ߞߊߙߊ߲߫ ߦߙߐ߫ ߓߟߏߡߊߞߊ߬ߣߍ߲ ߘߐ߫.
								  ߦߙߐ ߣߌ߲߬ ߘߌ߫ ߒߞߏ ߛߓߍߟߌ ߕߝߐ߬ߦߊ߬ ߊߟߎ߫ ߢߍ߫. ߊ߲ ߞߎߡߊߕߐ߫ ߞߊߓߋ ߟߎ߬ ߓߍ߯ ߟߋ߬ ߞߊ߲߬ ߞߵߊ߬ ߘߊߡߌ߬ߣߊ߬ ߛߓߍߛߎ߲ ߡߊ߬ ߞߊ߬ ߥߊ߫ ߊ߬ ߟߊߞߍ߫ ߡߊ߲߬ߕߊ߬ߦߊ ߡߊ߬", 
     			'computer'		=> "ߕߟߋ߬ߓߊ߬ߦߊ", 
     			'computer_desc' => "ߕߎ߬ߡߊ߬ߘߐ߫ ߕߟߋ߬ߓߊ ߥߟߊ߫ ߜߋߟߋ߲ߜߋߟߋ߲ ߘߏ߫ ߦߋ߫ ߌ ߓߟߏ߫ ߣߌ߲ߛߊ߲߬ ߞߵߊ߬ ߕߘߍ߬ ߌ ߡߊ߫ ߊ߬ ߣߊ߬ߝߊ ߓߍ߯ ߟߐ߲߫.
								 ߒ߬ߓߊ߬ ߦߙߐ ߣߌ߲߬ ߘߴߊߟߎ߫ ߘߍ߬ߡߍ߲߬ ߊߟߎ߫ ߟߊ߫ ߞߍߟߊ߲ ߏ߬ ߟߎ߬ ߕߣߐ߬ߓߐ߬ ߟߊ߫ ߊ߬ ߢߊ߫ ߓߘߍ ߡߊ߬. ߓߌ߬ ߕߟߋ ߣߌ߲߬ ߟߐ߲ߞߏ ߢߊ߰ߒ߬ߞߐ߬ߓߊߟߌ ߡߍ߲ ߕߐ߯ ߞߏ߫ ߕߟߋ߬ߓߊ߬ߦߊ߸ ߊ߲ ߘߌ߫ ߏ߬ ߥߟߊ߬ߘߊ߬ ߢߣߊߡߊ ߟߎ߬ ߘߴߊߟߎ߫ ߡߊ߬.
								 ߖߐ߲߰ߛߊ߫ ߊߟߎ߫ ߘߌ߫ ߏ߬ ߢߊߦߋ߫ ߖߏߣߊ߫ ߡߊ߲߬ߘߋ߫ ߝߘߏ߬ߓߊ߬ ߛߓߍߛߎ߲ ߘߐ߫. ߣߴߊߟߎ߫ ߞߊ߬ ߊ߲ ߠߊ߫ ߥߟߊ߬ߘߊ ߡߍ߲߬ ߠߎ߫ ߕߊ߬ ߊߟߎ߫ ߕߍ߫ ߞߍ߫ ߟߏߟߊ߲߫ ߘߌ߫ ߕߟߋ߬ߓߊ߬ ߞߏ ߣߌ߫ ߜߋߟߋ߲ߜߋߟߋ߲߫ ߞߏ ߛߌ߫ ߘߐ߫ ߡߎ߬ߕߎ߲߬", 
     			'game' 			=> "ߕߏߟߏ߲", 
     			'game_desc' 	=> "ߕߋ߲߬ߋ߲ߕߋ߲߬߸ ߕߏߟߏ߲ ߠߎ߬ ߞߊ߫ ߛߌߦߊ߫ ߓߊ ߟߋ߬. ߡߐ߰ ߛߌߦߊߡߊ߲߫ ߖߍ߬ߘߍ ߦߋ߫ ߕߎ߬ߡߊ߬ ߛߌߦߊߡߊ߲߫ ߞߍ߫ ߟߊ߫ ߊ߬ߟߎ߬ ߕߏߟߏ߲߫ ߠߊ߫.
								 ߒ߬ߓߊ߬ ߊ߲ߠߎ߬ ߦߋ߫ ߡߊ߲߬ߘߋ߲߬ ߖߏ߯ߘߏ߲ ߕߏߟߏ߲ ߏ߬ ߟߎ߫ ߟߋ߫ ߓߌ߬ߟߊ߬ ߞߏ߫ ߘߏ߫ ߝߊ߬ߛߏ߬ߘߋ߲ ߠߎ߫ ߛߊ߬ߥߏ ߘߐ߫ ߦߙߐ ߣߌ߲߬ ߘߐ߫", 
     			'culture' 		=> "ߟߐ߲ߠߌߦߊ", 
     			'culture_desc'	=> "ߡߊ߲߬ߘߋ߲߬ ߡߊߟߐ߲ߣߍ߲߫ ߊ߬ ߟߐ߲ߠߌߦߊ߫ ߥߙߍߓߊ ߟߋ߫ ߡߊ߬.
								 ߊ߬ ߟߊ߫ ߛߌߦߊߦߊ ߡߊ߬߸ ߊ߲ ߡߊ߫ ߡߍ߲ ߠߎ߬ ߟߐ߲߫ ߡߎߣߎ߲߬ ߊߟߎ߫ ߘߌ߫ ߘߌ߬ߢߍ߬ ߞߵߏ߬ ߟߎ߬ ߟߊߛߋ߫ ߊ߲ ߡߊ߬. ߏ߬ ߞߍߕߐ߫ ߒߞߏ ߟߋ߬ ߘߐ߫. ߏ߬ ߘߴߊߟߎ߫ ߘߍ߬ߡߍ߲߬ ߛߓߍߟߌ ߣߌ߫ ߘߐ߬ߞߊ߬ߙߊ߲߬ߠߌ߲ ߠߊߢߊ߬ ߟߊ߫ ߒߞߏ ߘߐ߫
								 ߊ߬ ߘߌ߫ ߛߊߓߎ߫ ߢߌߡߊ߫ ߘߌ߫ ߞߵߊߟߎ߫ ߟߊ߫ ߞߊߓߋ ߟߎ߬ ߡߊߝߙߊ߬ ߞߊ߬ ߛߓߍߟߌ ߣߌ߫ ߘߐ߬ߞߊ߬ߙߊ߲߬ߠߌ ߠߎ߬ ߓߍ߯ ߟߊߖߐߟߐ߲߫ ߏ߬ ߘߐ߫ ߛߍ߬ߣߍ߲߬ ߖߟߐߟߐߟߐ߫.
								ߊ߲ ߞߊ߬ ߝߋ߲߫ ߺ ߋ ߺ ߝߋ߲߫ ߟߐ߲߫ ߟߐ߲ߠߌߦߊ ߏ߬ ߟߎ߬ ߘߐ߫߸ ߊ߲ ߘߌ߫ ߏ߬ ߓߍ߯ ߟߊߛߋ߫ ߊߟߎ߫ ߡߊ߬ ߣߐ߰ߦߊ ߘߝߊߣߍ߲ ߘߐ߫", 
				'souhait' 		=> "ߊߟߎ߫ ߣߌ߫ ߘߐ߬ߞߊ߬ߙߊ߲߬ߠߌ ߢߌߡߊ߫ ߹",
				);
	$en = array(
     			'page_title' 	=> "Fasso school", 
     			'main_welcome' 	=> "Welcome on Fasso school !", 
     			'you_are_on' 	=> "You are in Fasso school, here you can learn everythings in N'ko", 
     			'for_example' 	=> "For example", 
     			'nqo' 			=> "N'ko", 
     			'nqo_desc'		=> "This part explain n'ko, if you are never learn n'ko, it is not bad because 
										I will help you to anderstand N'ko in small delay.", 
     			'computer'		=> "Computer science", 
     			'computer_desc' => "You have a computer but you can't use it very well,
										you are welcome to learn the fundamentals about computer.", 
     			'game' 			=> "Game", 
     			'game_desc' 	=> "How many game do you know in Manden, if you don't know anything, 
										in this section will learn very much.", 
     			'culture' 		=> "Culture", 
     			'culture_desc'	=> "After know the basic notion in N'ko, you must pratice to anderstand,
										in this section, you will be the excellent reader I hope.", 
				'souhait' 		=> "Good reading !",
				);
	$fr = array(
     			'page_title' 	=> "Fasso Ecole", 
     			'main_welcome' 	=> "Bienvenue à l'école de Fasso !", 
     			'you_are_on' 	=> "Vous êtes dans l’école de Fasso, 
										travers N’ko vous allez apprendre beaucoup de chose ici", 
     			'for_example' 	=> "Par exemple", 
     			'nqo' 			=> "N'ko", 
     			'nqo_desc'		=> "Avez-vous vu l’écriture N’ko au paravent, n'est ce pas?. 
										Si non soyez la bienvenue dans la découverte et l’apprentissage de N’ko. 
										Cette partie vous expliquera dans tout son détail l’écriture N’ko. 
										Tous les niveaux seront abordés depuis l’alphabet jusqu’à l’orthographe.", 
     			'computer'		=> "Informatique", 
     			'computer_desc' => "Vous avez probablement un ordinateur, 
										mais vous ne savez pas l’utiliser comme il le faut ; la section informatique 
										vous permettra d’avoir les bases fondamentales en informatique.", 
     			'game' 			=> "Jeux", 
     			'game_desc' 	=> "Actuellement, les jeux informatiques sont très rependus, 
										il y a certaines personnes qui passent beaucoup de temps derniers les appareils pour 
										ces jeux. Nous allons mettre à la disposition de la nation mandingue 
										nos jeux mandingues très éducatifs pour permettre un rapprochement à nous même.", 
     			'culture' 		=> "Culture", 
     			'culture_desc'	=> "La riche culture mandingue sera expliquée dans cette partie. 
										Cette culture étant très vague, vous allez vous-même nous apporter 
										certains éléments de celle-ci pour un accès libre à tous. 
										Vous allez faire cela en LISANT et en ECRIVANT.
										Vous allez comme ça approfondir vos connaissances en LECTURE et à ECRITURE 
										en N’ko de manière rapide et efficace.", 
				'souhait' 		=> "Bonne lecture !", 						
				);
?>