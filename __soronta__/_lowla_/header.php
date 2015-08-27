
<header id="mainMenu" dir="auto">
	<a title="Retour à l'accueil" id="logo" href="#" ></a>
	<nav>
		<ul dir="auto" id="menu">
			<li><a href="http://www.fasso.org/">Fasso</a>
			<li <?php if(MAIN_PAGE == "main_index") echo' class="active"'; ?> ><a href="//localhost/karanta/index.php">Home</a>
			<li <?php if(MAIN_PAGE == "nko_index") echo' class="active"'; ?> ><a href="//localhost/karanta/nko/index.php">N'ko</a>
			<li <?php if(MAIN_PAGE == "computer_index") echo' class="active"'; ?> ><a href="//localhost/karanta/computer/index.php">Computer</a>
			<li <?php if(MAIN_PAGE == "game_index") echo' class="active"'; ?> ><a href="//localhost/karanta/game/index.php">Games</a>
			<li <?php if(MAIN_PAGE == "reading_index") echo' class="active"'; ?> ><a href="//localhost/karanta/reading/index.php">Reading</a>
		</ul>
	</nav>
	
	<!--
	<form id="recherche" method="post" action="#">
		<input type="text" id="champ-Recherche" class="autoEmpty" value=" ߊ߬ ߢߌߣߌ߲߫ ߦߊ߲߬..." />
	</form>
	-->

	<?php
		// Le MENU de lonko 'MENU LONKO'
		if (MAIN_PAGE == "main_index"){
			echo('
				<div id="menuContenu" class="ombre">
					<nav>
						<ul dir="auto" id="subMenu">
							<li><a href="user/profile.php">Profile</a>
							<li><a href="#">Mes cours</a>
							<li><a href="#">Mes niveaux</a>
							<li><a href="#">Achevés</a>
						</ul>
					</nav>
				</div>
				');
			//verif_login("//localhost/karanta/user/logout.php");
		}elseif (MAIN_PAGE == "nko_index"){
			echo('
				<div id="menuContenu" class="ombre">
					<nav>
						<ul dir="auto" id="subMenu">
							<li><a href="//localhost/karanta/user/profile.php">Profile</a>
							<li><a href="#">Alphabet</a>
							<li><a href="#">Accents</a>
							<li><a href="#">Grammar</a>
							<li><a href="#">Orthograph</a>
						</ul>
					</nav>
				</div>
			');
			//verif_login("//localhost/karanta/user/logout.php");
		}elseif (MAIN_PAGE == "profile"){
			echo('
				<div id="menuContenu" class="ombre">
					<nav>
						<ul dir="auto" id="subMenu">
							<li class="active"><a href="profile.php">Profile</a>
							<li><a href="#">Niveau entrant</a>
							<li><a href="#">En cours</a>
							<li><a href="#">Achevés</a>
						</ul>
					</nav>
				</div>
				');
			//verif_login("//localhost/karanta/user/logout.php");
		}
		
		verif_login();
		
	?>
</header>
