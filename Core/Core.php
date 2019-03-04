<?php 
namespace Core; 
//use Controller\UserController; 
use Controller\AppController; 
use Core\Controller; 

//require_once('autoload.php');
// require_once 'src/Controller/UserController.php';
// require_once 'src/Controller/AppController.php';

class Core {
    public function run(){
        $url = $_SERVER['REQUEST_URI'];
        //var_dump($url);
        $urlCase = explode('/', $url);
        
        $param1 = $urlCase[3];
        
        if($urlCase[3] === "user" && empty($urlCase[4] == " ")){
            
            if($urlCase[3] !== "user" || (!empty($urlCase[4]) && $urlCase[4] !==  "add")){
                $Controller = new Controller();
                $Controller-> PageError404();
            } else {
                $UserController = "Controller\\".ucwords($urlCase[3])."Controller"; 
                $control = new $UserController();
            }
            if(!empty($urlCase[4])) {
                if($urlCase[4] === "add"){
                    $method = $urlCase[4] . 'Action'; 
                    $control->$method();
                }
            }
        }else {
            $Controller = new Controller();
            $Controller-> PageError404();
        }
        
        
        
        
        
    }
}