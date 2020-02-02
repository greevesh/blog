<?php

$router->define([
    '/' => 'PagesController@home',
    'about' => 'PagesController@about',
    'blog' => 'PagesController@blog',
    'contact' => 'PagesController@contact'
]);