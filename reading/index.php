<?php
	
	
	include("../__soronta__/flo.php");
	$error = "";
	$succes = "";
	is_not_login();
	define("MAIN_PAGE", "reading_index");
?>

<!doctype html >
<html dir="auto">
<head>
	<meta charset="utf-8" />
	<title>Fasso | N'ko school</title>
	<?php include('../__soronta__/_lowla_/head_sm.php'); ?>
</head>

<body dir="auto">

<!-- Entête -->
	<?php include("../__soronta__/_lowla_/header.php"); ?>

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
					<h1 class="rectangle">Welcome !</h1>
				</div>
			<div id="paraTexte" class="rectangle ombre">
				<section id="intro">
					<p>
						You are in N'ko section on fasso.org, you can learn everythings in N'ko here. For example
					</p>

					<ul id="listDmalon">
						<li> <a href="dmalon/index.html">N'ko</a> 
							<p class="def">(This part explain n'ko, if you are never learn n'ko, it not bad because 
								I will help you to anderstand N'ko in small delay.)</p>
						</li>
						<li> <a href="dohko/index.html">Computer science</a> 
							<p class="def">(You are the comuter but you can't use this machine very well,
								you are welcome to learn the fundamentals about computer.)</p>
						</li>
						<li> <a href="junsa/index.html">Games</a> 
							<p class="def">(How many game do you know in Manden, if you don't know anyone, 
								this section will learn very much.)</p>
						</li>
						<li> <a href="keindeilon/index.html">Reading</a> 
							<p class="def">(After know the basic notion in N'ko, you must pratice to anderstand,
								in this section, you will be the excellent reader I hope.</p>
						</li>
					</ul>
					<p class="contact_us">
						If you are any question about anyone off these section, please contact fasso administrator.
					</p>
					<p class="souhait">Good reading !</p>
				</section>
			</div>

			<footer dir="auto" id="copyrigth" class="rondBas ombre">&copy; ߝߊ߬ߛߏ ߞߍߦߙߐ | ߞߟߊߓߎ ߣߌ߫ ߣߊ߲߬ߝߏ߬ߦߊ &copy;</footer>

		</div>

</body>
</html>