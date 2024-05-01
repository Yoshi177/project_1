<?php

require_once 'autoload.php';
use \PHPOffice\PhpWord\PhpWord;

$document = new \PhpOffice\PhpWord\TemplateProcessor('./WordFilesPHP/MetodichItogRabota.docx');

$uploadDir = __DIR__;
$outputFile = 'ItogRabota.docx';

$discipline = $_POST['discipline'];
$theme = $_POST['theme'];
$group = $_POST['group'];
$numbergr = $_POST['numbergr'];
$name = $_POST['name'];
$professor = $_POST['professor'];
$Year = $_POST['Year'];

$document->setValue('discipline',$discipline);
$document->setValue('theme',$theme);
$document->setValue('group',$group);
$document->setValue('numbergr',$numbergr);
$document->setValue('name',$name);
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


