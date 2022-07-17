<?php 


function reverseArray($a){
    $qntyOfInputs = count($a);
    $output = [];

    for ($i = 0; 0 < $qntyOfInputs; $i++){
        $output[$i] = $a[--$qntyOfInputs];
    }
    return $output;
}

function itWorked($arrayOne , $arrayTwo){
    return $arrayOne === $arrayTwo;
}

