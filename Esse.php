<?php

require_once 'autoload.php';
use \PHPOffice\PhpWord\PhpWord;

$document = new \PhpOffice\PhpWord\TemplateProcessor('./WordFilesPHP/ЭссеПубл.docx');

$uploadDir = __DIR__;
$outputFile = 'Согласие на публикацию эссе.docx';

$theme = $_POST['theme'];
$name = $_POST['name'];
$university = $_POST['university'];
$group = $_POST['group'];
$numbergr = $_POST['numbergr'];
$city=$_POST['city'];
$dat = $_POST['dat'];

$document->setValue('theme',$theme);
$document->setValue('name',$name);
$document->setValue('university',$university);
$document->setValue('group',$group);
$document->setValue('numbergr',$numbergr);
$document->setValue('city',$city);
$document->setValue('dat',$dat);

$document->saveAs($outputFile);
$downloadfile = $outputFile;
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Content-Length: ".filesize($downloadfile));
header("Content-Disposition: attachment; filename=".$downloadfile);  
readfile($downloadfile);
unlink($outputFile);


