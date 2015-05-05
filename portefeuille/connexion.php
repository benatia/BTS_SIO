<?php

include "header.php";
?>




		<form method="post" action="connexion.php" class="connexion">
			<fieldset>
				<legend>Connexion</legend>
						<label for="pseudo">Identifiant  <input type="text" name="pseudo" id="pseudo" placeholder="Ex : Exemple" size="25" maxlength="10" /></label>
						<label for="mdp">Mot de passe<input type="password" name="mdp" id="mdp" size="25" placeholder="Exemple"/></label>
						<input class="envoi" type="submit" value="Connecter" name="submit" />
						<input class="envoi" type="reset" value="Annuler" name="submit2" /><br/><br/>
						<?php connexion(); ?>
						<br/>
						
						
						<a class="forgetmdp" style="float:right;color:#FF8406;" href="forget.php">mot de passe oublié ?</a>
						
						
						 
						 
					
			</fieldset>
		
		</form>
					
				


	


<?php
include "footer.php";
?>	