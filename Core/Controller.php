<?php

namespace Core;
use Core\Request; 

class Controller 
{
    protected static $_render; 
    
    function __destruct() {
        echo self::$_render;
    }
    
    public function PageError404(){
        
        require 'src/View/Error/404.php'; 
    }
    
    protected function render($view, $scope = []) {
        $r = extract($scope);
        $tab=[];
        if(empty($r)){
            var_dump(extract($scope, EXTR_PREFIX_ALL, 'user'));
        }
        $class = str_replace('\\', '', basename(get_class($this)));
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', $class), $view]) . '.php';
        if (file_exists($f)) {
            ob_start(); 
            include($f);
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View','index']) . '.php');
            self::$_render = ob_get_clean();
        }
    }
}