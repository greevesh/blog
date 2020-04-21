<?php

$router = new Router;

$router->define([
    '' => '../controllers/home.php',
    'about' => '../controllers/about.php',
    'blog' => '../controllers/blog.php',
    'contact' => '../controllers/contact.php'
]);