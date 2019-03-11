<?php

function showFruits($scope = []) {
    //extract($scope);
   $fruits = [];
    if(extract($scope) == 0){
       extract($scope, EXTR_PREFIX_ALL, 'fruits'); 
       $fruits = [$fruits_0, $fruits_1,$fruits_2]; 
    }

    foreach ($fruits as $fruit):
        echo $fruit. PHP_EOL;    
    endforeach;
}

$array = ['pomme', 'poire', 'abricot'];
showFruits($array);
