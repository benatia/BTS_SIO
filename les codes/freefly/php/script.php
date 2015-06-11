<?php

$idconn=mysqli_connect('localhost','root','');//paramètres de connexion
mysqli_select_db($idconn,"freefly"); //connexion à la base

/*$idconn=mysqli_connect('mysql.hostinger.fr','u586532370_ben','1478963a');//paramètres de connexion
mysqli_select_db($idconn,'u586532370_free'); //connexion à la base
*/

function inscription(){			  //fonction de l'inscription 
	GLOBAL $idconn;         	  //rendre le variable globale 
	if(isset($_POST['confirmer'])){     //si on appuie envoyer
		$nom=$_POST['nom'];              //les variables 
		$prenom=$_POST['prenom'];
	    $adresseMail=$_POST['email'];
		$pseudo=$_POST['pseudo'];
		$mdp=$_POST['mdp'];
		$cmdp=$_POST['cmdp'];
		if($nom&&$prenom&&$adresseMail&&$pseudo&&$mdp&&$cmdp){  //si tous ces champs sont remplis
			if($mdp==$cmdp){    
				$mdp=md5($mdp);
				
				$reg=mysqli_query($idconn,"SELECT * FROM utilisateur WHERE uti_pseudo='$pseudo'");  // executer la requète
				$rows=mysqli_num_rows($reg);
				if($rows==0){
						mysqli_query($idconn, "INSERT INTO utilisateur VALUES ('','$nom','$prenom','$adresseMail','$pseudo','$mdp','1')");
						print('<span class="sucess">Bienvenue, '.$pseudo.', Vous êtes bien inscrit merci de votre confiance   
						<a href="connexion.php">Connectez vous</a></span>');
				}else print("<span class='error'>".$pseudo. "  est déja utilisé merci de le modifier </span>");
			}else print("<span class='error'>Les deux mots de passe doivent être identiques </span>");
		}else print("<span class='error'>Veuillez remplir les champs avec * s'il vous plait</span>");
	}
}



function connexion(){   //fonction de connexion
	GLOBAL $idconn;
	if (isset($_POST['valider'])){
		$pseudo=$_POST['pseudo'];
		$mdp=$_POST['mdp'];
		$mdp=md5($mdp);
		if($pseudo&&$mdp){
			$reg=mysqli_query($idconn, "SELECT * FROM utilisateur WHERE uti_pseudo='$pseudo'and uti_mdp='$mdp'");
			$rows=mysqli_num_rows($reg);
			if($rows==1){
				$_SESSION['pseudo']=$pseudo;
				header("location:fichiers.php");
			}else echo("<span class='error'>Pseudo ou passeword incorrects</span>");
		}else print("<span class='error'>Veillez saisir tous les champs merci</span>");
    }
}

function session(){
			session_start();
            if(isset($_SESSION['pseudo'])){
				'<div id="pseudo" style="float:right">'.print('Bienvenue  '.$_SESSION['pseudo'].'<a href="logout.php">
				<img src="img/deconn.png" style="width:20px;height:15px;" /></a>').'</div>';	//deconnexion
			}  
}					


function finSession(){
		$_SESSION['pseudo'];
		
		session_destroy();
		header("location:index.php");
} 



function reaction(){
		if(isset($_SESSION['pseudo'])){ 
				echo('<li><a href="index.php">Accueil</a></li>
                  <li><a href="telechargement.php">Téléchargement</a></li>
                 <li><a href="fichiers.php">Mes fichiers</a></li>
				<li><a href="partage.php">Partager</a></li>  				 
                 <li><a href="abonnement.php">Abonnement</a></li>
                 <li><a href="contact.php">Contact</a></li>
				 <li><a href="logout.php">Déconnexion</a></li>
				 ');
		}else
				echo('<li><a href="index.php">Accueil</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="telechargement.php">Téléchargement</a></li>
                <li><a href="partage.php">Partager</a></li>  
                <li><a href="abonnement.php">Abonnement</a></li>
                 <li><a href="connexion.php">Connexion</a></li>
                 <li><a href="contact.php">Contact</a></li>
				  ');
}


function enregistrer(){
	GLOBAL $idconn;
	$pseudo=$_SESSION['pseudo'];
	$sql=mysqli_query($idconn,"select sum(fic_taille)from fichier inner join utilisateur
    on fic_iduti=uti_id	where uti_pseudo='$pseudo'");
    $memoire_u=mysqli_fetch_array($sql);
	$res1=$memoire_u['sum(fic_taille)'];
	$sql2=mysqli_query($idconn," select abo_memoire from abonnement inner join utilisateur on
	abo_id=uti_idabo where uti_pseudo='$pseudo'");
	$memoire_g=mysqli_fetch_array($sql2);
	$res2=$memoire_g['abo_memoire'];
	if(isset($_POST['valid'])){
		
		if(isset($_FILES['fichier'])&&!empty($_FILES['fichier']['size'])){
			if(isset($_POST['titre'])&&!empty($_POST['titre'])){
					$nom=$_FILES['fichier']['name'];
					$titre=$_POST['titre'];
					$taille=$_FILES['fichier']['size'];
					$tmp_name=$_FILES['fichier']['tmp_name'];
					$file_dest='telecharger/'.$nom;
					if($taille+$res1>$res2){
						echo'<p style="color:red;font-size: 20px;">Votre espace mémoire  est insuffusant
								</p>';
							
					}else{
						
						$sqlquery=mysqli_query($idconn,"select fic_nom from fichier INNER JOIN utilisateur ON 
						fic_iduti=uti_id where uti_pseudo='$pseudo' and fic_nom='$nom'");
						$rows=mysqli_num_rows($sqlquery);
							if($rows==1){
								echo'<p style="color:red;font-size: 20px;">ce fichier est déja existé
									  </p>';
								
							}else{
								$query=mysqli_query($idconn,"INSERT INTO fichier VALUES
											('','$nom','$titre',null,'$taille','0',(select uti_id from 
											utilisateur WHERE uti_pseudo='$pseudo'))");
								if(move_uploaded_file($_FILES['fichier']['tmp_name'],$file_dest)){
									
								
								
									?>
									<script> alert("Votre fichier a été bien envoyé");</script>
									<?php
									
								}else
									 echo("<p style='color:red';>une echec pendant 
								 le téléchargement;réessayer  s.v.p</p>");
							}
					}
			}else 
				echo("<p style='color:red';>Veuillez donner un titre , s'il vous plait</p>");
                				
		}else
			echo("<p style='color:red';>Veuillez selectionner un fichier s'il vous plait</p>");
	}
	
	
}

function afficher(){
			GLOBAL $idconn;
			$pseudo=$_SESSION['pseudo'];
			$sqlquery="select * 
						from fichier INNER JOIN utilisateur ON fic_iduti=uti_id 
						where uti_pseudo='$pseudo'" ;
			
						
			$SQLResult = mysqli_query($idconn, $sqlquery);
			$ligne='<table >
					<tr >
						<td >Fichier</td>
						<td>taille(Ko)</td>
						<td>Format</td>
						<td>Télécharger</td></br>
						<td>supprimer</td>
						<td>partager</td>
					</tr>';
					while ($SQLRow = mysqli_fetch_array($SQLResult)) {
						$extentions=array("png","jpeg","gif","jpg","PNG","JPEG","GIF","JPG");
						$extentionsp=array("PDF","pdf");
						$extention=pathinfo($SQLRow['fic_nom'], PATHINFO_EXTENSION);
						
						if(in_array($extention,$extentions)){
							$image='telecharger/'.$SQLRow['fic_nom'];
						}elseif(in_array($extention,$extentionsp)){
							$image="img/lpdf.jpg";
						}else 
							$image="img/fichierA.png";
						
						$ligne.='<tr>
							<td style="text-align:left;"><img src="'.$image.'
							"style="width:30px;height:30px;margin-right:10px">'
							.$SQLRow['fic_nomlo']."</td>
							<td >".round((($SQLRow['fic_taille'])/'1024'),'2').'</td>
							<td>'.$extention.'</td>
							<td ><a href="telecharger.php?fic_id='. $SQLRow['fic_id'].'"><img src="img/telecharger.png"></a></td>
							<td><a href="supprimer.php?fic_id='. $SQLRow['fic_id'].'"><img src="img/suprimer.png"></td>
							<td><a href="partager.php?fic_id='. $SQLRow['fic_id'].'">
							<img src="img/art3.png" style="width:20px;height:20px;"></td>
						</tr>';
						}
		$ligne.='</table>';
		print($ligne);
		echo'<br/><br/><br/>';
		
		//calcule de la mémoire utlisée
		           $sql=mysqli_query($idconn,"select sum(fic_taille)from fichier inner join utilisateur
                   on fic_iduti=uti_id	where uti_pseudo='$pseudo'");
				   $memoire_u=mysqli_fetch_array($sql);
	               $res1=$memoire_u['sum(fic_taille)'];
				   $sql2=mysqli_query($idconn," select abo_memoire from abonnement inner join utilisateur on
					abo_id=uti_idabo where uti_pseudo='$pseudo'");
					$memoire_g=mysqli_fetch_array($sql2);
					$res2=$memoire_g['abo_memoire'];
					$rest=($res2-$res1)/1024;
					
					$rest=round(($rest),'2');
		print('<p style="color:green;font-size: 25px;">Votre espace mémoire  libre en Ko  :
              '.$rest.'</p>');
								 
		mysqli_close($idconn);
}


function supprimer(){
		GLOBAL $idconn;
		if(isset($_GET['fic_id'])){
			$id=$_GET['fic_id'];
			/////////////
			   $sql1=mysqli_query($idconn,"select fic_nom FROM fichier WHERE fic_id='$id'"); 
			   $data=mysqli_fetch_array($sql1);
				$nom=$data['fic_nom'];
				@unlink('telecharger/'.$nom);
			
			/////////////
			$sql=mysqli_query($idconn,"delete FROM fichier WHERE fic_id='$id'"); 
				if($sql==true){  ?>
				      <script> alert("Votre fichier a été bien supprimé");</script>
					  
				      <?php 
					   header("location:fichiers.php");
				}else  ?>
				    <script> alert("Une erreur s'est produit pendant la supprission");</script>
			<?php	  
		}
}


function telecharger(){
	GLOBAL $idconn;
	if(isset($_GET['fic_id'])){
		$id=$_GET['fic_id'];
		$sql=mysqli_query($idconn,"SELECT fic_nom FROM fichier WHERE fic_id='$id'"); 
		$rows=mysqli_num_rows($sql);
		if($rows==true){
				$row=mysqli_fetch_assoc($sql);
				header ("Content-description:File Transfer");
				header ("Content-type:application/octet-stream");
				header("Content-Disposition:attachement;filename=".$row['fic_nom']);
				header ("Content-length".filesize("FICHIER/".$row['fic_nom']));
				ob_clean();
				readfile("telecharger/".$row['fic_nom']);
		
		}else 
			echo "ce fichier n 'existe pas";
	}
}

function partaged(){
		GLOBAL $idconn;
		$pseudo=$_SESSION['pseudo'];
	
		if(isset($_GET['fic_id'])){
			$id=$_GET['fic_id'];
			$sql=mysqli_query($idconn,"update fichier set fic_partage='1' where fic_id='$id'");
			$rows=mysqli_num_rows($sql);
			header("location:fichiers.php");
		}
}


function dossierp(){
	GLOBAL $idconn;
	$req1="";            //chercher
	if(isset($_POST['chercher'])){
		if(isset($_POST['motCle'])){
			$motCle='%'.$_POST['motCle'].'%';
			if($_POST['rechercher']=="1"){        //chercher par nom d'utilisateur
			$req1="SELECT * FROM fichier INNER JOIN utilisateur ON fic_iduti=uti_id 
			WHERE fic_partage='1' and uti_pseudo like '$motCle'";
			}
			if($_POST['rechercher']=="2"){     //chercher par nom de fichier
			$req1="SELECT * FROM fichier INNER JOIN utilisateur ON fic_iduti=uti_id 
			WHERE fic_partage='1' and fic_nomlo like '$motCle'";
			}
		}
	}else
		$req1="SELECT * FROM fichier INNER JOIN utilisateur ON fic_iduti=uti_id 
			WHERE fic_partage='1'";
		
	
	
	$sql1=mysqli_query($idconn,$req1);
	$ligne='<table >
		<tr>
			<td>Fichier</td>
			<td>Taille(Ko)</td>
			<td>Format</td>
			<td>Télécharger</td>
			<td>Propriétaire</td>
		</tr><tr><td colspan="5"></td></tr>';
		
				while($fic_par=mysqli_fetch_array($sql1)){
					$extentions=array("png","jpeg","gif","jpg","PNG","JPEG","GIF","JPG");
					$extentionsp=array("PDF","pdf");
					$extention=pathinfo($fic_par['fic_nom'], PATHINFO_EXTENSION);
					
					if(in_array($extention,$extentions)){
						$image='telecharger/'.$fic_par['fic_nom'];
					}elseif(in_array($extention,$extentionsp)){
									$image="img/lpdf.jpg";
					}else
						$image="img/fichierA.png";
					$ligne.='<tr>
						<td style="text-align:left;"><img src="'.$image.'
						"style="width:30px;height:30px;margin-right:10px">'
							.$fic_par['fic_nomlo']."</td>
						<td>".round((($fic_par['fic_taille'])/'1024'),'2').'</td>
						<td>'.$extention.'</td>
						<td><a href="telecharger.php?fic_id='.$fic_par['fic_id'].'"><img 
						src="img/telecharger.png"></a></td>
						<td>'.$fic_par['uti_pseudo'].'</td>
					</tr>';
					}
	$ligne.='</table>';
	print($ligne);
mysqli_close($idconn);
}	



function abonnement(){
	GLOBAL $idconn;
	
	if(isset($_POST['abonner'])){
		if(isset($_SESSION['pseudo'])){
			$pseudo=$_SESSION['pseudo'];
			$choix=$_POST['abonnement'];
			if(isset($choix)){
				$sql=mysqli_query( $idconn,"update utilisateur set uti_idabo='$choix' where uti_pseudo='$pseudo'");
				?>
				<script>alert("Votre abonnement a été modifié,merci")</script>
				<?php
				}
		}else{
			echo'<p  class="ca-menu" style="color:red;font-size: 20px;">Veuillez<a href="connexion.php">Connecter
			</a>pour faire ce choix<br/>
			Pas encore membre<a href="inscription.php">rejoignez nous</a>
                        </p>';
			
		}
	}
	
//mysqli_close($idconn);	
}

function genererAbonnement(){
	GLOBAL $idconn;
	$sql=mysqli_query($idconn,"SELECT * FROM abonnement");
	while($data=mysqli_fetch_array($sql)){
		echo("<option value=".$data['abo_id'].">".$data['abo_libelle']."</option>");
		
	   }
	
	
mysqli_close($idconn);	
        
}

?>
















