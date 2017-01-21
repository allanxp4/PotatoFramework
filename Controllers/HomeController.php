<?php
require_once('./Views/View.php');

class HomeController{
    public function showHome(){
        $rbag['test'] = "arou";
        View::RenderView("Home", $rbag);
    }

    public function p2(){
        echo 'Hueheu';
    }
}