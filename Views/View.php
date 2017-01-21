<?php

class View{
    public static function RenderView($viewPath, $viewBag){
        require($viewPath . '.php');
    }
}