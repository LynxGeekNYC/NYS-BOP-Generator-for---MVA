<?php
// Import the library to generate PDFs
require_once('path/to/library/pdf-generator.php');

// Get the input from the form
$name = $_POST['name'];
$check_mark = $_POST['check_mark'];
$drop_down = $_POST['drop_down'];

// Create a new PDF document
$pdf = new PDF();

// Add a title to the PDF
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'PDF Report');

// Add the name input to the PDF
$pdf->Ln();
$pdf->Cell(40,10,'Name: '.$name);

// Add the check mark input to the PDF
$pdf->Ln();
$pdf->Cell(40,10,'Check Mark: '.$check_mark);

// Add the drop down input to the PDF
$pdf->Ln();
$pdf->Cell(40,10,'Drop Down Selection: '.$drop_down);

// Output the PDF
$pdf->Output();
?>
