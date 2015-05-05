<?php

include "header.php";
?>

		<script type="text/javascript" src="java/script.js"></script>

                  <fieldset>
				      <legend>Postez un message</legend>
					  
						
						<?php 


						if(array_key_exists('errors',$_SESSION)): ?>
						<div class="errors">
						<?php echo (implode('<br/>',$_SESSION['errors']));?>
						</div>
						
						<?php unset($_SESSION['errors']);endif; 
						
						if(array_key_exists('sucess',$_SESSION)): ?>
						<div class="sucess">
						votre e-mail a été bien envoyé,merci
						</div>
						
						<?php unset($_SESSION['sucess']);endif; ?>
						
						
						
						
						<form method="post" action="post_contact2.php">
							<label for="nom">Nom :</label>
				            <input type="text" name="nom" id="nom" class="input" placeholder="Ex : Ben" size="25"  /><span class="erreur"></span><br/>
							      
		

		                   <label for="mail">Adresse mail :</label>
				           <input type="text" name="mail" id="mail" class="input" placeholder="Ex : exemple@exemple.com" size="25" />
				           
						   <span class="erreur"></span><br/>
							
							<label for="remarque">Poster un message? Merci</label>
							<textarea name="remarque" id="remarque" class="remarque" rows="5" cols="100" placeholder="Example"></textarea>
							     
								 <span class="erreur"></span><br/>
							
							<input class="envoi" type="submit" value="Envoyer" name="submit"/>
							<input class="envoi" type="reset" value="Annuler" name="reset" />
				
						
						</form>
	
                   </fieldset>





	


<?php
include "footer.php";
?>	