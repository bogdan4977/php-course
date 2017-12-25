<?php
include '/model/'.$add_controller.'.php';
$model = new $add_controller;
$model->testCategory();
echo "category view";
?>