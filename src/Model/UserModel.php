<?php

namespace Model;

use Core\Database; 

class UserModel extends Database  {

    private $email; 
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
        
        parent::__construct(); 
    }

    public function save(){
        $query = $this->pdo->prepare("INSERT INTO users (email, password)
        VALUES(:email, :password)"); 
        $query->bindValue(':email', $this->email); 
        $query->bindValue(':password', $this->password); 
        $query->execute();

    }

}