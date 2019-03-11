<?php

namespace Model;
use \PDO;
use Core\Database; 

class UserModel extends Database  {
    
    private $email; 
    private $password;
    
    public function __construct() {
        // $this->email = $email;
        // $this->password = $password;
        //var_dump($email, $password);
        parent::__construct(); 
    }
    
    public function create($email, $password){
        $query = $this->pdo->prepare("INSERT INTO users (email, password) VALUES(:email, :password)"); 
        $query->bindValue(':email', $email); 
        $query->bindValue(':password', $password); 
        $executeOK = $query->execute();
        if($executeOK){
            return $this->pdo->lastInsertId();
        } else {
            return false; 
        }
        
    }
    
    
    public function read($id){
        $query = $this->pdo->prepare("SELECT email, password  FROM users WHERE id = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $executeOK = $query->execute();
        if($executeOK){
            return $query->fetch(PDO::FETCH_ASSOC);
        } else {
            return false; 
        }
        
    }
    
    public function read_all(){
        $query = $this->pdo->query("SELECT *  FROM users ORDER BY id"); 
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    public function update($id){
        $query = $this->pdo->prepare("UPDATE users SET  email = :email, password = :password WHERE id_user = :id_user"); 
        $query->bindValue(':email', $email, PDO::PARAM_INT);
        $query->bindValue(':password', $password, PDO::PARAM_INT);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $executeOK = $query->execute();
        if($executeOK){
            return true; 
        }
    }
    
    
    public function delete($id){
        $query = $this->pdo->prepare("UPDATE users SET  staut = 0 WHERE id_user = :id_user"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $executeOK = $query->execute();
        if($executeOK){
            return true; 
        }
    }

    public function checkUser($email, $password){
            $query = $this->pdo->prepare("SELECT id ,email, password  FROM users WHERE email = :email AND password = :password"); 
            $query->bindValue(':email', $email);
            $query->bindValue(':password', $password);
            $query->execute();
            if($query->rowCount() == 1){
                return $query->fetch(PDO::FETCH_ASSOC);
            } else {
                return false; 
            }
    } 
    
        // public function save(){
        //     $query = $this->pdo->prepare("INSERT INTO users (email, password)
        //     VALUES(:email, :password)"); 
        //     $query->bindValue(':email', $this->email); 
        //     $query->bindValue(':password', $this->password); 
        //     $query->execute();
            
        // }
        
        
}