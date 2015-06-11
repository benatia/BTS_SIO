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
			<h2><a href="documents/attestation.pdf" style="color:white;">Attestation de stage</a></h2>

			<h2>Activité du référentiel mis en œuvre:</h2>

				<h3>A1.1.1 Analyse du cahier des charges d'un service à produire</h3>
					<h4>Compétence mise en œuvre</h4>
					<h5>C1.1.1.2 Identifier les fonctionnalités attendues du service à produire</h5>
					<p>Les demandes de l'entrepreneur sont la création d'un site web pour objectif principal  :
					+faire la publicité pour le boutique
					+faire la publicité de la vente en ligne ce que l'entrepreneur a fait par des boutiques Ebay
					+attirer plus d'utilisateurs  sur sa page Facebook
					+récupérer des photos de Facebook pour les réutiliser dans le site 
					<a href="documents/Cahier_ch.odt">Cahier des charges</a></p>
				<h3>A1.1.3 Étude des exigences liées à la qualité attendue d’un service</h3>
					<h4>Compétence mise en œuvre</h4>
					<h5>C1.1.3.1 Recenser et caractériser les exigences liées à 
					la qualité attendue du service à produire</h5>
					<p>Les exigences : 
					+faire des pages simples. 
					+illustration des produits des services par des images significatives.
					+menu et sous menu indiquant les noms des jeux d'une manière précise pour faciliter la navigation et l'utilisation du site
					+arriver à inciter le client à visiter la boutique eBAY</p>
				<h3>A1.2.1 Élaboration et présentation d’un dossier de choix de solution technique</h3>
					<h4>Compétence mise en œuvre</h4>
					<h5>C1.2.1.1 Recenser et caractériser des solutions répondant au
					cahier des charges (adaptation d’une 
					solution existante ou réalisation d’une nouvelle)</h5><p>
					l'entrepreneur demande un site statique ,alors j' ai choisi d'utiliser Html et Css 
					qui répondent d' une manière satisfaisante au cahier des charges . </p>
				<h3>A1.2.2 Rédaction des spécifications techniques de la solution retenue
						(adaptation d’une solution existante ou réalisation d’une nouvelle solution)</h3>
						<h4>Compétence mise en œuvre</h4>
						<h5>C1.2.2.1 Recenser les composants nécessaires à la réalisation de la solution retenue</h5>
						<p>la réalisation de la solution retenue demande l'utilisation de Html et Css </p>
				<h3>A1.2.4 Détermination des tests nécessaires à la validation d’un service</h3>
					<h4>Compétence mise en oeuvre</h4>
					<h5>C1.2.4.1 Recenser les tests d’acceptation nécessaires à la validation du service et les résultats 
					attendus</h5>
					<p>Je testais mon code sur ma machine pour connaître et identifier les potentielles erreurs, quelles
					soient l'organisation des composants de la page . </p>
				<h3>A1.3.1 Test d’intégration et d’acceptation d’un service</h3>
					<h4>Compétence mise en œuvre</h4>
					<h5>C1.3.1.1 Mettre en place l’environnement de test du service</h5>
					<h5>C1.3.1.2 Tester le service</h5>
					<p>Je testais mon code sur ma machine pour connaître et identifier les potentielles erreurs, quelles
					soient l'organisation des composants de la page . 
					J’ai utilisé pour ça les navigateurs pour vérifier le bon fonctionnement de site .</p>
				<h3>A1.3.3 Accompagnement de la mise en place d’un nouveau service</h3>
					<h4>Compétence mise en oeuvre</h4>
					<h5>C1.3.3.2 Informer et former les utilisateurs</h5>
					<p>A la fin du stage, j'ai fait une présentation au patron de ce que j'avais fait durant les semaines
					précédentes en expliquant comment on peut échanger le prix ou la photo d un produit ou mettre un autre produit à sa place.
                <a href="documents/annexe1.pdf">Annexe1</a></p>
				<h3>A1.4.3 Gestion des ressources</h3> 
					<h4>Compétence mise en oeuvre</h4>
					<h5>C1.4.3.1 Recenser les ressources humaines, matérielles, logicielles et
					budgétaires nécessaires à l’exécution du projet et de ses tâches personnelles</h5>
					<h5>C1.4.3.2 Adapter son planning personnel en fonction des ressources disponibles</h5>
					<p>pour réaliser ce projet j'avais besoin d'un ordinateur ,navigateur ,éditeur de texte 
					,je met  en place une planning personnel qui me permet de finir mon projet à terme .
					<a href="documents/planning.pdf">Planning</a></p>
				<h3>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative</h3>
				<p><a href="documents/annexe2.jpeg">Maquette</a></p>

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

