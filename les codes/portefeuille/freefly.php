<?php

include "header.php";

?>
        <form method="post" action="freefly.php">
		<button type="submit" name="telecharger" style="margin-left:70%;position:fixed;bottom:30px;">
			<img src="image/pdf.png" style="height:40px;width:40px;"/>
		</button>
		</form>	


<?php
ob_start();
?>



		
			
			<h1>FREEFLY</h1>

			    <h2>Contexte de travail</h2> 
					<p>Dans le cadre de notre formation BTS ,on a travaillé sur un projet "FREEFLY",
					c est un projet a pour but de créer 
					une application qui permet de stocker des fichiers en ligne ,de les partager ,
					de les télécharger,de les supprimer.
					.</p>

			    <h2>Période:</h2> 
					<p>2 ème année.</p>
			<h2>Technologies utilisée:</h2>
				<p>Html5/css3</p>
				<p>Php</p>
				<p>Javascript</p>
				<p>Mysqlworkbench</p>
				<p>Git</p>
				
			<h2>Difficultés :</h2>
				<p>Récuperer et enregistrer un fichier dans la base de données </p>
				<p>Possibilité de telecharger  le fichier par l'utilisateur</p>
				<p>Gestion les sessions et la déconnexion </p>
				<p>Gestion les sessions et les menus du site </p>
				
				
			<h2>Sources</h2>
				<p>https://www.youtube.com/watch?v=-M1Q-3GVIhI</p>
				<p>http://www.w3schools.com/js/js_popup.asp</p>
				<p>http://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql</p>
				<p>https://www.youtube.com/watch?v=-M1Q-3GVIhI</p>

			<h2>Activité du référentiel mis en œuvre:</h2>

				 
			<h3>A1.1.1 Analyse du cahier des charges d’un service à produire</h3>
				  <p>Après l'analyse de cahier des charges (document joint) que notre professeur nous a 
				  fourni au début de l'année on a identifié les
				  fonctionnalités attendus pour un administrateur du site et pour un  client aussi.</p>
			<h2><a href="documents/freefly/CDC_FreeFly_Web.pdf">Cahier des charges</a></h2>
				<h4>Compétences mises en œuvre</h4> 
					<h5>C1.1.1.2 Identifier les fonctionnalités attendues du 
					service à produire</h5>
			<h3>A1.1.3 Étude des exigences liées à la qualité attendue d’un service</h3>
				<p>Au niveau du code il doit être propre indenté et commenté.
				 Au niveau de la sécurité ,pour accéder à ses ressources un utilisateur doit s'identifier et
				 s’authentifier.
				 Au niveau des technologies à utiliser Le site doit être développé en langage Web 
				(HTML/CSS/JavaScript/PHP) et la base de données
				 doit être implémentée sous MySQL. </p>
				<h4>Compétences mises en œuvre</h4>  
					<h5>C1.1.3.1 Recenser et caractériser les exigences liées à la qualité attendue du service
					à produire </h5>
					<h5>C1.1.3.2 Recenser et caractériser les exigences de sécurité pour le service à produire
					</h5>
			<h3>A1.2.4 Détermination des tests nécessaires à 
						la validation d’un service</h3>
				 <p>		 
			   j'ai testé mon code sur mes machines à chaque fois que j'ajoutais une 
			   fonctionnalité du service pour contrôler le bon fonctionnement  de celui ci . </p>
				<h4>Compétences mises en œuvre</h4>    
					<h5>C1.2.4.1 Recenser les tests d’acceptation nécessaires à la validation du
					service et les résultats attendus </h5>
				<h3>A1.2.5 Définition des niveaux d’habilitation associés à un service </h3>
					<p>J'ai créé un diagramme de cas d'utilisation (document joint),pour déterminer les 
					acteurs et leurs droits. </p>
					<h2><a href="documents/freefly/DiagrammedecasdutilisationFR.png">diagramme de cas d'utilisation</a></h2>
				   <h4>Compétences mises en œuvre</h4> 
				   <h5>C1.2.5.1 Recenser les utilisateurs du service, leurs rôles et leur niveau de 
				   responsabilité</h5>
			<h3>A1.3.1 Test d’intégration et d’acceptation d’un service</h3>
				 <p>J'ai mit en place un environnement de développement :serveur virtuel et des
				 et mes machines pour tester le service . </p>
				<h4>Compétences mises en œuvre</h4> 
					<h5>C1.3.1.1 Mettre en place l’environnement de test du service</h5> 
					<h5>C1.3.1.2 Tester le service</h5>
			<h3>A1.4.1 Participation à un projet</h3>
			   <p>On a travaillé ce projet ,pour gérer l'organisation et l'évolution du travail on 
			   a utilisé GIT ,ce logiciel nous a  offert  de nombreux avantages, 
			   comme la conservation d’un historique de chaque modification des fichiers.<br/>  
			   Le lien<a href="https://github.com/benatia/Freefly">organisation de travail en groupe</a></p> 
			 <h4>compétences mises en œuvre </h4>
				 <h5>C1.4.1.1 Établir son planning personnel en fonction des exigences et
				 du déroulement du projet</h5>
			<h3>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative</h3>
				   <p> J'ai réalisé la maquette de l'application avec le logiciel Balsamiq Mockups
				   (Document jointe )  <h2><a href="documents/freefly/maquette.png">maquette</a></h2></p>

			<h3>A4.1.3 Conception ou adaptation d'une base de données</h3>
				
				   <p>J'ai modélisé la base de données en utilisant le logiciel Power AMC  </p>
				   <h2><a href="documents/freefly/Mcd.png">Mcd</a></h2>
				  <h4>Compétences mises en œuvre</h4> 
						<h5>C4.1.3.1 Modéliser le schéma de données nécessaire à la mise en place de
						la solution applicative</h5>
						<h5>C4.1.3.4 Manipuler les données liées à la solution applicative à travers
						un langage de requête</h5>
			<h3>A4.1.6 Gestion d’environnements de développement et de test</h3>
					<p>J'avais un serveur virtuel pour tester mon code . </p>
				   <h4>Compétences mises en œuvre</h4>
				   <h5>C4.1.6.1 Mettre en place et exploiter un environnement de développement</h5>
			<h3>A4.1.7 Développement, utilisation ou adaptation de composants logiciels</h3>
				   <p>J'ai réalisé un code avec PHP pour vérifier , pendant  l'inscription ou la connexion
				   d'un utilisateur les informations entrées par celui ci 
				  (si le champs est vide ,si le pseudo est déjà utilisé...) </p>
				  <h4>Compétences mises en œuvre</h4>
				   <h5>C4.1.7.5 Mettre en place des éléments de sécurité liés à l’utilisation d’un composant
				   logiciel</h5>
			<h3>A4.1.8 Réalisation des tests nécessaires à la validation d’éléments adaptés ou développés</h3>
					  <p>je testais l'application à chaque que j'ajoutais une nouvelle fonctionnalité. </p>

			<h3>4.1.9 Rédaction d’une documentation technique</h3>
				 <p>Document technique ci joint expliquant le contenu du site  </p>
				 <h2><a href="documents/freefly/document_tech.pdf">document technique</a></h2>
				<h4>Compétences mises en œuvre</h4>
				<h5>C4.1.9.1 Produire ou mettre à jour la documentation technique d’une solution applicative 
				et de ses composants logiciels</h5> 
				
						
					
					
<?php
if (isset($_POST['telecharger'])){
$content=ob_get_clean();
require("html2pdf/html2pdf.class.php");
try{
$pdf=new HTML2PDF('P','A4','fr');
$pdf->writeHTML($content);
ob_end_clean();
$pdf->Output('freefly.pdf','D');


}catch (HTML2PDF_exception $e){
	die($e);

}
}

include "footer.php";
?>	