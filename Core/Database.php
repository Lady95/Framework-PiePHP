<?php

namespace Core;

use \PDO;

class Database 
{
    protected $pdo;

    public function __construct() {

        $file_json = file_get_contents('config.json');

        $databd = json_decode($file_json, true);
        
        extract($databd['database']);

        try{
        $this->pdo = new \PDO("mysql:host=".$host.";dbname=".$dbname,$user,$password);
            return $this->pdo;
        }  catch (PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }
    } 
}