<?php

include "header.php";
?>
        <form method="post" action="stage1.php">
		
		<button type="submit" name="telecharger" style="margin-left:70%;position:fixed;bottom:30px;">
			<img src="image/pdf.png" style="height:40px;width:40px;"/>
		</button>
		 </form>
		
	
		


<?php
ob_start();
?>

	
		
			
			<h1>Stage de la 1ère année </h1>
			<img src="image/stage1.jpg" style="height:200px;width:200px;float:right;position:relative;"/>

			    <h2>Contexte de travail</h2> 
					<p>création d'un site web pour un but principale de faire la publicité d'un boutique (Geek-Games)spécialisé de la vente du 
					jeux et de la dépannage informatique .</p>
					
			    <h2>Période:</h2> 
					<p>1 ére année bts </p>
			<h2>Contrat :</h2>
				<p> contrat de création de site internet pour Geek Games (Montcaret).</p>
			<h2>Technologies utilisée:</h2>
				<p>html5/css3</p>
			<h2>Difficultés :</h2>
				<p>Créer un menu déroulant</p>
			

			<h2>Activité du référentiel mis en œuvre:</h2>

				<h3>A1.1.1 Analyse du cahier des charges d'un service à produire </h3>
				<h4>Compétence mis en oeuvre</h4>
					<h5>C1.1.1.2 Identifier les fonctionnalités attendues du service à produire</h5>
					<h5>C1.1.3.1  Rédiger un compte-rendu d’entretien, de réunion </h5>
					<h5></h5>
					
				
				<h3>A1.1.3 Étude des exigences liées à la qualité attendue d’un service </h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5> C1.1.3.1 Recenser et caractériser les exigences liées à la qualité attendue du service à produire</h5>
				<h3>A1.2.1 Élaboration et présentation d’un dossier de choix de solution technique </h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5>  C1.2.1.1 Recenser et caractériser des solutions répondant au cahier des charges (adaptation d’une 
						solution existante ou réalisation d’une nouvelle)</h5>
						<h5>C1.2.1.2 Estimer le coût d’une solution</h5>
				<h3>A1.2.2 Rédaction des spécifications techniques de la solution retenue (adaptation d’une solution existante ou réalisation d’une 
				nouvelle solution) </h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5>  C1.2.2.1 Recenser les composants nécessaires à la réalisation de la solution retenue</h5>
						<h5>C1.2.2.2 Décrire l’implantation des différents composants de la solution et les échanges entre eux</h5>
				<h3>A1.2.4 Détermination des tests nécessaires à la validation d’un service </h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5> C1.2.4.1 Recenser les tests d’acceptation nécessaires à la validation du service et les résultats attendus </h5>
				<h3>A1.3.1 Test d’intégration et d’acceptation d’un service </h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5>  C1.3.1.1 Mettre en place l’environnement de test du service </h5>
						<h5> C1.3.1.2 Tester le service</h5>
				<h3>A1.3.3 Accompagnement de la mise en place d’un nouveau service</h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5> C1.3.3.2 Informer et former les utilisateurs </h5>
				<h3>A1.4.1 Participation à un projet</h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5> C1.4.1.1 Établir son planning personnel en fonction des exigences et du déroulement du projet</h5>
				<h3>A1.4.3 Gestion des ressources</h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5> C1.4.3.1 Recenser les ressources humaines, matérielles, logicielles et budgétaires nécessaires à 
						l’exécution du projet et de ses tâches personnelles</h5>
						<h5> C1.4.3.2 Adapter son planning personnel en fonction 
							des ressources disponibles </h5>
				<h3>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative</h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5>C4.1.2.2 Maquetter un élément de la solution applicative</h5>
						
				<h3>A4.1.6 Gestion d’environnements de développement et de test</h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5> C4.1.6.1 Mettre en place et exploiter un environnement de développement</h5>
						<h5> C4.1.6.2 Mettre en place et exploiter un environnement de test</h5>
				<h3></h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5></h5>
				<h3>A4.1.8 Réalisation des tests nécessaires à la validation d’éléments adaptés ou développés</h3>
					<h4>Compétence mis en oeuvre</h4>
						<h5>C4.1.8.1 Élaborer et réaliser des tests unitaires</h5>
				
			
			

	
	
<?php
if (isset($_POST['telecharger'])){
/*if (!empty($_POST)){*/
$content=ob_get_clean();
require("html2pdf/html2pdf.class.php");
try{
$pdf=new HTML2PDF('P','A4','fr');
$pdf->writeHTML($content);
ob_end_clean();
$pdf->Output('stage1.pdf','D');


}catch (HTML2PDF_exception $e){
	die($e);

}
}



include "footer.php";
?>	

