<?php 

class Route {
    
    
    
    static function start()
    {
        // Подключение маршрутов (страниц) сайта
        require CONFIG . '/routes_map.php';

        // Получение текущего uri
        $uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

        //Проверка, что текущий uri есть в карте маршрутов 
        if (array_key_exists($uri,$routes)){
            // Проверка на существование файла контроллера
            if (file_exists(CONTROLLERS . "/{$routes[$uri]['controller']}")){
                    require CONTROLLERS . "/{$routes[$uri]['controller']}";
                    $controller = new Controller_main();
                    // Вызов функции для начала рендера страницы. Параметры: проверенный uri, файл с контентом страницы
                    $controller->startRender($routes[$uri], VIEWS . "/{$routes[$uri]['view']}");          
            }else {
                // Вызов функции для отрисовки 404 ошибки
                Route::errorPage();
            }
     
        }else{
            // Вызов функции для отрисовки 404 ошибки
            Route::errorPage();
        }
    }
    
    static function errorPage($code=404){
        http_response_code($code);
        require VIEWS . '/404_view.php';
        die();
    }

    
}