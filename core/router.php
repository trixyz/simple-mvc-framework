<?php

class Router {

    private $routes_table = [];

    public function addRoute($route, $params = []){

        $route = preg_replace('/\//', '\\/', $route);

        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

        $route = '/^'.$route.'$/i';

        $this->routes_table[$route] = $params;

        print_r($this->routes_table);
    }

}