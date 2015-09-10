<?php
	
	define("MAIN_PAGE", "main_index");
	include("__soronta__/flo.php");
	$error = "";
	$succes = "";
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso Ecole</title>
	<link rel="icon" href="images/fassoIcone.ico" type="image/x-icon">

	<link rel="stylesheet" href="_css_/styles_header.css" />
	<link rel="stylesheet" href="_css_/styles_contenu_full.css" />
	<link rel="stylesheet" href="_css_/styles_contenu_titre.css" />
	<link rel="stylesheet" href="_css_/styles_contenu_para.css" />
	<link rel="stylesheet" href="_css_/styles_footer.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="_js_/site.js"></script>
</head>

<body dir="auto">

<!-- Entête -->
		<?php include("__soronta__/_lowla_/header.php"); ?>

<!-- Cette partie contient le contenu de la page -->
		<div dir="ltr" class="contenu" class="ombre">

			<!-- Titre -->
			<?php include("__soronta__/_lowla_/contenu_titre_main.php"); ?>
			
			<!-- Paragraphe texte -->
				<div id="paraTitre" class="rectangle ombre">
					<h1 class="rectangle">Bienvenue à l'école de Fasso!</h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					<p style="text-align:center;">
						Vous êtes dans l’école de Fasso, 
						à travers N’ko vous allez apprendre beaucoup de chose ici.
					</p>
					<p>Par exemple</p>

					<ul id="listDmalon">
						<li> <a href="//localhost/karanta/nko/index.php">N'ko</a> 
							<p class="def">(Avez-vous vu l’écriture N’ko au paravent, oui ou non. 
								Si non soyez la bienvenue dans la découverte et l’apprentissage de N’ko. 
								Cette partie vous expliquera dans tout son détail l’écriture N’ko. 
								Tous les niveaux seront abordés depuis l’alphabet jusqu’à l’orthographe.)</p>
						</li>
						<li> <a href="//localhost/karanta/computer/index.php">Informatique</a> 
							<p class="def">(Vous avez probablement un ordinateur, 
								mais vous ne savez pas l’utiliser comme il le faut ; la section informatique 
								vous permettra d’avoir les bases fondamentales en informatique.)</p>
						</li>
						<li> <a href="//localhost/karanta/game/index.php">Jeux</a> 
							<p class="def">(Actuellement, les jeux informatiques sont très rependus, 
								il y a certaines personnes qui passent beaucoup de temps derniers les appareils pour 
								ces jeux. Nous allons mettre à la disposition de la nation mandingue 
						nos jeux mandingues très éducatifs pour permettre un rapprochement à nous même.)</p>
						</li>
						<li> <a href="//localhost/karanta/culutre/index.php">Culture</a> 
							<p class="def">(La riche culture mandingue sera expliquée dans cette partie. 
								Cette culture étant très vague, vous allez vous-même nous apporter 
								certains éléments de celle-ci pour un accès libre à tous. 
								Vous allez faire cela en LISANT et en ECRIVANT.
								Vous allez comme ça approfondir vos connaissances en LECTURE et à ECRITURE 
								en N’ko de manière rapide et efficace.</p>
						</li>
					</ul>
					<p class="contact_us">
						Si vous avez une question sur ces sections, contacter l’administrateur de fasso.
					</p>
					<p class="souhait">Good reading !</p>
				</section>
			</div>
		</div>
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
</body>
</html>