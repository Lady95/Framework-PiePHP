<?php

namespace Core;

class Request 
{
    private $input;

    public function __construct($input)
    {
        $this->input = $input;

        foreach($input as $key => $value){
            $this->input[$key] = trim(htmlspecialchars(stripslashes($value))); 
            
        }
    }

    public function getInput()
    {
        return $this->input;
    }
}