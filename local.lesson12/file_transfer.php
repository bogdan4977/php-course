<?php
$filename = 'myfile.txt';

$myfile = 'E:\_php\ospanel\domains\local.lesson12\myfile.txt';

$mm_type = "application/octet-stream";
header("Cache-Control: public, must-revalidate"); // кешировать
header("Pragma: hack");
header("Content-Type: " . $mm_type);
header("Content-Length: " . (string)(filesize($myfile)));
header('Content-Disposition: attachment; filename="' . $filename . '"');
header("Content-Transfer-Encoding: binary");

readfile($myfile);



