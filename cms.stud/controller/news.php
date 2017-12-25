<?php
include '/model/'.$add_controller.'.php';
$model = new $add_controller;


/* !!!!!!!!!!!!!!!!!!!!!!!!   Часть контроллера только для AJAX обращений   !!!!!!!!!!!!!!!!!!!!!!!!!!! */
if(isset($_REQUEST['metod']) && $_REQUEST['metod']=='ajax'){
	
	$ajax = '';
}
/* !!!!!!!!!!!!!!!!!!!!!   КОНЕЦ Части контроллера только для AJAX обращений   !!!!!!!!!!!!!!!!!!!!!!!! */

//В $_POST прийдут все параметры, взятые из ЧПУ, кроме контроллера...

if(isset($_POST['news_id'])){
    
    //подключим другой шаблон
    $add_tpl = 'one_news';
    
    //получим инфу по новости
    $news_info = $model->getOneNews($_POST['news_id']);
    $title = $news_info['title'];
    $name = $news_info['name'];
    $text = $news_info['text'];
    
    $back = HTTP_SERVER . '/news';
}
else{
    $news_mass = $model->getNews(0,4);
    $news = array();
    foreach ($news_mass as $val) {
        $news[] = array(
            'name' => $val['name'],
            'link' => 'news/'.$model->getNewsLink($val['id'])
        );
    } 
}


