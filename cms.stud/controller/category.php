<?php
include '/model/'.$add_controller.'.php';
$model = new $add_controller;

$printText = "printing test text";

$categoy = new Category();
$showText = $categoy->calcFunc(25,37);
?>