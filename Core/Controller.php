<?php

namespace Core; 

class Controller 
{
    function __construct() {
        //echo "je suis controller \n";
    }

    public function PageError404(){

        require 'src/View/Error/404.php'; 
    }
}