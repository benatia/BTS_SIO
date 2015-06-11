<?php

include "header.php";

?>
        <form method="post" action="projet2.php">
		<input type="image" name="envoyer" style="margin-left:70%;position:fixed;bottom:30px;
		height:65px;width:65px;" src="image/pdf.png" alt="ok"  />
		</form>	


<?php
ob_start();
?>

	
		
			
			<h1>HAPPYFREE</h1>
			
			<h2>Contextew</h2> 
           <p>Dans le cadre du PPE, l'équipe de FreeFly c'est posé l'idée : comment faire pour être 
		   plus performant dans notre activités ? Alors, nous avons soulevé la question des statistiques de performances
		   de nos offres d'abonnements  pour nous donner une idée plus précise et concrète de la part de marché
		   qu'il faut viser.</p>
		   
		   <h2>Objectif</h2><p>
              Pour cela nous avons effectué un logiciel de gestion et de statistique dédié à FreeFly qui rassemble des statisti
			  ques
			  d'abonnement des clients selon les choix d'abonnement proposé et la mémoire globale utilisée par 
			  les utilisateurs . Mais notre application ne s’arrête pas là, elle permet aussi 
			  la suppression de certains fichiers des utilisateurs , et permet en conclusion de supprimer
			  des utilisateurs si besoin .</p>
			<h2>Description technique</h2><p>
				Pour le matériels on a utilisé 
						5 ordinateurs 
						1 serveur(machine virtuelle)
				Pour le langages on a utilisé:Java 
				Pour la base de données :Mysql
				</p>
			<h2>Difficultés</h2><p>
			Faire un diagramme dans une application Java/Swing
			Méthodes de AbstractTableModel 	pour afficher les données</p>
			<h2>Sources</h2><p>

			http://www.renaudguezennec.eu/programmation,3-12.html
			http://openclassrooms.com/courses/apprenez-a-programmer-en-java/notre-premiere-fenetre
			 </p>
			<h2> Principale(s) activité(s) concernée(s) </h2>
<h3>A1.1.1 Analyse du cahier des charges d’un service à produire</h3>
 <p>Après l'analyse de cahier des charges (document joint) que notre professeur nous a fourni au début de l'année on 
 a identifié les fonctionnalités attendus pour un  administrateur .
 <a href="documents/HappyFree/CDC_FreeFly_app.pdf">cahier des charges</a></p>
 
    <h4>Compétences mises en œuvre </h4>
    <h5>C1.1.1.2 Identifier les fonctionnalités attendues du service à produire</h5>

<h3>A1.1.3 Étude des exigences liées à la qualité attendue d’un service</h3>
     <p>Au niveau du code il doit être propre indenté et commenté.
     Au niveau de la sécurité ,pour accéder à ses ressources un administrateur doit s'identifier et s’authentifier.
     Au niveau des technologies à utiliser Le site doit être développé en langage  java et la base de données doit être
	 implémentée sous MySQL.</p>
<h4>Compétence mise en œuvre</h4>  
<h5>C1.1.3.1 Recenser et caractériser les exigences liées à la qualité attendue du service à produire</h5> 
<h5>C1.1.3.2 Recenser et caractériser les exigences de sécurité pour le service à produire </h5>
<h3>A1.2.4 Détermination des tests nécessaires à la validation d’un service</h3>
<p>j'ai testé mon code sur mes machines à chaque fois que j'ajoutais une fonctionnalité du service pour contrôler 
le bon fonctionnement  de celui ci . </p> 
<h5>C1.2.4.1 Recenser les tests d’acceptation nécessaires à la validation du service et les résultats attendus </h5>
<h3>A1.2.5 Définition des niveaux d’habilitation associés à un service </h3>
<p>J'ai créé un diagramme de cas d'utilisation (document joint),pour déterminer les acteurs et leurs droits.
<a href="documents/HappyFree/casutilisation.png">diagramme de cas d'utilisation</a></p>

<h5>C1.2.5.1 Recenser les utilisateurs du service, leurs rôles et leur niveau de responsabilité</h5>
<h3>A1.3.1 Test d’intégration et d’acceptation d’un service</h3>
<p>j'ai mit en place un environnement de développement :serveur virtuel  et mes machines pour tester le service .</p>

<h5>C1.3.1.1 Mettre en place l’environnement de test du service </h5>
<h5>C1.3.1.2 Tester le service</h5>
<h3>A1.4.1 Participation à un projet<h3>
 <p>On a travaillé ce projet ,pour gérer l'organisation et l'évolution du travail on a utilisé dropbox 
 ce logiciel nous a  offert  de nombreux avantages, comme la conservation d’un historique de chaque modification, 
 des fichiers.  </p>

<h4>compétence mise en œuvre</h4> 
<h5>C1.4.1.1 Établir son planning personnel en fonction des exigences et du déroulement du projet </h5>
<h3>A4.1.2 Conception ou adaptation de l’interface utilisateur d’une solution applicative</h3>
<p>J'ai réalisé la maquette de l'application avec le logiciel Balsamiq Mockups(Document jointe )
<a href="documents/HappyFree/maquette .png">maquette</a></p>
<h5>C4.1.2.2 Maquetter un élément de la solution applicative</h5>
<h3>A4.1.3 Conception ou adaptation d'une base de données</h3>
   
    <p>J'ai modélisé la base de données en utilisant le logiciel Power AMC 
<a href="documents/HappyFree/Mcd.png">Mcd</a>
<a href="documents/HappyFree/requette.png">requette</a></p>
<h5>C4.1.3.1 Modéliser le schéma de données nécessaire à la mise en place de la solution applicative</h5>
<h5>C4.1.3.4 Manipuler les données liées à la solution applicative à travers un langage de requête</h5>


<h3>A4.1.6 Gestion d’environnements de développement et de test</h3>
       <p>j'ai testé mon programme à chaque fois pour voir le resultat.</p>
<h5>C4.1.6.1 Mettre en place et exploiter un environnement de développement</h5>
<h3>A4.1.7 Développement, utilisation ou adaptation de composants logiciels</h3>
     <p> J'ai réalisé un code avec Java pour vérifier , pendant   la connexion d'un adminstrateur 
	  les informations entrées par celui ci (si le champs est vide ,si le pseudo n 'est pas valide...)
	  </p>
 
<h5>C4.1.7.5 Mettre en place des éléments de sécurité liés à l’utilisation d’un composant logiciel</h5>
<h3>A4.1.8 Réalisation des tests nécessaires à la validation d’éléments 
adaptés ou développés</h3><p>
         je testais l'application à chaque que j'ajoutais une nouvelle fonctionnalité.</p>
<h5>C4.1.8.1 Élaborer et réaliser des tests unitaires</h5>

		
	
					
					
<?php
if (isset($_POST['submit'])){
$content=ob_get_clean();
require("html2pdf/html2pdf.class.php");
try{
$pdf=new HTML2PDF('P','A4','fr');
$pdf->writeHTML($content);
ob_end_clean();
$pdf->Output('projet2.pdf','D');


}catch (HTML2PDF_exception $e){
	die($e);

}
}


include "footer.php";
?>	