<?php

include "header.php";
?>

<div id="fichier">



	<form action="fichiers.php" method="post" enctype="multipart/form-data" id="choix">
				
				<br/>Choisir un fichier:<input type='file'  name='fichier' />
				<br/>Donner un titre:<input type='text' name='titre' />
				
				
				<br/>
                <input type="submit" name="valid" value="Ajouter" />
				
				<?php enregistrer();
				
				?>
				
	</form>	
			<?php 
				echo '<p  style="margin-left:100px;margin-top:50px;color:CornflowerBlue;">MES FICHIERS :</p>';
				afficher();
				?>
				
				
 
</div>
</body>
</html>



