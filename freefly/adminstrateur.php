<?php

include "header.php";


?>
<div class="admin">

<form method="post" action="">
<label for="UTILISATEUR">UTILISATEUR :</label>
<select id="UTILISATEUR" name="UTILISATEUR">

<input type="submit" name="telecharger" value="telecharger"/>
</form>



</div-->
<?php 
 

//admin(); 



$pdf = new FPDF();
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World !');
$pdf->Output();
?>



