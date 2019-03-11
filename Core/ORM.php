<?php
namespace Core; 

class ORM {

    public function create($table, $fields){}
    
    public function read($table, $id){}
    
    public function update($table, $id, $fields){}
    
    public function delete ($table, $id) {}

    public function find ($table, $params = array('WHERE' => '1','ORDER BY' => 'id ASC','LIMIT' => '')) {}    
}