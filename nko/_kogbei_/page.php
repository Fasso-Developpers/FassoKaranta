<?php 
	include("../../__soronta__/flo.php");
	
	$user_id = $_SESSION['user_id'];
	
	$last_chapitre = $_GET['c'];
	$last_lesson = $_GET['l'];
	$link_to_movie = $_GET['link'];
	$last_movie_title = $_GET['title'];
	
	// variable to table
	$level_in 	= 'level_1';
	$chapitre 	= 'chapitre_'.$last_chapitre;
	$lesson 	= 'lesson_'.$last_lesson;
	
	if(!lesson_alredy_view($user_id, $level_in, $chapitre, $lesson, $con)){
		insert_last_cours($user_id, $level_in, $chapitre, $lesson, $con);
	}
?>

<!doctype html>
<html>
	<!-- Insert Title here -->
	<h3 id="movie_title">
		<?php echo $last_movie_title .' ('
			.'<span id="comment_title">'
			.'chapitre '.$last_chapitre
			.' leçon '.$last_lesson 
			.'</span>'
			.') <br>'; 
		?>
	</h3>
	<iframe  
		<?php 
			echo 'src="http://www.youtube.com/embed/'.
				$link_to_movie
				.'?rel=0&autoplay=1&modestbranding=1&showinfo=0&origin=http://fasso.org"'; 
		?>
		
	  	 allowfullscreen />
</html>