<?php

class Router
{
    protected $routes = [];

    public function load(string $routesFile)
    {
        require $routesFile; 
    }

    public function define(array $routes)
    {
        $this->routes = $routes; 
    }
}