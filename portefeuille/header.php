<?php
session_start();
include "php/script.php";
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="Auteur" content="Elachiri Benatia"/>
		<meta name="keywords" content="sio2,e6,btsSio,"/>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script type="text/javascript" src="java/jquery.js"></script>
		
		<!--link rel="shortcut icon" href="fonts/logo.png"-->
		<title>bts_sio</title>
</head>
<body>

<header>
	

	     <img id= "image1" src="image/sio.png"/>
		  <img id= "image2" src="image/imge2.jpg"/>
		<h1> PARCOURS DE PROFESSIONNALISATION <br/>SIO SLAM</h1>
		<h2>Epreuves E6(projets et actions)</h2>
		
		<div id="social">
			<!--<ul>
				<li><?php reaction1(); ?></li>
				<li><a href="#"><img src="image/Facebook.png" /></a><li>
				<
				<li><a href="#"><img src="image/google.png" /></a><li>
				<li><a href="#"><img src="image/rss.png"/></a><li>
			</ul> -->
		</div>
		<nav id="nav">
					<ul>
					     <li><a href="index.php">Accueil</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="mon_cv.php">mon CV</a></li>
						<?php reaction(); ?>
					
					</ul>
		</nav>
	</header>
	<div id="headerfooter">
		
	</div>
		
	
	<nav id="leftmenubar">
		<div id="listemenugauche">
		<h1>Projets</h1>
			<ul>
				<li><a href="ppe1.php">PPE</a></li>
				<li><a href="freefly.php">Freefly</a></li>
				<li><a href="projet2.php">Projet 2</a></li>
				<li><a href="epreuve6.php">Epreuve6</a></li>
			</ul>
		<h1>Actions</h1>
			<ul>
				<li><a href="stage1.php">Stage1</a></li>
				<li><a href="stage2.php">Stage2</a></li>
				<li><a href="#">plus>></a>
					<ul>
						<li><a href="#">inscription</a></li>
						<li><a href="#">connexion</a></li>
						<li><a href="#"></a></li>
						<li><a href="#">Epreuve6</a></li>
					</ul>
				</li>
			</ul>
	    <h1><a  href="portfolio.php">Tableau de synthèse<img src="image/ts.png" style="width:30px;"/></a></h1>
		</div>
    </nav>
	<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/benatia.elachiri" data-layout="button_count" 
data-action="like" data-show-faces="true" data-share="true"></div>


<div class="page">


<div class="section">
