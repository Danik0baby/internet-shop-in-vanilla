<?php

$pdo = new PDO(
        'mysql:host=127.0.0.1;port=3307;dbname=internet_shop;charset=utf8mb4',
        'root',
        'root_password',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$pdo->exec("create database if not exists internet_shop
    character set utf8mb4 collate utf8mb4_unicode_ci");

$pdo->exec("use internet_shop");

$pdo->exec("create table if not exists users (
    id int auto_increment primary key,
    name varchar(100) not null,
    email varchar(150) unique not null,
    password varchar(255) not null,
    created_at timestamp default current_timestamp)
    ");

echo "все создано\n";