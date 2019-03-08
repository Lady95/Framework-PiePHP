<?php
namespace Controller; 
use Core\Controller; 

class UserController extends Controller {

    function __construct() {
        //echo "je suis UserController \n";
    }

    public function addAction(){
        echo 'L\' action est ajouter ';
    }

    public function loginAction(){
        $this->render('login'); 
    }

    public function registerAction(){
        echo 'inscription !!';
    }


}