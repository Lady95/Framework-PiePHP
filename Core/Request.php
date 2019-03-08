<?php

namespace Core;

class Request 
{
    public $input;

    public function __construct($input)
    {
        $this->input = $input;

        foreach($input as $key => $value){
            $this->input[$key] = trim(htmlspecialchars(stripslashes($value))); 
            //$replace = array($key => trim(htmlspecialchars(stripslashes($value))));
            //$input = array_replace($input, $replace);

        }
        //var_dump($this->input);
        return $input; 
    }

    

}