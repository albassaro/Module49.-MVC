<?php
class View {

    // Шаблон, установленный по умолчанию
    public $template_view = 'template_view.php';

    // Функция для отрисовки страницы 
    function renderPage ($content_view, $data = null){
        // Подключение шаблона по умолчанию
        include VIEWS . '/'.$this->template_view;
    }
}