<?php

$router = new Router;

$router->define([
    '' => 'public/index.php',
    'about' => '../controllers/about.php',
    'blog' => '../controllers/blog.php',
    'contact' => '../controllers/contact.php'
]);