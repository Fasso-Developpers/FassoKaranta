
<?php
//change interface in 'nko', 'en', 'fr';
	$show_lang = 'en';

	if (!empty($_POST['lang'])){
		$show_lang = $_POST['lang'];
		//setcookie('lang', $show_lang, time()+5, '/', '', false, true);
		setcookie('lang', $show_lang, time()+50, '/', '', false, true);
	}
	elseif (isset($_COOKIE['lang'])) {
		$show_lang = $_COOKIE['lang'];
		setcookie('lang', $show_lang, time()+5, '/', '', false, true);
	}
	elseif (isset($_GET['lang'])) {
		$show_lang = $_GET['lang'];
		setcookie('lang', $show_lang, time()+0, '/', '', false, true);
	}

	define('LABEL_LANG', $show_lang);
	define('LABEL_LANG_2','nko');

	// link to change the language
	$langues = array('nko'=>"ߒߞߏ N'ko", 
					'en'=>"English", 
					'fr'=>"Français");
	$nko = array('direction'=>"rtl",
				'language'=>"ߞߊ߲",
				'signUp_menu'=>"ߕߐ߯ ߛߓߍ",
				'login_menu'=>"ߜߊ߲߬ߞߎ߲߬ߠߌ",
				'sign_up'=>"ߕߐ߯ ߛߓߍ",
				'welcome_message'=>"ߌ ߣߌ߫ ߛߣߍ߫ ߝߊ߬ߛߏ ߕߐ߯ ߛߓߍ߫ ߦߙߐ ߘߐ߫",
				'please_message'=>"ߞߣߍ ߡߍ߲߬ ߠߎ߬ ߘߐߞߍ߫ ߖߊ߰ߣߌ߲߬ ߹",

				'field_is_required'=>"ߞߣߍ ߢߌ߲߬ ߘߐߞߍ߫ ߖߊ߰ߣߌ߲߬",
				'info_is_not_valide'=>"ߞߌ߬ߓߊ߬ߙߏ߬ ߢߣߊߡߊ ߟߊߘߏ߲߬ ߖߊ߰ߣߌ߲߬",
									
				'firstname_is_short' => 'ߌ ߕߐ߮ ߛߎ߬ߘߎ߲߬ߡߊ߲߬ ߞߏߖߎ߯ߦߊ߫',
				'lastname_is_short' => 'ߌ ߛߌ߫ ߛߎ߬ߘߎ߲߬ߡߊ߲߬ ߞߏߖߎ߯ߦߊ߫',
				'please_valide_email' => 'ߢߎߡߍߙߋ߲ߞߏ߲ߘߏ ߢߣߊߡߊ ߟߊߘߏ߲߬ ߖߊ߰ߣߌ߲߬',
				'password_is_short' => 'ߌ ߟߊ߫ ߕߊ߬ߡߌ߲߬ߞߊ߲ ߛߎ߬ߘߎ߲߬ߡߊ߲߬ ߞߏߖߎ߯ߦߊ߫',
				'password_isnot_confirm' => 'ߕߊ߬ߡߌ߲߬ߞߊ߲ ߓߍ߬ߣߍ߲߬ ߕߍ߫ ߢߐ߲߮ ߡߊ߬',
				'agree_fasso_condition' => 'ߛߐ߲߬ ߝߊ߬ߛߏ ߕߣߐ߬ߓߐ߬ ߛߙߊߕߌ ߟߎ߫ ߡߊ߬ ߖߊ߰ߣߌ߲߬',

				'sorry_email_exists_1' => 'ߢߎߡߍߙߋ߲ߞߏ߲ߘߏ',
				'sorry_email_exists_2' => 'ߢߌ߲߬ ߓߘߊ߫ ߕߊ߬ ߞߊ߬ߓߊ߲߫',
				'sorry_username_exists_1' => 'ߜߊ߲߬ߞߎ߲߬ߕߐ߮',
				'sorry_username_exists_2' => 'ߓߘߊ߫ ߕߊ߬ ߡߐ߰ ߜߘߍ߫ ߓߟߏ߫',

				'succes_registred' => 'ߌ ߕߐ߮ ߓߘߊ߫ ߛߓߍ߫ ߝߊ߬ߛߏ ߟߊ߫ ߞߏߢߊ߬ ߹',
				
				// Confirmation message after registration
				'active_account' => 'ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߘߟߊߞߊ߬',
				'hello_registered1' => '',
				'hello_registered2' => 'ߊߟߎ߫ ߣߌ߫ ߕߎ߬ߡߊ߬ ߛߟߊߕߌ߯',
				'confirm_message_body_1' => "ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߓߘߊ߫ ߟߊߓߊ߯ߙߊ߫ ߘߏ߫ ߓߟߏ߫ ߞߵߌ ߕߐ߮ ߛߓߍ߫ ߝߊ߬ߛߏ ߞߊ߬ߙߊ߲߬ߕߊ ߟߊ߫",
				'confirm_message_body_2' => "ߊ߲ ߡߴߊ߬ ߟߐ߲߫ ߣߵߌ ߣߐ߭ ߟߋ߬ ߥߟߊ߫ ߡߐ߰ ߜߘߍ߫ ߟߋ߫ ߣߐ߬ ߦߋ߫",
				'confirm_message_body_3' => 
							"ߒ߬ߓߊ߬ ߣߴߌ ߖߍ߬ߘߍ ߟߋ߬ ߣߐ߬ ߦߋ߫߸ ߘߎ߰ߟߊ߬ ߛߘߌߜߋ߲ ߣߌ߲߫ ߛߐ߲߬ߞߌ߲߬ ߞߵߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߘߟߊߞߊ߬",
				'this_link' => "ߛߘߌ߬ߜߋ߲ ߣߌ߲߬",
				'forget_this_email' => "ߣߴߌ ߣߐ߬ ߕߍ߫߸ ߊ߬ ߞߍ߫ ߕߋ߲߬ ߦߴߌ ߡߊ߬ ߞߋߛߓߍ ߣߌ߲߬ ߦߋ߫߸ ߌ ߞߣߊ߫ ߊ߬ ߛߐ߲߬ߞߌ߲߫ ߛߘߌ߬ߜߋ߲ ߝߣߊ߫ ߞߊ߲߬",
				'please_check_your_email' => "ߕߊ߯ ߌ ߟߊ߫ ߢߎߡߍߙߋ߲ߞߏ߲ߘߏ ߟߊ߫ ߞߵߌ ߟߊ߫ ߞߏ߲߬ߘߏ߬ ߞߎߘߊ ߟߊߞߊ߬", 


				'firstname'=>"ߌ ߕߐ߮",
				'lastname'=>"ߌ ߛߌ",
				'username'=>"ߌ ߜߊ߲߬ߞߎ߲߬ߕߐ߮",
				'adressemail'=>"ߢߎߡߍߙߋ߲ߞߏ߲ߘߏ",
				'password'=>"ߕߊ߬ߡߌ߲߬ߞߊ߲",
				'confirmPassword'=>"ߕߊ߬ߡߌ߲߬ߞߊ߲ ߡߊߛߊ߬ߦߌ߬",
				'my_language'=>"ߌ ߝߊ߬ߞߊ߲",
				'conditions'=>"ߕߣߐ߬ߓߐ߬ ߛߙߊߕߌ",
				'conditions_agree'=>"ߘߌ߬ߢߍ߬ ߝߊ߬ߛߏ ߕߣߐ߬ߓߐ߬ ߛߙߊߕߌ ߟߎ߫ ߡߊ߬ ߖߊ߰ߣߌ߲߬",
				'submit_register'=>"ߊ߬ ߟߊߕߊ߯",

				// Traduction of login
				'login'=>"ߜߊ߲߬ߞߎ߲߬ߠߌ",
				'password_incorrect' => "ߕߊ߬ߡߌ߲߬ߞߊ߲ ߡߊ߫ ߢߌ߲߬",
				'please_login_to_start' => "ߌ ߜߊ߲߬ߞߎ߲߫ ߖߊ߰ߣߌ߲߬ ߛߴߌ ߘߌ߫ ߥߟߊ߬ߘߊ ߟߎ߬ ߡߊߛߐ߬ߘߐ߲߬",
				'error_email_not_exist' => "ߢߎߡߍߙߋ߲ߞߏ߲ߘߏ ߣߌ߲߬ ߡߊ߫ ߕߊ߬ ߝߟߐ߫߸ ߌ ߘߌ߫ ߛߋ߫ ߞߏ߲߬ߘߏ ߘߏ߫ ߛߌ߲ߘߌ߫ ߟߊ߫ ߊ߬ ߟߊ߫",
				'error_username_not_exist' => "ߜߊ߲߬ߞߎ߲߬ߕߐ߮ ߣߌ߲߬ ߡߊ߫ ߕߊ߬ ߝߟߐ߫߸ ߌ ߘߌ߫ ߛߋ߫ ߞߏ߲߬ߘߏ ߘߏ߫ ߛߌ߲ߘߌ߫ ߟߊ߫ ߊ߬ ߟߊ߫",
				'remember_me' => "ߌ ߦߟߌߕߏ߫ ߒ ߘߐ߫",
				'Remenber_me_focus' => "ߦߊ߲߬ ߘߐߞߍ߫ ߞߵߊ߬ ߦߟߌߕߏ߫ ߌ ߘߐ߫",
				'submit_login' => "ߒ ߜߊ߲߬ߞߎ߲߬",

				// Traduction of my level in nko
				'successfully_registred' => "ߏ߬ ߓߘߊ߫ ߓߍ߲߬߸ ߌ ߓߘߴߌ ߕߐ߮ ߛߓߍ߫ ߞߏߢߊ߬ ߝߊ߬ߛߏ ߟߊ߫",
				'plaese_give_your_level' => "ߖߊ߱ߣߌ߲߬߸ ߌ ߟߊ߫ ߒߞߏ ߟߐ߲ ߞߊ߬ߓߋ ߦߌ߬ߘߊ߫ ߊ߲ ߠߊ߫ ߦߊ߲߬",
				'after_registration_fieldset' => "ߕߐ߯ ߛߓߍߟߌ ߞߐ߫",
				'your_level_in_nko' => "ߌ ߟߊ߫ ߒߞߏ ߟߐ߲ ߞߊߓߋ",
				// fieldsset your level
				'choise_your_level_in_nko' => "ߌ ߟߊ߫ ߒߞߏ ߟߐ߲ ߞߊߓߋ ߛߎߥߊ߲ߘߌ߫",
				'description_of_level_1' => "ߒ ߡߊ߫ ߒߞߏ ߛߓߍߛߎ߲ ߟߐ߲߫",
				'nko_level_1' => "ߞߊߓߋ߫ ߝߟߐ",
				'description_of_level_2' => "ߒ ߓߘߊ߫ ߒߞߏ ߛߓߍߛߎ߲ ߟߐ߲߫",
				'nko_level_2' => "ߞߊߓߋ߫ ߂߲",
				'description_of_level_3' => "ߒ ߓߘߊ߫ ߒߞߏ ߜߋ߲߭ ߟߐ߲߫",
				'nko_level_3' => "ߞߊߓߋ߫ ߃߲",
				'description_of_level_4' => "ߒ ߓߘߊ߫ ߒߞߏ ߞߊ߲ߡߊߛߙߋ ߟߐ߲߫",
				'nko_level_4' => "ߞߊߓߋ߫ ߄߲",
				'description_of_level_5' => "ߒ ߓߘߊ߫ ߒߞߏ ߞߊ߲ߜߍ ߟߐ߲߫",
				'nko_level_5' => "ߞߊߓߋ߫ ߅߲",
				// fieldsset Last N'ko study
				'old_nko_student' => "ߒߞߏ ߞߊߙߊ߲ߘߋ߲߫ ߞߘߐ",
				'old_nko_student_question' => "ߒߞߏ ߞߊߙߊ߲ߘߋ߲߫ ߞߘߐ ߟߋ߬ ߌ ߘߌ߫ ߓߊ߬؟",
				'yes' => "ߐ߲߰ߤߐ߲߫",
				'no' => "ߍ߲߬ߍ߲߫",
				'dont_remember_this_info' => "ߒ ߦߟߌ߫ ߕߍ߫ ߏ ߟߌ߬ߤߟߊ߬ ߛߌ߫ ߘߐ߫ ߡߎ߬ߕߎ߲߬",
				'last_nko_study' => "ߒߞߏ ߥߟߊ߬ߘߊ߬ ߞߘߐ ߞߌ߬ߓߊ߬ߙߏ",
				'informations_about_study' => "ߞߌ߬ߓߊ߬ߙߏ ߡߍ߲ ߓߍ߲߬ߕߐ߫ ߥߟߊ߬ߘߊ ߏ߬ ߟߎ߫ ߡߊ߬",
				'last_country' => "ߖߡߊ߬ߣߊ",
				'last_city' => "ߛߏ",
				'last_school_name' => "ߞߊ߬ߙߊ߲߬ߕߊ ߕߐ߮",
				'last_teacher_name' => "ߞߊ߬ߙߊ߲߬ߡߐ߮ ߕߐ߮",
				'last_begin_date' => "ߊ߬ ߘߊߡߌ߬ߣߊ߬ ߕߎߡߊ",
				'last_duration' => "ߊ߬ ߞߎ߲߬ߕߊ߮",
				// another information
				'another_information' => "ߟߌ߬ߤߟߊ߬ ߜߘߍ߫",
				'please_write_your_comment' => "ߌ ߟߊ߫ ߞߊ߲߬ߛߓߍ ߟߎ߬ ߛߓߍ߫ ߘߎ߰ߟߊ߫ ߦߊ߲߬",
				'submit_level' => "ߊ߬ ߟߊߕߊ߯",

				'succes_give_your_level' => "ߌ ߓߘߊ߫ ߓߊ߲߫ ߝߋߎ߫߸ ߌ ߣߌ߫ ߛߍ߰",
				
				// you can't give your level again
				'you_have_given_your_level' => "ߌ ߓߘߴߌ ߟߊ߫ ߞߊߓߋ ߦߌ߬ߘߊ߬ ߞߊ߬ߓߊ߲߫",
				'you_can_update_in_profile' => "ߌ ߘߌ߫ ߛߴߊ߬ ߡߊߝߊ߬ߟߋ߲߬ ߠߊ߫ ߌ ߟߊ߫ ߢߊߞߙߍ ߘߐ߫",
				
				/* *************** TRANSLATION OF ACTIVE ACCOUNT *********** */
				'account_is_not_activated' => "ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߡߊ߫  ߘߟߊߞߊ߬ ߝߟߐ߫",
				'email_and_activation_code_incorrect' => "ߌ ߟߊ߫ ߢߎߡߍߙߋ߲ߞߏ߲ߘߏ ߣߴߌ ߟߊ߫ ߘߟߊߞߊߟߌ ߘߏߞߊ߲ ߓߍ߲߬ߣߍ߲߬ ߕߍ߫",
				'please_go_to_your_email_and_click' => "ߖߊ߱ߣߌ߲߬ ߥߊ߫ ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߟߊ߫ ߞߵߊ߬ ߛߐ߲߬ߞߌ߲߫ ߛߘߌ߬ߜߋ߲߬ ߠߊߥߊߣߍ߲ ߞߊ߲߬ ߞߵߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߘߟߊߞߊ߬",
				'username_given_is_not_registered' => "ߜߊ߲߬ߞߎ߲߬ߕߐ߮ ߘߌߣߍ߲ ߡߊ߫ ߢߌ߲߬",
				'activation_code_is_incorrect' => "ߌ ߟߊ߫ ߘߟߊߞߊߟߌ ߘߏߞߊ߲ ߡߊ߫ ߢߌ߲߬",
				'please_check_it_in_your_email' => "ߕߊ߯ ߏ߬ ߡߊߝߟߍ߫ ߌ ߟߊ߫ ߢߎߡߍߙߋ߲ߞߏ߲ߘߏ ߟߊ߫ ߖߊ߰ߣߌ߲߬ ߹ ߺ",
				'you_can_leave_to_here' => "ߌ ߘߌ߫ ߛߋ߫ ߓߐ߫ ߟߊ߫ ߦߙߐ ߢߌ߲߬ ߘߐ߫ ߦߊ߲߬",
				'because_account_is_alredy_activated' => "ߓߊ ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߓߘߊ߫ ߘߟߊߞߊ߬ ߞߊ߬ߓߊ߲߫",
				'account_is_succes_activated' => "ߌ ߓߘߴߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߘߟߊߞߊ߬ ߞߏߢߊ߬ ߹ ߺ",
				'you_can_login_now' => "ߌ ߘߌ߫ ߛߴߌ ߜߊ߲߬ߞߎ߲߬ ߠߊ߫ ߡߎ߬ߕߎ߲߬ ߝߛߊߦߌ߫",
				
				'problem_to_activate_account' => "ߝߙߋߞߋ ߘߏ߫ ߦߴߊ߲ ߡߊ߬ ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߘߟߊߞߊ߭ ߘߐ߫",
				'sorry_please_try_again' => "ߊ߬ ߡߊ߫ ߛߊ߬ߦߌ߬ ߌߞߐ߫ ߖߊ߰ߣߌ߲߬߸ ߤߊߞߍ߬ߕߏ߫ ߘߋ߬",
				
				/* *************** TRANSLATION OF CONFIRM RESIZING BY TECHNICIAN *********** */
				'resize_is_not_confirm' => "ߖߌ߬ߦߊ ߟߊߘߏ߯ߦߊ ߡߊ߫ ߛߋ߫ ߟߊߕߍ߰ ߟߊ߫",
				'user_id_and_confirm_code_incorrect' => "ߞߌ߬ߓߊ߬ߙߏ߬ ߟߊߘߌߣߍ߲ ߠߎ߬ ߡߊ߫ ߢߌ߲߬",
				'please_confirm_by_email_sended' => "ߖߊ߱ߣߌ߲߬ ߥߊ߫ ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߟߊ߫ ߞߵߊ߬ ߛߐ߲߬ߞߌ߲߫ ߛߘߌ߬ߜߋ߲߬ ߠߊߥߊߣߍ߲ ߞߊ߲߬ ߞߵߌ ߟߊ߬ߕߍ߰ߟߌ ߘߌ߫",
				'user_id_given_is_not_registered' => "ߞߌ߬ߓߊ߬ߙߏ ߟߎ߬ ߡߊ߫ ߢߌ߲߬",
				'confirmation_code_is_incorrect' => "ߌ ߟߊ߫ ߟߊ߬ߕߍ߰ߟߌ߬ ߘߏ߫ ߝߙߍߕߍ ߡߊ߫ ߢߌ߲߬",
				'thank_you_are_in_late' => "ߌ ߣߌ߫ ߗߋ߫߸ ߒ߬ߞߊ߬ ߓߘߊ߫ ߞߐ߫ ߘߏ߯ߣߌ߲߫",
				'because_image_is_alredy_resized' => "ߓߊ ߖߌ߬ߦߊ ߏ߬ ߓߘߊ߫ ߓߊ߲߫ ߟߊߘߐ߯ߦߊ߫ ߟߊ߫",
				'image_is_succes_resized' => "ߌ ߓߘߴߌ ߟߊ߫ ߟߊ߬ߕߍ߰ߟߌ ߞߍ߫ ߞߏ߫ ߢߊ߬߸ ߌ ߣߌ߫ ߞߏ߲߫ ߹ ",
				
				'problem_to_confirm_resize' => "ߝߙߋߞߋ ߘߏ߫ ߦߴߊ߲ ߡߊ߬ ߌ ߟߊ߫ ߞߏ߲߬ߘߏ ߟߊ߬ߕߍ߰ߟߌ ߞߍ ߘߐ߫",
				
				/*  ******************** TRANSLATION OF PROFILE INFORAMTION ************ */
				
				//title of page
				'title_of_profile'=>"ߝߊ߬ߛߏ - ߢߊߞߙߍ",
				
				// content title
				'content_title'=>"ߢߊߞߙߍ ߞߌ߬ߓߊ߬ߙߏ",
				// link name
				
				// +++++++++++++   page of profile +++++++++++++
				'profile_page' => "ߞߌ߬ߓߊ߬ߙߏ",
				// para profile
				'my_profile' => "ߒ ߠߊ߫ ߢߊߞߙߍ",
				
				'registration_info' => "ߒ ߠߊ߫ ߞߌ߬ߓߊ߬ߙߏ߬ ߟߊߘߏ߲߬ߣߍ߲",
				'my_firstname'=>"ߒ ߕߐ߮",
				'my_lastname'=>"ߒ ߛߌ",
				'my_username'=>"ߒ ߜߊ߲߬ߞߎ߲߬ߕߐ߮",
				
				'profile_image' => "ߢߊߞߙߍ ߖߌ߬ߦߊ",
				'register_date' => "ߌ ߕߐ߮ ߛߓߍ߫ ߟߏ߲",
				'last_update' => "ߟߏ߲ߘߐߦߊߟߌ߫ ߟߊߓߊ߲",
				'save_edit' => "ߊ߬ ߟߊߞߎ߲߬ߘߎ߬",
				
				'greeting_hi' => "ߌ ߣߌ߫ ߕߎ߬ߡߊ߬",
				'comma' => "߸",
				'you_have_not_profile_image' => "ߌ ߡߴߌ ߟߊ߫ ߢߊߞߙߌ ߖߌ߬ߦߊ ߓߌ߬ߟߊ߬ ߝߟߐ߫",
				
				
				// +++++++++++++ profile More information ++++++++++
				'profile_more_info' => "ߞߌ߬ߓߊ߬ߙߏ߬ ߜߘߍ߫",
				
				'more_info' => "ߞߌ߬ߓߊ߬ߙߏ߬ ߜߘߍ߫",
				'my_djamun'=>"ߒ ߖߊ߬ߡߎ߲",
				'my_sanankun'=>"ߒ ߛߊ߬ߣߊ߲߬ߞߎ߲",
				'my_age'=>"ߒ ߛߊ߲߭",
				'my_sexe'=>"ߒ ߖߊ߲߬ߓߘߍ",
				'my_phone'=>"ߒ ߠߊ߫ ߜߋߟߋ߲ߜߋߟߋ߲",
				'my_country'=>"ߒ ߠߊ߫ ߖߡߊ߬ߣߊ",
				'my_manden_country'=>"ߒ ߠߊ߫ ߡߊ߲߬ߘߋ߲߬ ߖߡߊߣߊ",
				'my_city'=>"ߒ ߠߊ߫ ߛߏ",
				
				'must_give_djamun_or_sanankun'=> "ߌ ߞߊߞߊ߲߫ ߞߵߌ ߖߊ߬ߡߎ߲ ߣߴߌ ߛߊ߬ߣߊ߲߬ߞߎ߲ ߘߌ߫ ߟߋ߬",
				'alredy_regist_more_info'=>"ߌ ߓߘߴߌ ߟߊ߫ ߞߌ߬ߓߊ߬ߙߏ ߟߎ߬ ߘߌ߫ ߞߊ߬ߓߊ߲߫",
				'not_regist_more_info'=> "ߌ ߡߴߌ ߟߊ߫ ߞߌ߬ߓߊ߬ߙߏ ߢߌ߲߬ ߠߎ߬ ߘߌ߫ ߝߟߐ߫",
				'you_can_update_info'=>"ߌ ߘߌ߫ ߛߴߊ߬ߟߎ߬ ߡߊߦߟߍ߬ߡߊ߲߬ ߠߊ߫",
				'succes_give_more_info'=>"ߌ ߓߘߴߌ ߟߊ߫ ߞߌ߬ߓߊ߬ߙߏ ߟߎ߬ ߘߌ߫ ߞߏߢߊ߬",
				
				
				// +++++++++++++++++ profile  language page ++++++++++++++++
				'profile_languages_page'=>"ߞߊ߲",
				'my_languages'=>"ߒ ߠߊ߫ ߞߊ߲ ߠߎ߬",
				'choose_your_language'=>"ߌ ߟߊ߫ ߞߊ߲ ߠߎ߬ ߛߎߥߊ߲ߘߌ߫",
				'my_explanation'=>"ߢߊߝߐߟߌ߫ ߞߊ߲",
				'my_display'=>"ߦߌ߬ߘߊ߬ߟߌ߬ ߞߊ߲߬",
				'explanation_importance'=>"ߝߊ߬ߛߏ ߞߊ߬ߙߊ߲߬ߕߊ ߥߟߊ߬ߘߊ ߟߎ߬ ߓߍ߯ ߞߍߕߐ߫ ߢߊߝߐߟߌ ߞߊ߲ ߠߋ߬ ߘߐ߫",
				'display_importance'=>"ߝߊ߬ߛߏ ߞߊ߬ߙߊ߲߬ߕߊ ߞߐߜߍ ߟߎ߫ ߦߌ߬ߘߊ߬ߕߐ߫ ߦߌ߬ߘߊ߬ߟߌ߬ ߞߊ߲ ߠߋ߬ ߘߐ߫",
				'high_level_languages'=>"ߣߴߊߟߎ߫ ߛߋ߫ ߘߊ߫ ߒߞߏ ߥߟߊߘߊ ߛߊ߲ߘߐ߫ ߞߊߓߋ ߟߎ߬ ߘߐ߫߸ ߊ߲ ߧߴߊߟߎ߫ ߟߊߟߌ߫ ߟߊ߫ ߒߞߏ ߕߊ߭ ߘߐ߫߸ ߖߐ߲߰ߛߊ߫ ߊߟߎ߫ ߘߴߊߟߎ߫ ߟߊ߫ ߒߞߏ ߥߟߊߘߊ ߟߎ߬ ߓߟߏߦߊ߫",
				'see_demo_below'=>"ߊ߬ ߢߍߛߐ߲ ߘߏ߫ ߝߟߍ߫ ߘߎ߰ߟߊ߬ ߓߊ߫߹ ",
				
				// +++++++++++++ profile about level +++++++++++++
				'profile_level'=>"ߞߊߓߋ",
				
				// +++++++++++++ profile about parents +++++++++++++
				'profile_parents'=>"ߡߏߦߌߓߊ߮",
				
				// +++++++++++++ profile about mothers +++++++++++++
				'profile_mothers'=>"ߣߊߟߞߊ",
				
				// +++++++++++++ profile about fathers +++++++++++++
				'profile_fathers'=>"ߝߊ߬ߟߞߊ",
						
				);
	$en = array('direction'=>"ltr",
				'language'=>"Languages",
				'signUp_menu'=>"Sign Up",
				'login_menu'=>"Login",
				'sign_up'=>"Sign Up",
				'welcome_message'=>"Welcome to Fasso registration page",
				'please_message'=>"Please fill these fields !",


				'field_is_required'=>"This field is required",
				'info_is_not_valide'=>"please enter a valid information",
									
				'firstname_is_short' => 'Firstname is too short',
				'lastname_is_short' => 'Lastname is too short',
				'please_valide_email' => 'Please enter valid email adress',
				'password_is_short' => 'Password is too short',
				'password_isnot_confirm' => 'Password is not confirm',
				'agree_fasso_condition' => 'You must agree the fasso conditions',

				'sorry_email_exists_1' => 'This email',
				'sorry_email_exists_2' => 'alredy used',
				'sorry_username_exists_1' => 'User name',
				'sorry_username_exists_2' => 'is taken, please choose another one',
				'succes_registred' => 'You are registered successfully',
				
				// Confirmation message after registration
				'active_account' => 'Active your account',
				'hello_registered1' => 'Hello',
				'hello_registered2' => '', // this part is not necessary in english
				'confirm_message_body_1' => "Your email is used to register on karanta.fasso.org courses",
				'confirm_message_body_2' => "we don't know if it is you or another one.",
				'confirm_message_body_3' => 
							"If it is yourself, please click on this below link to activate your account",
				'this_link' => "This link",
				'forget_this_email' => "If it isn't you forget this email, and don't click the link", 
				'please_check_your_email' => "Plaese check your email to activate your account", 

				'firstname'=>"Firstname",
				'lastname'=>"Lastname",
				'username'=>"Username",
				'adressemail'=>"Email",
				'password'=>"Password",
				'confirmPassword'=>"Confirm Password",
				'my_language'=>"Language",
				'conditions'=>"Use condition",
				'conditions_agree'=>"Please agree the use condition",
				'submit_register'=>"Register",

				// Traduction of login
				'login'=>"Login",
				'password_incorrect' => "Password is incorret",
				'please_login_to_start' => "Please connect you to acces the courses !",
				'error_email_not_exist' => "This email does not exist, you must create a new accont",
				'error_username_not_exist' => "This username does not exist, you must create a new accont",
				'remember_me' => "Remenber me",
				'Remenber_me_focus' => "Check here to remember next times",
				'submit_login' => "Login",

				// Traduction of my level in nko
				'successfully_registred' => "Well ! You are successfully registred to learn N'ko",
				'plaese_give_your_level' => "Plaese give your level in N'ko to start the courses",
				'after_registration_fieldset' => "After registration",
				'your_level_in_nko' => "Your level in N'ko",
				// fieldsset your level
				'choise_your_level_in_nko' => "Choise your level in N'ko",
				'description_of_level_1' => "I don't know N'ko Alphabet",
				'nko_level_1' => "Level 1",
				'description_of_level_2' => "I know N'ko Alphabet",
				'nko_level_2' => "Level 2",
				'description_of_level_3' => "I know the syllabe in N'ko",
				'nko_level_3' => "Level 3",
				'description_of_level_4' => "I know the accents in N'ko",
				'nko_level_4' => "Level 4",
				'description_of_level_5' => "I know N'ko grammar",
				'nko_level_5' => "Level 5",
				// fieldsset Last N'ko study
				'old_nko_student' => "Old N'ko student",
				'old_nko_student_question' => "Are you a old N'ko student?",
				'yes' => "Yes",
				'no' => "No",
				'dont_remember_this_info' => "I don't remember this information",
				'last_nko_study' => "Last N'ko study",
				'informations_about_study' => "informations about this last N'ko study",
				'last_country' => "Country",
				'last_city' => "City",
				'last_school_name' => "School name",
				'last_teacher_name' => "Teacher name",
				'last_begin_date' => "Begin date",
				'last_duration' => "Duration",
				// another information
				'another_information' => "Another information",
				'please_write_your_comment' => "Please write your comment bellow",
				'submit_level' => "Save",
				'succes_give_your_level' => "You have given your level, very well",
				
				// you can't give your level again
				'you_have_given_your_level' => "You have alredy given your level in nko",
				'you_can_update_in_profile' => "You can update this in your profile",
				
				/* *************** TRANSLATION OF ACTIVE ACCOUNT *********** */
				'account_is_not_activated' => "Your account is not activated",
				'email_and_activation_code_incorrect' => "Your email and activation code are incorrect",
				'please_go_to_your_email_and_click' => "Please go to your email, and click on sended link to active it",
				'username_given_is_not_registered' => "Username given is not registered",
				'activation_code_is_incorrect' => "Your activation code is incorrect",
				'please_check_it_in_your_email' => "Please check it in your email !",
				'you_can_leave_to_here' => "You can leave to here",
				'because_account_is_alredy_activated' => "because your account is alredy activated",
				'account_is_succes_activated' => "You are activated your account successfelly !",
				'you_can_login_now' => "You can login now",
				
				'problem_to_activate_account' => "We have a problem to activate your account",
				'sorry_please_try_again' => "we are very sorry, Please try again!",
				
				/* *************** TRANSLATION OF CONFIRM RESIZING BY TECHNICIAN *********** */
				'resize_is_not_confirm' => "Image resizing is not confirm",
				'user_id_and_confirm_code_incorrect' => "The given informations are incorrect",
				'please_confirm_by_email_sended' => "Please go to your email, and click on sended link to confirm it",
				'user_id_given_is_not_registered' => "Information is incorrect",
				'confirmation_code_is_incorrect' => "Your confirmation code is incorrect",
				'thank_you_are_in_late' => "Thanks, you are late",
				'because_image_is_alredy_resized' => "this image is alredy resized",
				'image_is_succes_resized' => "You are confirm your resizing successfelly !",
				
				'problem_to_confirm_resize' => "We have a problem to confirm your resizing",
				
				/*  ******************** TRANSLATION OF PROFILE INFORAMTION ************ */
				
				/* ************ main_page = profile *************** */
				
				//title of page
				'title_of_profile'=>"Fasso - Profile",
				
				// content title
				'content_title'=>"Profile info",
				// link name
				
				/* +++++++++++++++ profile page +++++++++++++ */
				'profile_page' => "Profile",
				
				// para profile
				'my_profile' => "My profile",
				'registration_info' => "Registration info",
				'my_firstname'=>"My first name",
				'my_lastname'=>"My last name",
				'my_username'=>"My username",
				
				'profile_image' => "Profile picture",
				'register_date' => "Registration date",
				'last_update' => "Last update",
				'save_edit' => "Save",
				
				'greeting_hi' => "Hi",
				'comma' => ",",
				'you_have_not_profile_image' => "You have not upload your profile image",
				
				// +++++++++++++ profile More information ++++++++++
				'profile_more_info' => "More info",
				
				'more_info' => "More information",
				'my_djamun'=>"My djamun",
				'my_sanankun'=>"My sanankun",
				'my_age'=>"My age",
				'my_sexe'=>"Sexe",
				'my_phone'=>"My phone",
				'my_country'=>"My country",
				'my_manden_country'=>"My manden country",
				'my_city'=>"My city",
				
				'must_give_djamun_or_sanankun'=> "You must give your Djamun and your Sanankun",
				'alredy_regist_more_info'=>"You have alredy registred your informations",
				'not_regist_more_info'=> "You have not given these informations",
				'you_can_update_info'=>"you can update these",
				'succes_give_more_info'=>"You have given your more info successfully !",
				
				
				// profile about language
				'profile_languages_page'=>"Language",
				'my_languages'=>"My languages",
				'choose_your_language'=>"choose your languages",
				'my_explanation'=>"Explanation language",
				'my_display'=>"Display language",
				'explanation_importance'=>"Explanation language will use for explain the courses in Fasso Karanta",
				'display_importance'=>"Display language will use for display the page in Fasso Karanta",
				'high_level_languages'=>"If you pass to high level in N'ko courses, we recommand you to choose N'ko, 
											to pratice your N'ko courses",
				'see_demo_below'=>"See demonstration below !",
				
				// +++++++++++++ profile about language +++++++++++++
				'profile_level'=>"Level",
				
				// +++++++++++++ profile about parents +++++++++++++
				'profile_parents'=>"Parents",
				
				// +++++++++++++ profile about mothers +++++++++++++
				'profile_mothers'=>"Mothers",
				
				// +++++++++++++ profile about fathers +++++++++++++
				'profile_fathers'=>"Fathers",
					
				);
	$fr = array('direction'=>"ltr",
				'language'=>"Langues",
				'signUp_menu'=>"S'enregistrer",
				'login_menu'=>"Connexion",
				'sign_up'=>"S'enregistrer",
				'welcome_message'=>"Bienvenue sur l'autentification de Fasso",
				'please_message'=>"S'il vous plait remplissez ces champs !",

				'field_is_required'=>"Ce champ est obligatoire",
				'info_is_not_valide'=>"veillez entrer une valeur valide",
									
				'firstname_is_short' => 'Prénom trop court',
				'lastname_is_short' => 'Nom trop court',
				'please_valide_email' => 'veillez entrer un email valide',
				'password_is_short' => 'Mot de passe trop court',
				'password_isnot_confirm' => 'Mot de pass différent',
				'agree_fasso_condition' => 'veillez accepter les conditions',

				'sorry_email_exists_1' => "l'email",
				'sorry_email_exists_2' => "est déjà pris",
				'sorry_username_exists_1' => "le nom d'utilisateur",
				'sorry_username_exists_2' => 'est déjà pris',

				'succes_registred' => 'vous êtes enregistré avec succes !',
				
				// Confirmation message after registration
				'active_account' => 'Activer votre compte',
				'hello_registered1' => 'Bonjour',
				'hello_registered2' => '', // this part is not necessary in french
				'confirm_message_body_1' => 
						"Votre email fut utilisé pour vous enregistrer aux cours de karanta.fasso.org",
				'confirm_message_body_2' => "Nous ne savons si c'est vous ou une autre personne",
				'confirm_message_body_3' => 
						"Si c'est vraiment vous même, cliquez sur ce lien ci-dessous pour activer votre compte",
				'this_link' => "Ce lien",
				'forget_this_email' => "Si ce n'est pas vous, ignorez cet email, et ne cliquez pas sur le lien.",
				'please_check_your_email' => "Veillez verifiez votre email fourni pour activer votre compte", 

				'firstname'=>"Prénom",
				'lastname'=>"Nom",
				'username'=>"Nom d'utilisateur",
				'adressemail'=>"Email",
				'password'=>"Mot de passe",
				'confirmPassword'=>"Confirmation",
				'my_language'=>"Langue",
				'conditions'=>"Condition d'utilisation",
				'conditions_agree'=>"Veillez accepter les conditions d'utilisation",
				'submit_register'=>"S'enregistrer",

				// Traduction of login
				'login'=>"Connexion",
				'password_incorrect' => "Le mot de passe est incorrect",
				'please_login_to_start' => "Veillez vous connecter pour acceder aux cours !",
				'error_email_not_exist' => "Cet email n'existe pas encore, vous pouvez créer un compte avec",
				'error_username_not_exist' => "Cet nom d'utilisateur n'existe pas encore, vous pouvez créer un compte avec",
				'remember_me' => "Se souvenir de moi",
				'Remenber_me_focus' => "Cocher ici pour se sourvenir de vous",
				'submit_login' => "Se connecter",

				// Traduction of my level in nko
				'successfully_registred' => "Bien, vous vous êtes inscrit avec succès sur Fasso",
				'plaese_give_your_level' => "Veillez nous renseigner de votre niveau en N'ko avant de damarrer les cours",
				'after_registration_fieldset' => "Après l'inscription",
				'your_level_in_nko' => "Votre niveau en N'ko",
				// fieldsset your level
				'choise_your_level_in_nko' => "Choisissez votre niveau en N'ko",
				'description_of_level_1' => "Je ne connais pas l'Alphabet N'ko",
				'nko_level_1' => "Niveau 1",
				'description_of_level_2' => "Je connais l'alphabet N'ko",
				'nko_level_2' => "Niveau 2",
				'description_of_level_3' => "Je connais les syllabes en N'ko",
				'nko_level_3' => "Niveau 3",
				'description_of_level_4' => "Je connais les accents en N'ko",
				'nko_level_4' => "Niveau 4",
				'description_of_level_5' => "Je connais la grammaire N'ko",
				'nko_level_5' => "Niveau 5",
				// fieldsset Last N'ko study
				'old_nko_student' => "Ancien élève en N'ko",
				'old_nko_student_question' => "Etes vous un ancien élève en N'ko?",
				'yes' => "Oui",
				'no' => "Non",
				'dont_remember_this_info' => "Je ne me rappelle pas",
				'last_nko_study' => "Ancien cours en N'ko",
				'informations_about_study' => "informations concernant ces derniers cours",
				'last_country' => "Pays",
				'last_city' => "Ville",
				'last_school_name' => "Nom de l'école",
				'last_teacher_name' => "Nom de l'enseignant",
				'last_begin_date' => "Date de debut",
				'last_duration' => "Durée",
				// another information
				'another_information' => "Autres information",
				'please_write_your_comment' => "Veillez saisir vos commentaire en bas",
				'submit_level' => "Enregistrer",

				'succes_give_your_level' => "Vous avez donné votre niveau, Très bien!",
				
				// you can't give your level again
				'you_have_given_your_level' => "Vous avez déjà fourni votre niveau",
				'you_can_update_in_profile' => "Vous pouvez le mettre à jour sur votre profile",
				
				/* *************** TRANSLATION OF ACTIVE ACCOUNT *********** */
				'account_is_not_activated' => "Votre compte est pas activé",
				'email_and_activation_code_incorrect' => "Votre email et code d'activation sont incorrects",
				'please_go_to_your_email_and_click' => "Veillez cliquer sur le lien envoyé à votre email,  pour activer votre compte",
				'username_given_is_not_registered' => "Le nom d'utilisateur est incorrect",
				'activation_code_is_incorrect' => "Votre code d'activation est incorrect",
				'please_check_it_in_your_email' => "Veillez le verifiez dans votre email",
				'you_can_leave_to_here' => "Vous pouvez quitter ici",
				'account_is_succes_activated' => "Vous avez activez votre compte avec succes !",
				'because_account_is_alredy_activated' => "car votre compte est déjà activé",
				'you_can_login_now' => "Vous pouvez vous connecter maintenant",
				
				'problem_to_activate_account' => "Nous avons un problème pour activer votre compte",
				'sorry_please_try_again' => "Nous sommes vraiment désolé, veillez refaire plutard!",
				
				/* *************** TRANSLATION OF CONFIRM RESIZING BY TECHNICIAN *********** */
				'resize_is_not_confirm' => "La redimension de l'image n'est pas confirmée",
				'user_id_and_confirm_code_incorrect' => "Les informations fournis sont incorrectes",
				'please_confirm_by_email_sended' => "Veillez cliquer sur le lien envoyé à votre email,  pour confirmer",
				'user_id_given_is_not_registered' => "L'information est incorrecte",
				'confirmation_code_is_incorrect' => "Votre code de confirmation est incorrect",
				'thank_you_are_in_late' => "Merci, vous êtes un peu en retard",
				'because_image_is_alredy_resized' => "parce que l'image est déjà redimensionnée",
				'image_is_succes_resized' => "Vous avez confirmé la redimension avec succes!",
				
				'problem_to_confirm_resize' => "Nous avons un problème pour confirmer la redimension",
				
				/*  ******************** TRANSLATION OF PROFILE INFORAMTION ************ */
				//title of page
				'title_of_profile'=>"Fasso - Profile",
				
				// content title
				'content_title'=>"Profile info",
				// link name
				'profile_page' => "Info",
				
				// para profile
				'my_profile' => "Mon profile",
				
				'registration_info' => "Infos d'inscription",
				'my_firstname'=>"Mon prénom",
				'my_lastname'=>"Mon nom",
				'my_username'=>"Mon nom d'utilisateur",
				
				'profile_image' => "Image de profile",
				'register_date' => "Date d'inscription",
				'last_update' => "Dernier mise à jour",
				'save_edit' => "Enregistrer",
				
				'greeting_hi' => "Salut",
				'comma' => ",",
				'you_have_not_profile_image' => "Vous n'avez pas charger votre image de profile d'abord",
				
				
				// +++++++++++++ profile More information ++++++++++
				'profile_more_info' => "Plus d'info",
				
				'more_info' => "Plus d'information",
				'my_djamun'=>"Mon djamun",
				'my_sanankun'=>"Mon sanankun",
				'my_age'=>"Mon âge",
				'my_sexe'=>"Sexe",
				'my_phone'=>"Mon téléphone",
				'my_country'=>"Mon pays",
				'my_manden_country'=>"Mom pays manding",
				'my_city'=>"Ma ville",
				
				'must_give_djamun_or_sanankun'=> "Vous devez fournir ton Djamoun et ton Sanankoun",
				'alredy_regist_more_info'=>"Vous avez déjà enregistré vos informations",
				'not_regist_more_info'=> "Vous n'avez pas encore donné ces informations",
				'you_can_update_info'=>"vous pouvez les mettre à jour",
				'succes_give_more_info'=>"Vous avez fourni avec succes vos informations!",
				
				
				// +++++++++++++ profile about language +++++++++++++
				'profile_languages_page'=>"Langue",
				'my_languages'=>"Mes langues",
				'choose_your_language'=>"Choisissez vos langues",
				'my_explanation'=>"Langue d'explication",
				'my_display'=>"Langue d'affichage",
				'explanation_importance'=>"La langue sera utilisée pour l'explication des cours sur Fasso Karanta",
				'display_importance'=>"La langue d'affichage sera utilisée pour l'affichage des pages de Fasso Karanta",
				'high_level_languages'=>"Si vous passez à un niveau avancé en N'ko, nous vous recommandons de prendre N'ko, 
											pour pratiquer vos cours de N'ko",
				'see_demo_below'=>"Voici la demonstration !",
				
				// +++++++++++++ profile about language +++++++++++++
				'profile_level'=>"Niveau",
				
				// +++++++++++++ profile about parents +++++++++++++
				'profile_parents'=>"Parents",
				
				// +++++++++++++ profile about mothers +++++++++++++
				'profile_mothers'=>"Maternels",
				
				// +++++++++++++ profile about fathers +++++++++++++
				'profile_fathers'=>"Paternels",
						
				);
?>
