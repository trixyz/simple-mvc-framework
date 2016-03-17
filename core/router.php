<?php

class Router {

    private $routes_table = [];
    private $params;

    public function getRoutesTable(){

        return $this->routes_table;
    }

    public function getParams(){

        return $this->params;
    }

    public function addRoute($route, $params = []){

        $route = preg_replace('/\//', '\\/', $route);

        $route = preg_replace('/\{([a-z]+)\}/', '(?P<$1>[a-z-]+)', $route);

        $route = '/^'.$route.'$/i';

        $this->routes_table[$route] = $params;


    }

    public function matchUrl($url){

        foreach ($this->routes_table as $route => $params) {

            if(preg_match($route,$url,$matches)){
                
                foreach ($matches as $key => $match) {

                    if(is_string($key)){
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

}