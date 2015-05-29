<?php
    include"header.php";
   
?>
<div class="content">

   <?php abonnement();?>
	<form action="abonnement.php" method="post" class="ca-menu">
	 <p class="grp">Choisir votre abonnement : </p>
	<select name="abonnement">
	    <?php genererAbonnement(); ?>	
	</select>
	
	<input type="submit" value="Confirmer" name="abonner"/>
	   
	
	</form>
    
		<ul class="ca-menu">
			
			<li>
				<a href="#" class="grp">
					<span class="ca-icon">I</span>
					<div class="ca-content">
						<h2 class="ca-main">Offre Gratuit :</h2>
						<h3 class="ca-sub">Profitez d'un espace de 5Go pour seulement rien du tout</h3>
					</div>
				</a>
			</li>
			
			
			<li> 
				<a href="#"  class="grp">
					<span class="ca-icon">C</span>
					<div class="ca-content">
						<h2 class="ca-main">Offre Pemium :</h2>
						<h3 class="ca-sub">Une offre pour particulier qui aurais beaucoup de choses à stocker !</h3>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#"  class="grp">
					<span class="ca-icon">A</span>
					<div class="ca-content">
						<h2 class="ca-main">Offre Pro :</h2>
						<h3 class="ca-sub">Et même les professionnels peuvent en profiter aussi </h3>
					</div>
				</a>
			</li>
			
		</ul>
	

</div><!-- content -->
</body>
</html>

