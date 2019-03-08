<?php

namespace Core;

class Request 
{
    private $input;

    public function __construct($input)
    {
        $this->input = $input;

        foreach($input as $key => $value){
            $replace = array($key => trim(htmlspecialchars(stripslashes($value))), " ");
            $input = array_replace($input, $replace);
           
        }
        return $input; 
    }

}