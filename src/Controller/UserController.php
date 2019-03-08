<?php
namespace Controller; 
use Core\Controller; 
use Core\Request;
use Model\UserModel; 

class UserController extends Controller {

    public $data; 

    function __construct() {
        //echo "je suis UserController \n";
        $this->data = new Request($_REQUEST);
        //var_dump($this->data);
    }

    public function addAction(){
        echo 'L\' action est ajouter ';
    }

    public function loginAction(){
        $this->render('login'); 
    }

    public function registerAction(){
        var_dump($this->data);
        //  $register = new UserModel(); 

        $this->render('register');
    }


}