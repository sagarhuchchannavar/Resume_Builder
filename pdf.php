<?php

try {
require('C:\xampp\htdocs\Resume Builder\fpdf\fpdf.php'); // Include FPDF library

// Include TCPDF's import
require('C:\xampp\htdocs\Resume Builder\tcpdf\tcpdf_import.php');

// Create a new instance of TCPDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Resume');
$pdf->SetSubject('Resume PDF');
$pdf->SetKeywords('Resume, PDF');

// Add a page
$pdf->AddPage();

// Capture the output of submit.php
ob_start();
require('submit.php'); // Include the content of submit.php
$content = ob_get_clean();

// Write captured content to PDF
$pdf->writeHTML($content, true, false, true, false, '');

// Output the PDF for download
$pdf->Output('resume.pdf', 'D');
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
