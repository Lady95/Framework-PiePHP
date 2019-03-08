<?php
namespace Core; 

Class Router
{

    private static $routes;

    public static function connect($url, $route) {
        self::$routes[$url] = $route;
    }
    
    public static function get($url) {

        if(array_key_exists($url, self::$routes)){
            return self::$routes[$url]; 
        } else {
            return false; 
        }
        // + un tableau contenant les paramètres à passer à la méthode du contoller
    }
}

