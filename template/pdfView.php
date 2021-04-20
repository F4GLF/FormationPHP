<?php 

//générer mon pdf !
//require('fpdf.php'); <-- deja fait dans le front controller ! (via vendor/autoload.php )

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$i = 20;
foreach($posts as $post) {
  $pdf->Cell($i,10,$post['title']);
  $i = $i + 40;
}
$pdf->Output();