<?php
if(isset($_SESSION['user_id'])){
	echo('
		<a class="loged_in" href="http://fasso.org/karanta/user/logout.php" >Logout<a>
		<p id="log_statut">You are login</p>
		');
}
?>