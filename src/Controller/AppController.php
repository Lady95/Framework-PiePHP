<?php

namespace Controller; 

use Core\Controller; 

//require_once 'Core/Controller.php';

class AppController extends Controller{

    public function run(){
        //echo __CLASS__ . "[OK]" . PHP_EOL; 
    }

    public function indexAction(){

        echo " methode indexAction \n ";
    }

    public function coucouAction(){

        echo "methode coucouAction : Salut  \n ";
    }

}