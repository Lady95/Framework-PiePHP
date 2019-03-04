<?php
namespace Controller; 
use Core\Controller; 

//require_once 'Core/Controller.php';



class UserController extends Controller {

    //public $name; 

    function __construct() {
        echo "je suis UserController \n";
    }

    public function addAction(){
        echo 'L\' action est ajouter ';
    }


}