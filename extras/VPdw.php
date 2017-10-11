<?php
file_put_contents("../files/Vertretungsplan.docx", fopen("http://comenius.urspringschule.de/urspring/Vertretungsplan.docx", 'r'));
/*
 *     Wenn Datenschutz Probleme
 *  Dann auskommentieren und die jeweiligen Lehrernamen mit ihren Kürzeln ersetzen lassen
 *
// Create the Object.
$zip = new ZipArchive();
// Use same filename for "save" and different filename for "save as".
$inputFilename = 'testfile.docx';
$outputFilename = 'testfile.docx';
// Some new strings to put in the document.
$token1 = 'Hello World!';
$token2 = 'Your mother smelt of elderberries, and your father was a hamster!';
// Open the Microsoft Word .docx file as if it were a zip file... because it is.
if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    echo "Cannot open $filename :( "; die;
}
// Fetch the document.xml file from the word subdirectory in the archive.
$xml = $zip->getFromName('word/document.xml');
// Replace the tokens.


$xml = str_replace('', $token1, $xml);
$xml = str_replace('{TOKEN2}', $token2, $xml);


// Write back to the document and close the object
if ($zip->addFromString('word/document.xml', $xml)) { echo 'File written!'; }
else { echo 'File not written.  Go back and add write permissions to this folder!l'; }
$zip->close();

*/

