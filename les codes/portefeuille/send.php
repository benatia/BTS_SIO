<?php

    
GLOBAL $idconn;


	if ((isset($_POST['check']))&&!empty($_POST['check'])){
		$check=$_POST['check'];
		
        mysqli_query($idconn,"INSERT INTO VALIDER VALUES ('4','40')");
		echo 'couou';
		
	}

	 
?>