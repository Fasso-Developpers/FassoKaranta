<?php
	
	include("../../connect.php");
	include("../../function.php");
	$error = "";
	$succes = "";
	/*
	if(logged_in())
	{
		echo "You are login";
		?>
			<a href="changepassword.php" style="float:right ; background-color:#eee; color:000">Change password<a>
			<a href="logout.php" style="float:right; padding: 10px; margin-right:40px; background-color:#eee; color:000; text-decoration: none; z-index:50">Logout<a>
		<?php
	}
	else
	{
		echo "You are not login";
		header("location: login.php");
	}
	*/
?>


<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso | N'ko school</title>
	<link rel="icon" href="images/fassoIcone.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/styles_cours.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/site.js"></script>
</head>

<body dir="auto">

<!-- Entête -->
		
		<header id="mainMenu" dir="auto">
			<a title="Retour à l'accueil" id="logo" href="#" ></a>
			<nav>
				<ul dir="auto" id="menu">
					<li><a href="#">Fasso</a>
					<li><a href="../../index.php">Home</a>
					<li class="active"><a href="#">N'ko courses</a>
					<li><a href="computer/">Computer science</a>
					<li><a href="game/">Games</a>
					<li><a href="reading/">Reading</a>

					
				</ul>
			</nav>
			<form id="recherche" method="post" action="#">
				<input type="text" id="champ-Recherche" class="autoEmpty" value=" ߊ߬ ߢߌߣߌ߲߫ ߦߊ߲߬..." />

			</form>

<!--Le MENU de lonko 'MENU LONKO' 	-->
			<div id="menuContenu" class="ombre">
				<nav>
					<ul dir="auto" id="subMenu">
						<li><a href="alphabet.php">Alphabet</a>
						<li><a href="accent.php">Accents</a>
						<li><a href="grammar.php">Grammar</a>
						<li><a href="orthograph.php">Orthograph</a>
					</ul>
				</nav>
			</div>
			<?php
					if(logged_in())
					{
						echo "You are login";
						?>
							<!-- <a class="loged_in" href="changepassword.php" >Change password<a> -->
							<a class="loged_in" href="../../user/logout.php">Logout<a>
							<p id="log_statut">You are login</p>
						<?php
					}
					else
					{
						echo "You are not login";
						header("location: login.php");
					}
				?>
		</header>

<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" id="contenu" class="ombre">

		<!-- Titre -->
			<div id="titre" class="rectangle ombre">
				<h1>Contents Menu</h1>
				<ul id="lesTitres">
					<li><a href="#">Alphabet</a>
					<li><a href="#">Diphtone</a>
					<li><a href="#">Vowels</a>
					<li><a href="#">Consonant</a>
					<li><a href="#">Revison</a>
				</ul>
			</div>

		<!-- Paragraphe texte -->
				<div id="paraTitre" class="rectangle ombre">
					<h1 class="rectangle">Introduction to N'ko alphabet</h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					<p>
						 The N'ko alphabet is the letter that you use to write N'ko. They are 27 characters. 
						 These characteres are divide in tree groups as following.
						 <p></p>
					</p>

					<ul id="listDmalon">
						<li>The Dipthone 
							<p class="def">(This character is not vowels or consonnants, 
								it's the intermediate beetwen these ones. It is only one Diphtone in N'ko.)</p>
						</li>
						<li>The vowels
							<p class="def">(In N'ko the vowels are 7)</p>
						</li>
						<li>The consonnants
							<p class="def">(There are 19 consonnants)</p>
						</li>
					</ul>
					
					<p>
						See below a video for "Introduction to N'ko"
					</p>
					<p class="souhait">Good reading !</p>
				</section>
			</div>

			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>

		</div>

</body>
</html>