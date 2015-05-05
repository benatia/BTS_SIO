<?php
   include"header.php";

?>

    <div class="inscri">
        <h1>Pas encore inscris ?</h1>
        <h2>Inscrivez vous maintenant ! </h2>
        <a href="inscription.php">Cliquez ici !</a>
    </div>
    <div class="connexion">
        <form method="post" action="connexion.php">
		 
            <h1>Connectez-vous :</h1>
			<?php connexion();?><br/><br/>
            <input type="text" name="pseudo" placeholder="Pseudo" style="float:right; margin-right:6%;"><br/>
            <input type="password" name="mdp" placeholder="Mots de passe" style="float:right; margin-right:6%; margin-top:2%"><br/>
            <br/>
            <input type="submit" value="Valider" name="valider" style="float:right;">
           
        </form>
    </div>

