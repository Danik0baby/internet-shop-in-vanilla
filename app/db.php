<?php

(new PDO ('mysql:host=127.0.0.1;port=3307;dbname=internet_shop;charset=utf8mb4',
    'root',
    'root_password',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    )) -> 
    exec("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);"
);