<?php
$idconn=mysqli_connect('localhost','root','');
mysqli_select_db($idconn, 'portefolio');

    
	
               if(isset($_POST['check']) && !empty($_POST['check'])) {  
				    $check=$_POST['check'];
					echo "vous avez couché ";
				}else{ 
				    echo "remplir";
				     }
			
	?>