<?php

require_once 'vendor/autoload.php';

$document = new \PhpOffice\PhpWord\TemplateProcessor('./review.docx');

$uploadDir = __DIR__;
$outputFile = 'review_full.docx';

$uploadFile = $uploadDir. '\\'.basename($_FILES['file']['name']); //для загрузки какого-либо файла 2 строки
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);

$theme = $_POST['theme'];
$group = $_POST['group'];
$numbergr = $_POST['numbergr'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$city = $_POST['city'];
$birth = $_POST['birth'];
$startYear = $_POST['startYear'];
$LYear = $_POST['LYear'];
$university = $_POST['university'];

$document->setValue('theme',$theme);
$document->setValue('group',$group);
$document->setValue('numbergr',$numbergr);
$document->setValue('name',$name);
$document->setValue('tel',$tel);
$document->setValue('city',$city);
$document->setValue('birth',$birth);
$document->setValue('startYear',$startYear);
$document->setValue('LYear',$LYear);
$document->setValue('university',$university);

$document->saveAs($outputFile);


// Имя скачиваемого файла
$downloadfile = $outputFile;

// Контент-тип означающий скачивание
header("Content-Type: application/octet-stream");

// Размер в байтах
header("Accept-Ranges: bytes");

// Размер файла
header("Content-Length: ".filesize($downloadfile));

// Расположение скачиваемого файла
header("Content-Disposition: attachment; filename=".$downloadfile);  

// Прочитать файл
readfile($downloadfile);

unlink($outputFile);


