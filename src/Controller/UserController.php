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
        $array = (array) $this->getData();
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


    public function indexAction() {
        $this->render('index'); 
    }

    public function loginAction(){
        extract($this->dataInput); 
        
        if(!empty($_POST)){
            $methodUser = new UserModel();
            $result_login = $methodUser->checkUser($email, $password); 
            if($result_login!= false){
                echo 'Connect success !';
                session_start();
                $_SESSION['id'] = $result_login['id']; 
                $_SESSION['email'] = $result_login['email'];
                $_SESSION['password'] = $result_login['password'];
            } else {
                echo 'email or password inncorrect'; 
            }
        }
        
        $this->render('login'); 
    }
    
    public function registerAction(){
        
        extract($this->dataInput);
        
        if(!empty($_POST)){
            $methodUser = new UserModel();
            //create 
            if(!empty($email_register) && (!empty($password_register))){
                $verif = $methodUser->create($email_register, $password_register);
                if($verif === false){
                    echo 'No register.'; 
                } else {
                    var_dump($verif);
                    echo 'register sucess !';
                }
            }
        }
        $this->render('register');
    }

    public function readerAction(){
        $methodUser = new UserModel();
        $users = $methodUser->read_all();

        $this->render('show', $users);
        
        // var_dump($users['0']);
        // var_dump($users);
        
    }
}