<?php
$idconn=mysqli_connect('localhost','root','');
mysqli_select_db($idconn, 'portefolio');

/*$idconn=mysqli_connect('mysql.hostinger.fr','u293768850_ben','1478963a');
mysqli_select_db($idconn, 'u293768850_folio');  */


function connexion(){
	GLOBAL $idconn;
	if (isset($_POST['submit'])){
		$login=$_POST['pseudo'];
		$pass=$_POST['mdp'];
		if($login&&$pass){
				$reg=mysqli_query($idconn, "SELECT * FROM UTILISATEUR WHERE pseudo='$login' and mdp='$pass'");
				$result=mysqli_fetch_array($reg);
				if(mysqli_num_rows($reg)==1) {
					$_SESSION['pseudo']=$login;
					header("location:remarque.php");
				
				}else 
					echo("<div class='errors'>Pseudo ou mot de passe incorrect  </div>");
		}else
			print("<div class='errors'>Veillez saisir tous les champs merci</div>");
}
}


function session(){
	if($_SESSION['pseudo']){
		print('<p style="margin:21px;color:white;font-size:21px;font-style:italic;text-shadow: 2px 2px 2px black;
				">Bienvenue   '.$_SESSION['pseudo'].'</p>');	
	}else 
		header("location:index.php");   //envoyer ver la page d'accueil*/
}

function reaction(){
	if(isset($_SESSION['pseudo'])){
		echo ('<li><a href="logout.php">Deconnexion</a></li>'); 
	}else
		echo('<li><a href="connexion.php">Connexion</a></li>');  
}


function finSession(){
	session_start();
	$_SESSION['pseudo'];
	session_destroy();
	header("location:index.php");
} 

function reaction1(){
	if(isset($_SESSION['pseudo'])){
		echo ('<a href="remarque.php"><img src="image/message.png" style="float:right;"/></a><br/>'); 
	}         
}


function portefolio(){		//permet l'affichage de tableau de synthèse 
	GLOBAL $idconn;
	$i=0;			//les variables
	$j=0;
	$reqprj="SELECT* FROM PROJET";          //les requettes   
	$resprj=mysqli_query($idconn,$reqprj);
	$reqacti="SELECT*FROM ACTIVITE " ;	
	$resacti = mysqli_query($idconn, $reqacti);
    //debut du tableau 
	$ligne='<table style="width:80%;">  
		<tr >
				<td style="border:0;"></td> ';     //premier ligne affichage des années 
				'<td colspan="2">1 ERE ANNEE</td>
				<td colspan="4">2 EME ANNEE</td>
		</tr>
		<tr>
						<td>Activites</td>';		//debut du 2eme ligne du tableau
	//affichage de tous les projets en seul ligne
		while($data = mysqli_fetch_array($resprj)){		//boucle qui envoit tous les projets
				$ligne.='<td>'.utf8_encode($data['libelle']).
				($i=$i+1);
				$ligne.='</td>';
			}
		$ligne.='</tr>';
	//affichage des activitées  dans le premier colonne de chaque ligne
		while($SQLRow = mysqli_fetch_array($resacti)){ //boucle qui envoit toutes les activités
			$ligne.='<tr>
			<td>'.utf8_encode($SQLRow['libelle']).($j=$j+1).
			'</td>';
			if (isset($_POST['remplir'])){  //affichage des autres colonnes avec des cases à cocher qui contien des competences
				for($k=1;$k<=$i;$k++){   //nombre des colonnes correspondant au nombres des projets
					$reqcomp="SELECT COMPETENCE.libelle,comp_id FROM COMPETENCE INNER
					JOIN ACTIVITE ON COMPETENCE.idactiv=ACTIVITE.activ_id
					where idactiv='$j'  group by COMPETENCE.libelle,comp_id ";
					$rescomp=mysqli_query($idconn,$reqcomp);
					$ligne.='<td class="td"><ul><form action="" method="post" class="formulaire">';
						while($comp=mysqli_fetch_array($rescomp)){
									$ligne.='<li><input type="checkbox" class="check" name="check" value="'.utf8_encode($comp['libelle']).'"/>' 
										.utf8_encode($comp['libelle']).'</li>';
												
								}
								//' 
								$ligne.='<div class="test"></div>
								<button type="submit" name="choisir" class="choisir">choisir</button>
									
							
						</form></ul>
					</td>';

										
										
				}
			}else{	//affichage de table avec les activités validés avec un coleur different
				for($k=1;$k<=$i;$k++){	//on peut visualiser les compétences utilisées si on survole les coses coloriés 
					$ligne.='<td class="td1" style="width:81px;position:relative;">
						<ul>
							<li >cvcvcvvvvvvvv vvvvvvvvvvv</li>
							<li>cvcvcvvvvvvv vvvvvvvvvvvv</li>
							<li>cvcvcvvvvvvv vvvvvvvvvvvv</li>
						</ul>
					</td>';
					}
				}					
			$ligne.='</tr>';
		}
						
						
			
		
	$ligne.='</table>';
	print($ligne);

mysqli_close($idconn);
}

function valider(){
	if(isset($_POST['choisir'])){
		$competence=$_POST['check'];
		while($competence){
			echo $competence;
		}
	}
}
	
	
	
	
	
	

 

 
 
?>


