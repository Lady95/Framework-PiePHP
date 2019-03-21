<?php
namespace Controller; 
use Core\Controller; 
use Core\Request;
use Model\UserModel; 

class UserController extends Controller {

    public function indexAction() {
        session_start();
        $this->render('index'); 
    }

    public function loginAction(){
        extract($this->dataInput); 
        if(!empty($_POST)){
            $methodUser = new UserModel($this->dataInput);
            $result_login = $methodUser->checkUser($email, $password); 
            
            if($result_login != false){
                echo 'Connect success !';
                session_start();
                $_SESSION['id'] = $result_login[0]['id']; 
                $_SESSION['email'] = $result_login[0]['email'];
                $_SESSION['password'] = $result_login[0]['password'];
            } else {
                echo 'email or password inncorrect'; 
            }
        }
        $this->render('login'); 
    }
    
    public function registerAction(){
        session_start();
        extract($this->dataInput);   
        if(!empty($_POST)){
            $methodUser = new UserModel($this->dataInput);
            if(!empty($email) && (!empty($password))){
                $verif = $methodUser->save();
                if($verif === false){
                    echo 'No register.'; 
                } else {
                    echo 'register sucess !';
                }
            }
        }
        $this->render('register'); 
    }

    public function readerAction(){
        session_start();
        $methodUser = new UserModel($this->dataInput);
        $users = UserModel::findAll();
        //var_dump($users->email);
        // $users = $methodUser->update('20', array('email'=>'azerty','password' => 'azerty'));
        // //var_dump($users->email = 'zerty');
        // //var_dump($users->password = 'zerty');
        $this->render('show', $users);
        UserModel::getTab(); 
        extract($this->dataInput);
       
        if(!empty($_POST)){
            if(!empty($email_UPDT) && !empty($pass_UPDT) && !empty($id_UPDT)  && !empty($submit_UPDT)){
                $result = $methodUser->update($id_UPDT); 
                if($result == true){
                    echo "update success !!!";
                } else {
                    echo "echec update";
                }
            } else {
                echo 'files empty'; 
            }
            if(!empty($id_DEL)){
                $methodUser->delete1($id_DEL); 
            } else {
                echo 'user delete'; 
            }
        }
    }

    public function profilAction() {
        session_start();
        $this->render('profil');
    }

    public function updateProfilAction(){
        echo "Update profile";
    }

    public function deleteProfilAction(){
        echo "Delete profile";
    }
}