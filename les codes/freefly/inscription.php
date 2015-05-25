<?php
    include"header.php";
?>

<div class="inscription">
    <form method="post" action="">
<?php inscription();?><br/><br/>
        <input class="formu" type="text" name="prenom" size="30" placeholder="Prénom"/><br/>
<br/>
        <input class="formu" type="text" name="nom" size="30" placeholder="Nom"/><br/>
<br/>
        <input class="formu" type="text" name="pseudo" size="30" placeholder="Pseudo"/><br/>
<br/>
        <input class="formu" type="email" name="email" size="30" placeholder="Email"/><br/>
<br/>
        <input class="formu" type="password" name="mdp" size="30" placeholder="Mot de passe"/><br/>
<br/>
        <input class="formu" type="password" name="cmdp" size="30" placeholder="confirmation de mot de passe"/><br/>
        <br/>
        <input type="checkbox" name="conditions"  /> <label for="conditions">J'accepte les <a href="condition.php" style="color:DodgerBlue">conditions<br/> 
        d'utilisation de Freefly</a></label><br />
        <input type="submit" name="confirmer" value="confirmer" />
        <input type="submit" name="refuser"  value="refuser"/><br/>
        
    </form>
</div>

