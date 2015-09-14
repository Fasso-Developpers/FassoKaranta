
<!doctype html>
<html>
	<iframe  
		<?php 
			$link_to_movie = $_GET['link'];
			echo 'src="http://www.youtube.com/embed/'.
				$link_to_movie
				.'?rel=0&autoplay=1&modestbranding=1&showinfo=0&origin=http://fasso.org"'; 
		?>
		
	  	 allowfullscreen />
</html>

