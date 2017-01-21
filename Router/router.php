<?php
class Route{
    private $url;
    private $controller;
    private $action;

    public function __construct($url, $controller, $action){
        $this->url = $url;
        $this->controller = $controller;
        $this->action = $action;
    }

    public function getUrl(){
        return $this->url;
    }

    public function getController(){
        return $this->controller;
    }

    public function getAction(){
        return $this->action;
    }
}

class Router{
    private $routes = [];   

    public function addRoute($url, $controller, $action){
        $this->routes[] = new Route($url, $controller, $action);
    }

    public function goToAction($controller, $action){
        require_once('./Controllers/' . $controller . '.php');
        eval('$controller = new ' . $controller . '();');
        eval('$controller->' . $action . '();');
    }

    public function runRouter(){
        foreach($this->routes as $route){
            if(array_key_exists('PATH_INFO', $_SERVER) && $route->getUrl() === $_SERVER['PATH_INFO']){
                $this->goToAction($route->getController(), $route->getAction());
                return null;
            }
            else{
                $this->goToAction('NotFoundController', 'NotFound');
                return null;
            }
        }
    }
}
