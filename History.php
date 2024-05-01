<?php

require_once 'autoload.php';
use \PHPOffice\PhpWord\PhpWord;

$document = new \PhpOffice\PhpWord\TemplateProcessor('./WordFilesPHP/ИстТитульник.docx');

$uploadDir = __DIR__;
$outputFile = 'История Титульник.docx';

$theme = $_POST['theme'];
$name = $_POST['name'];
$group = $_POST['group'];
$numbergr = $_POST['numbergr'];
$Pr = $_POST['Pr'];
$university = $_POST['university'];
$tel = $_POST['tel'];
$city = $_POST['city'];

$document->setValue('theme',$theme);
$document->setValue('name',$name);
$document->setValue('group',$group);
$document->setValue('numbergr',$numbergr);
$document->setValue('university',$university);
$document->setValue('Pr',$Pr);
$document->setValue('tel',$tel);
$document->setValue('city',$city);

$document->saveAs($outputFile);
$downloadfile = $outputFile;
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Content-Length: ".filesize($downloadfile));
header("Content-Disposition: attachment; filename=".$downloadfile);  
readfile($downloadfile);
unlink($outputFile);


