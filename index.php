<?php
	
	include("__soronta__/flo.php");
	$error = "";
	$succes = "";
	define("MAIN_PAGE", "main_index");
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso school</title>
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
					<h1 class="rectangle">Welcome !</h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					<p style="text-align:center;">
						You are in Fasso school, here you can learn everythings in N'ko. For example
					</p>

					<ul id="listDmalon">
						<li> <a href="//localhost/karanta/nko/index.php">N'ko</a> 
							<p class="def">(This part explain n'ko, if you are never learn n'ko, it is not bad because 
								I will help you to anderstand N'ko in small delay.)</p>
						</li>
						<li> <a href="//localhost/karanta/computer/index.php">Computer science</a> 
							<p class="def">(You have a comuter but you can't use it very well,
								you are welcome to learn the fundamentals about computer.)</p>
						</li>
						<li> <a href="//localhost/karanta/game/index.php">Games</a> 
							<p class="def">(How many game do you know in Manden, if you don't know anyone, 
								this section will learn very much.)</p>
						</li>
						<li> <a href="//localhost/karanta/culture/index.php">Reading</a> 
							<p class="def">(After know the basic notion in N'ko, you must pratice to anderstand,
								in this section, you will be the excellent reader I hope.</p>
						</li>
					</ul>
					<p class="contact_us">
						If you have any question about anyone of these section, please contact fasso administrator.
					</p>
					<p class="souhait">Good reading !</p>
				</section>
			</div>
		</div>
	<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>
</body>
</html>