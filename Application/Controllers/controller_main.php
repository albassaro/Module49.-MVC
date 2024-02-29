<?php

class Controller_main extends Controller {

    function __construct(){       
        $this->view = new View();
    }

    function startRender ($currentUri,$content_view){
        // Проверка на существование модели
        if(array_key_exists('model',$currentUri) && file_exists(MODELS ."/{$currentUri['model']}.php"))
        {
            require MODELS ."/{$currentUri['model']}.php";
            $this->model = new $currentUri['model']();
            // Вызов функции для эмуляции взятия данных из базы
            $data = $this->model->getData();
            // Вызов функции для отрисовки страницы с нужным контентом и эмулированными данными
            $this->view->renderPage($content_view, $data);
        }else {
            // Вызов функции для отрисовки страницы с нужным контентом без данных
            $this->view->renderPage($content_view);
        }
           
    }
}