<?php
require_once('Router/router.php');

$router = new Router();
$router->addRoute("/page1", "HomeController", "showHome");
$router->addRoute("/page2", "HomeController", "p2");

$router->runRouter();   
