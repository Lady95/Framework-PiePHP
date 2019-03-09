<?php
namespace Controller; 
use Core\Controller; 
use Core\Request;
use Model\UserModel; 

class UserController extends Controller {

    private $data; 
    private $dataInput = []; 

    function __construct() {

        $this->data = new Request($_REQUEST);
        $this->data->getInput();

        $array =  (array) $this->getData();

        foreach ($array as $key => $value) {
            foreach ($value as $key => $value) {
               $this->dataInput[$key] = $value; 
            }
        }
    }

    public function getData()
    {
        return $this->data;
    }


    public function addAction(){
        echo 'L\' action est ajouter ';
    }

    public function loginAction(){
        extract($this->dataInput); 

        if(!empty($_POST)){
            $methodUser = new UserModel($email, $password);

            $verif = $methodUser->checkUser(); 

            if($verif != false){
                echo 'Connect success !';
                $methodUser->connexMembre();
            } else {
                echo 'email or password inncorrect'; 
            }
        }

        $this->render('login'); 
    }
    

    public function registerAction(){
        
        extract($this->dataInput);

        if(!empty($_POST)){
            $methodUser = new UserModel($email_register, $password_register);
            $methodUser->save(); 
            echo 'register sucess !';
        }
        $this->render('register');
    }

   
}
