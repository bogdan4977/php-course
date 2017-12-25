<?php
include '/model/'.$add_controller.'.php';
$model = new $add_controller;

//ссылка на новости
$link_news = HTTP_SERVER . '/news';

