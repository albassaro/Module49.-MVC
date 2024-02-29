<?php

// Упрощенная модель карты маршрутов

$routes = [
    '' => ['view' => 'home_view.php', 'controller' => 'controller_main.php'],
    'about' => ['view' => 'about_view.php', 'controller' => 'controller_main.php', 'model' => 'about_model'],
    'pricing' => ['view' => 'pricing_view.php', 'controller' => 'controller_main.php'],
];
