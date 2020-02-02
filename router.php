<?php

class Router
{
    protected $routes = [];

    public function load($routesFile)
    {
        require $routesFile; 
    }

    public function define($route)
    {
        $this->routes[$route]; 
    }
}