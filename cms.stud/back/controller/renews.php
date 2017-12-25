<?php
include '/model/'.$add_controller.'.php';
$model = new $add_controller;


/* !!!!!!!!!!!!!!!!!!!!!!!!   Часть контроллера только для AJAX обращений   !!!!!!!!!!!!!!!!!!!!!!!!!!! */
if(isset($_REQUEST['metod']) && $_REQUEST['metod']=='ajax'){
	
	$ajax = '';
}
/* !!!!!!!!!!!!!!!!!!!!!   КОНЕЦ Части контроллера только для AJAX обращений   !!!!!!!!!!!!!!!!!!!!!!!! */


$news_mass = $model->getNews(0,4);
$news = array();
foreach ($news_mass as $val) {
    $news[] = array(
        'name' => $val['name'],
        'link' => 'news/'.$model->getNewsLink($val['id'])
    );
} 



