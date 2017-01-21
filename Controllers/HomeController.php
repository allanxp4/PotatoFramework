<?php
require_once('./Views/View.php');

class HomeController{
    public function showHome(){
        $rolabag['test'] = "arou";
        View::RenderView("Home", $rolabag);
    }

    public function pau(){
        echo 'Huepauzao';
    }
}