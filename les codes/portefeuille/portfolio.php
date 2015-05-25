<?php

include "php/script.php";


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="Auteur" content="Elachiri Benatia"/>
		<meta name="keywords" content="sio2,e6,btsSio,"/>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<!--link rel="shortcut icon" href="fonts/logo.png"-->
		<script type="text/javascript" src="java/jquery.js"></script>
		<script type="text/javascript" src="java/script.js"></script>
		<script type="text/javascript" src="java/remplir.js"></script>
		<title>bts_sio</title>
	</head>
	<body>
		<nav id="navport">
					<ul>
					     <li><a href="index.php">Accueil</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="mon_cv.php">mon CV</a></li>
						<li><a href="connection.php">Connexion</a></li>
					</ul>
		</nav>
		
	
		<aside>
		   <form method="post" action="portfolio.php">
				<button type="submit" name="telecharger" style="float:right;bottom:0px;">
					<img src="image/pdf.png" style="height:40px;width:40px;"/>
				</button>
				<button type="submit" name="valider" style="float:right;bottom:0px;height:40px;">
					valider
				</button>
				<button type="submit" name="remplir" style="float:right;bottom:0px;height:40px;">
					ajouter
				</button>
				
				
				
		 </form>	




			<?php 
			ob_start(); ?>



		<p style="margin-left:20px;font-size:17px;font-weight: bold;">NOM ET PRENOM : EL ACHIRI BENATIA BTS SIO <br/>PARCOURS SLAM</p>


		
		
<?php 
			
			portefolio();
			
if (isset($_POST['telecharger'])){
$content=ob_get_clean();
require("html2pdf/html2pdf.class.php");
try{
$pdf=new HTML2PDF('P','A4','fr');
$pdf->writeHTML($content);
ob_end_clean();
$pdf->Output('tableau.pdf','D');


}catch (HTML2PDF_exception $e){
	die($e);

}
}
			

			?>
		
		</aside>

	</body>
</html> 