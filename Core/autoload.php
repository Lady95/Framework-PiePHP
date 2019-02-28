<?php

spl_autoload_register(function($class){
    $file = str_replace('\\', DIRECTORY_SEPARATOR ,$class) . '.php';
    include $file;
    if(class_exists($class)){
        return true;
    } else {
        return false; 
    }
});