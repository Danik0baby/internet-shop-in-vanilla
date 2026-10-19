<?php


require ([
    '/' => __DIR__ . '/../pages/home.php',
    '/about' => __DIR__ . '/../pages/about.php',
    '/number' => __DIR__ . '/../pages/number.php',
    '/catalog' => __DIR__ . '/../pages/catalog.php'
][parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)] ?? __DIR__ . '/../pages/errorPage.php');


