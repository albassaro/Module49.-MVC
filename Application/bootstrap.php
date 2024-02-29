<?php
// Подключение файлов
require_once 'config/paths.php';
require_once 'core/model.php'; 
require_once 'core/view.php'; 
require_once 'core/controller.php';
require_once 'core/route.php'; 

phpinfo();

// Вызов статической функции для начала загрузки всей страницы
Route::start();


