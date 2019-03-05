<?php 
namespace Core; 
//use Controller\UserController; 
use Controller\AppController; 
use Core\Controller; 
use Core\Router; 

class Core {
    
    public function run(){
        $url = $_SERVER['REQUEST_URI'];
        $racine = str_replace(BASE_URI, '',$url);
        $r2 = rtrim($racine, '/');
        $urlCase = explode('/', $racine);

        if(empty($urlCase)){
            $Router = Router::get($urlCase);
        } else{
            $Router = Router::get($racine);
        }
       
        if($Router != false){
            foreach ($Router as $key => $value){
                if ($key === "controller"){
                    $Controller = "Controller\\".ucwords($value)."Controller"; 
                    $control = new $Controller(); 
                } 
                if ($key === "action"){
                    $Action = $value."Action"; 
                    $control->$Action(); 
                }  
            }

        } else {
            $control = new Controller(); 
            $control->PageError404();
        }
       
        
    }
}
