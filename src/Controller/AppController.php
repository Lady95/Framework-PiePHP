<?php

namespace Controller; 

use Core\Controller; 

//require_once 'Core/Controller.php';

class AppController extends Controller{

    public function run(){
        //echo __CLASS__ . "[OK]" . PHP_EOL; 
    }

    public function indexAction(){

        echo "il y a pas de parametre dans l'url methode AppController \n ";
    }

}