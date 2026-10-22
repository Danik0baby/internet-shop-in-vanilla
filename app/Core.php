<?php


require ([
    '/' => __DIR__ . '/../pages/home.php',
    '/about' => __DIR__ . '/../pages/about.php',
    '/number' => __DIR__ . '/../pages/number.php',
    '/catalog' => __DIR__ . '/../pages/catalog.php',
    '/registration' => __DIR__ . '/../pages/registration.php'
][$_SERVER['REQUEST_URI']] ?? __DIR__ . '/../pages/errorPage.php');

