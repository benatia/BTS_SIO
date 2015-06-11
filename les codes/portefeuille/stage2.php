<?php

include "header.php";

?>
        <form method="post" action="stage2.php">
		
			<button type="submit" name="telecharger" style="margin-left:70%;position:fixed;bottom:30px;">
				<img src="image/pdf.png" style="height:40px;width:40px;"/>
			</button>
			
			
		</form>	


<?php
ob_start();
?>

	
		
			
			<h1>Stage de 2ème année </h1>
			

			    <h2>Contexte de travail</h2> 
				<p>Création d'un site web pour un but principale de faire la publicité,et la possiblité d'entrer en contact par émail avec les clients 
				pour une socièté spécialisée dans la tailles du pières ,la maçonnerie la rénovation ,et l'ornementation.</p>
					

			    <h2>Période:</h2> 
				<p>Du 05/01/2015 jusqu'au 20/02/2015 </p>
					
			<h2>Contrat :</h2>
			     <p>Contrat pour un stage</p>
				
			<h2>Technologies utilisée:</h2>
				<p>Html</p>
				<p>Css</p>
				<p>JQuery</p>
				<p>Php</p>
				<p>www.go2convert.com</p>
				<p>Gimp</p>
           <h2>Difficultés :</h2>
				<p>Utilisation de Jquery pour le 1 ère fois</p>
				<p>La Fonction mail de php</p>
				<p>Mettre le site en ligne</p>
				
				
					
			<h2>Sources</h2>
			
				<p>	http://devdocs.io/</p>
				<p>	http://jquery.com/</p>
				<p>http://php.net/</p>
				<p>http://openclassrooms.com/</p>
				<h2><a href="documents/stage2/attestation.pdf" style="color:white;">Attestation de stage</a></h2>

			<h2>Activité du référentiel mis en œuvre</h2>
				<h3>A1.1.1 Analyse du cahier des charges d’un service à produire</h3>
				<p>Les fonctionnalités attendues 
				  Pour la société paurra  
				+Consulter les messages reçus 
				+avoir une base de données des clients ou des prospects.
				Pour les clients pourront consulter:
				Un ensemble d'informations sur les travaux proposés et faites par la société.</p>
				<h2><a href="documents/stage2/cahier_ch.odt" >cahier des charges</a></h2>
				<h2><a href="documents/stage2/documentPA.pdf" >compte rendu</a></h2>

				<h4>Les  compétences mises en œuvre</h4>
				<h5> C1.1.1.2 Identifier les fonctionnalités attendues du service à produire</h5>
				 <h5>C1.1.1.3 Préparer sa participation à une réunion  Rédiger un compte-rendu
				 d’entretien, de réunion</h5>

				<h3>A1.1.3 Étude des exigences liées à la qualité attendue  d’un service</h3>
				 <p>  Au premier rendez vous ,le patron de la société a exigé que j'illustre 
				les réalisations faites par la société à travers des images significatives .</p>
				<h4>La  compétence mise en œuvre</h4>
				<h5>C1.1.3.1 Recenser et caractériser les exigences liées
				à la qualité attendue du service à produire</h5>

				<h3>A1.2.1 Élaboration et présentation d’un dossier de choix de solution technique</h3>
					<p>	Après l'étude des demandes de patron j'ai choisi  utilisé HTML CSS JQUERY PHH MYSQL comme solutions
						techniques qui peuvent répondre à ces demandes </p>
				<h4>La compétence mise en œuvre </h4> 
				<h5>C1.2.1.1 Recenser et caractériser des solutions répondant au cahier des charges (adaptation d’une solution 
				existante ou réalisation d’une nouvelle)</h5>

				<h3>A1.2.4 Détermination des tests nécessaires à la validation d’un service</h3><p>
				   Je testais mon code sur mes machines pour connaître et identifier les potentielles erreurs.</p>
				<h4>la compétence mise en œuvre</h4>
				<h5>C1.2.4.1 Recenser les tests d’acceptation nécessaires à la validation 
				du service et les résultats attendus</h5>


				<h3>A1.3.1 Test d’intégration et d’acceptation d’un service</h3><p>
				Je testais mon code sur ma machine pour connaître et identifier les potentielles erreurs. J’utilise pour 
				cela les navigateurs ,un serveur virtuel  pour vérifier le bon fonctionnement de site .</p>
				<h4>Les compétence mises en œuvre</h4>                              
				<h5>C1.3.1.1 Mettre en place l’environnement de test du service</h5>
				<h5>C1.3.1.2 Tester le service</h5 >
				<h3>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative</h3>
					<p>Au premier rendez-vous avec le patron ,il m'a expliqué  sa vision de l' interface du site 
					,et après j'ai fait une maquette avec le logiciel Balsamiq Mockups ce qui m'a permis  
					de préciser ses choix </p>
					<h2><a href="documents/stage2/maquette.pbg">Maquette</a></h2>
				<h4>Compétence mise en œuvre</h4> 
				<h5>C4.1.2.2 Maquetter un élément de la solution applicative</h5>
				<h3>A4.1.7 Développement, utilisation ou adaptation de composants logiciels</h4>
				<p>Pour vérifier et valider   les champs du formulaire de contact ,je mes en place une 
				 vérification par JQUERY et après une autre  par PHP</p>
				 <h2><a href="documents/stage2/verification.png">Fonction de vérification</a></h2>
				<h4>Les compétences mises en œuvre </h4>
				<h5>C4.1.7.1 Développer les éléments d’une solution</h5>
				<h5>C4.1.7.5 Mettre en place des éléments de sécurité liés à l’utilisation d’un composant logiciel</h5>
				 
				<h3>A4.1.8 Réalisation des tests nécessaires à la validation d’éléments adaptés ou développés</h3>
				<p>Je testais mon code PHP dans les pages de contact et l’administration  sur mes machines pour 
				connaître et identifier les potentielles erreurs</p>
				<h4>Compétence mise en œuvre</h4>
				<h5>C4.1.8.1 Élaborer et réaliser des tests unitaires</h5>
				
				
				
<?php
if (isset($_POST['telecharger'])){
$content=ob_get_clean();
require("html2pdf/html2pdf.class.php");
try{
$pdf=new HTML2PDF('P','A4','fr');
$pdf->writeHTML($content);
ob_end_clean();
$pdf->Output('stage2.pdf','D');


}catch (HTML2PDF_exception $e){
	die($e);

}
}



include "footer.php";
?>	