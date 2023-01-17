<?php
require_once 'path/to/PHPWord/src/PhpWord/Autoloader.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

// Get the input from the form
$name = $_POST['name'];
$check_mark = $_POST['check_mark'];
$drop_down = $_POST['drop_down'];

// Create a new PHPWord object
$phpWord = new PhpWord();

// Add a new section to the document
$section = $phpWord->addSection();

// Add the name input to the document
$section->addText('Name: '.$name);

// Add the check mark input to the document
$section->addText('Check Mark: '.$check_mark);

// Add the drop down input to the document
$section->addText('Drop Down Selection: '.$drop_down);

// Save the document as a Word file
$objWriter = IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('report.docx');

?>
