<?php

include "header.php";

?>


 


 <?php session();
/*if(!empty($_POST)){
		extract($_POST);
		$valid=true;
		if(empty($mail)){
			$valid=false;
			$error_mail="vous n 'avez rempli votre email";
		}
		if(empty($remarque)){
			$valid=false;
			$error_remarque="votre message est vide !!";
		}
		
		
		if($valid){
			echo"c bien";
		}

	}*/

?>




                  <fieldset>
				      <legend>Vos remarques</legend>
					  
						
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
						
						
						
						
						<form method="post" action="post_contact.php">

		                   <label for="mail">Adresse mail :</label>
				            <input type="text" name="mail" id="mail" placeholder="Ex : exemple@exemple.com" size="30"  />
				           <span id="email_error">
							      
								<?php /*if(isset($error_mail)){echo $error_mail;} */?>
								  </span>
							
							<label for="remarque">Poster un commentaire? Merci</label>
							<textarea name="remarque" id="remarque" class="remarque" rows="5" cols="100" placeholder="Example"></textarea>
							     <span id="remarque_error">
							<?php /*if(isset($error_remarque)){echo $error_remarque;}*/ ?>
							   </span><br/>
							
							<input class="envoi" type="submit" value="Envoyer" name="submit"/>
							<input class="envoi" type="reset" value="Annuler" name="submit2" />
				
						
						</form>
	
                   </fieldset>
				   
				   
				   



	
<?php
unset($_SESSION['errors']);
unset($_SESSION['sucess']);
include "footer.php";
?>	