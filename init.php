<?php
require_once('Router/router.php');

$router = new Router();
$router->addRoute("/penis", "HomeController", "showHome");
$router->addRoute("/pau", "HomeController", "pau");

$router->runRouter();   
