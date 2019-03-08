<?php 
namespace Core; 
use Core\Controller; 
use Core\Router; 
// use Core\Database;
// use Model\UserModel;
class Core {
    
    public function run(){
        require_once 'routes.php';
        
        $url = $_SERVER['REQUEST_URI'];
        $racine = str_replace(BASE_URI, '',$url); // "/"
        $r2 = rtrim($racine, '/');
        $urlCase = explode('/', $racine);
        //var_dump($urlCase[1]);

        if(empty($urlCase[1])){
            $Router = Router::get($racine);
        } else{
            $Router = Router::get($r2);
        }
        
        if($Router != false){
            foreach ($Router as $key => $value){
                if ($key === "controller"){
                    $Controller = "Controller\\".ucwords($value)."Controller"; 
                    if(class_exists($Controller)){
                        $control = new $Controller();
                    }  
                } 
                if ($key === "action"){
                    $Action = $value."Action"; 
                    if (method_exists($control,$Action)){
                        $control->$Action();
                    }
                }  
            }
        } else {
            $control = new Controller(); 
            $control->PageError404();
        }
    }
}
