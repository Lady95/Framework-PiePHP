<?php

namespace Model;
use \PDO;
use Core\Database; 

class UserModel extends Database  {

    private $email; 
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;

        //var_dump($email, $password);
        
        parent::__construct(); 
    }

    public function save(){
        $query = $this->pdo->prepare("INSERT INTO users (email, password)
        VALUES(:email, :password)"); 
        $query->bindValue(':email', $this->email); 
        $query->bindValue(':password', $this->password); 
        $query->execute();

    }

    public function checkUser(){
        $query = $this->pdo->prepare("SELECT id ,email, password  FROM users WHERE email = :email AND password = :password"); 
        $query->bindValue(':email', $this->email);
        $query->bindValue(':password', $this->password);
        $query->execute();
        if($query->rowCount() == 1){
            return $query->fetch(PDO::FETCH_ASSOC);
        } else {
            return false; 
        }
        
    } 

    public function connexMembre() { 
        session_start();
        $result_login = $this->checkUser(); 
        $_SESSION['id'] = $result_login['id']; 
        $_SESSION['email'] = $result_login['email'];
        $_SESSION['password'] = $result_login['password'];
    }


}