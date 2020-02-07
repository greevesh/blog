<?php 

require 'router.php';

$routes = new Router;

$routes->define([
    '/' => 'PagesController@home',
    'about' => 'PagesController@about',
    'blog' => 'PagesController@blog',
    'contact' => 'PagesController@contact'
]); 