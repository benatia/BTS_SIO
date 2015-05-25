 <?php
include"php/script2.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet"  href="style.css" type="text/css" />
		<meta charset="utf-8">
		<title>FreeFly - Accueil</title>
		
	</head>
	
	<body>
		
		<div id="bandeau" >
			<h2>FreeFly     <br />
			                     Transferer vos fichier sans problème !</h2>
				<p id="bienvenue1">
			<?php reaction(); ?>  </p>
		</div>
		
		<div id="logo">
				<img src="images/logo.png" alt="Logo" width="150px" height="80px" >
		</div>
		
		<div id="menu">
		<h2>Menu</h2>
			<ul>
				<?php  reaction2(); ?>
				
			</ul>
	</div>


		   
		   <article>
			<h2>FreeFly vous propose un service d'abonnement gratuit et payant! Decouvrez nos offres ci-dessous :</h2>
			<br />
			<h1 class="slgn">FreeFly : Gratuit</h1>
			<p>FreeFly Gratuit est l'offre de base que nous offrons a tout nos nouveaux membres.</p>
			<ul>
				<li>25Go offert</li>
				<li>Partage public et prive</li>
				<li>Synchronisation local/en ligne</li>
				<li>Importation des contacts (depuis votre compte Gmail)</li>
				<li>Historique anterieur</li>
			</ul>
			<br />
			<h1 class="slgn">FreeFly : premium</h1>
			<P>FreeFly Premium est une offre que nous vous soumetons pour jouir des differents avantages au compte Prenium</p> 
			<ul>
				<li>100Go offert</li>
				<li>Partage public et prive</li>
				<li>Synchronisation local/en ligne</li>
				<li>Importation des contacts (depuis votre compte Gmail)</li>
				<li>Historique anterieur</li>
			</ul>
			<br/>
			
			
		</article>
		

		
		<div id="piedpage">
			
			<p>
			Copyright : toute se qu'il faut savoir, vous le savez déjà. Pour résumer : plagier mon site et je vous poursuis !!!!
			</p>
			
		</div>
		
	</body>
</html>

		
