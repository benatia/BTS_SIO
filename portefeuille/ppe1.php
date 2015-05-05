<?php

include "header.php";
?>
        <form method="post" action="ppe1.php">
		<button type="submit" name="telecharger" style="margin-left:70%;position:fixed;bottom:30px;">
			<img src="image/pdf.png" style="height:40px;width:40px;"/>
		</button>
		</form>	


<?php
ob_start();
?>
		
		
		
		
			<h1>PPE de la 1ère année </h1>

			<h2>Contexte de travail</h2> 
			<p>3S un Projet commun pour toute la classe ou chacun a une tâche à faire,c'un projet qui traite la gestion des salles  </p>
					

			<h2>Période:</h2> 
			<p>1ère année (2013/2014)</p>
					
			<h2>Technologies utilisée:</h2>
			<p>Html</p>
			<p>Css</p>
			<p>Php</p>
			<p>Git</p>
				
			<h2>Difficultés :</h2>
			<p>Apprendre à utiliser Php</p>
			<p>Apprendre à utiliser Git</p>
				
			<h2>Sources</h2>
					
				<p>www.php.net</p>
				<p>http://openclassrooms.com/</p>
				
			
			<h2>Activité du référentiel mis en œuvre:</h2>

				
				<h4>Compétence mis en oeuvre</h4>
					
	
	
	
			
			

					
					
<?php
if (isset($_POST['telecharger'])){

	$content=ob_get_clean();
	require("html2pdf/html2pdf.class.php");
	try{
		$pdf=new HTML2PDF('P','A4','fr');
		$pdf->writeHTML($content);
		ob_end_clean();
		$pdf->Output('ppe1.pdf','D');


	}catch (HTML2PDF_exception $e){
		die($e);
	}
}

		

include "footer.php";
?>	