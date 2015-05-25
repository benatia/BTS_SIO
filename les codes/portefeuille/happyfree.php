<?php

include "header.php";

?>
        <form method="post" action="projet2.php">
		<input type="image" name="envoyer" style="margin-left:70%;position:fixed;bottom:30px;
		height:65px;width:65px;" src="image/pdf.png" alt="ok"  />
		</form>	


<?php
ob_start();
?>

	
		
			
			<h1>HAPPYFREE</h1>

		
	
					
					
<?php
if (isset($_POST['submit'])){
$content=ob_get_clean();
require("html2pdf/html2pdf.class.php");
try{
$pdf=new HTML2PDF('P','A4','fr');
$pdf->writeHTML($content);
ob_end_clean();
$pdf->Output('projet2.pdf','D');


}catch (HTML2PDF_exception $e){
	die($e);

}
}


include "footer.php";
?>	