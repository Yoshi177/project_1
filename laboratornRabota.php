<?php

require_once 'autoload.php';
use \PHPOffice\PhpWord\PhpWord;

$document = new \PhpOffice\PhpWord\TemplateProcessor('./WordFilesPHP/MetodichLaboratorngRabota.docx');

$uploadDir = __DIR__;
$outputFile = 'LaboratornRabota.docx';

$number = $_POST['number'];
$discipline = $_POST['discipline'];
$theme = $_POST['theme'];
$name = $_POST['name'];
$groupN = $_POST['groupN'];
$professor = $_POST['professor'];
$Year = $_POST['Year'];

$document->setValue('number',$number);
$document->setValue('discipline',$discipline);
$document->setValue('theme',$theme);
$document->setValue('name',$name);
$document->setValue('groupN',$groupN);
$document->setValue('professor',$professor);
$document->setValue('Year',$Year);

$document->saveAs($outputFile);
$downloadfile = $outputFile;
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Content-Length: ".filesize($downloadfile));
header("Content-Disposition: attachment; filename=".$downloadfile);  
readfile($downloadfile);
unlink($outputFile);


