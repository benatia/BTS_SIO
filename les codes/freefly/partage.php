<?php

include "header.php";


?>


<div id="partage">
<h3>Partager ses connaissance </h3>
<br/><br/>


<form method="post" action="partage.php" >
    <input type="text" name='motCle' placeholder="mot clé">
	chercher par:
	 <select name="rechercher">
			<option value="1" />Utilisateur</option>
			<option value="2">Fichier</option>
	</select>
		
	<button type="submit" name="chercher" 
	><img src="img/chercher.png" style="width:30px;height:30px;"></button/>
	 <br/><br/>


		<?php dossierp();?>
</form>


</div>
