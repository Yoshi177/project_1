<?php

require_once 'autoload.php';
use \PHPOffice\PhpWord\PhpWord;

$document = new \PhpOffice\PhpWord\TemplateProcessor('./WordFilesPHP/РефФизика.docx');

$uploadDir = __DIR__;
$outputFile = 'Физика реферат.docx';

$university = $_POST['university'];
$group = $_POST['group'];
$numbergr = $_POST['numbergr'];
$name = $_POST['name'];
$prepod = $_POST['prepod'];
$theme = $_POST['theme'];

$document->setValue('university',$university);
$document->setValue('group',$group);
$document->setValue('numbergr',$numbergr);
$document->setValue('name',$name);
$document->setValue('prepod',$prepod);
$document->setValue('theme',$theme);

$document->saveAs($outputFile);
$downloadfile = $outputFile;
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Content-Length: ".filesize($downloadfile));
header("Content-Disposition: attachment; filename=".$downloadfile);  
readfile($downloadfile);
unlink($outputFile);


