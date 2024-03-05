<?php
// Подключение файла с путями к нужным папкам
require_once 'Application/Config/paths.php';

// Подключение файлов
require_once CORE . '/model.php'; 
require_once CORE . '/view.php'; 
require_once CORE . '/controller.php';
require_once CORE . '/route.php'; 

// Вызов статической функции для начала загрузки всей страницы
Route::start();


