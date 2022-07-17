<?php 

require "config-env.php";
require "functions.php";

$file = fopen(getenv("OUTPUT_PATH"),"r");
$answers = fopen(getenv("ANSWERS"),"r");

$allArrays = [];
$i = 0;

while ($pointer = fgets($file)){

    $linhaStr = explode(' ',$pointer);

    $linha = array_map('intval',$linhaStr);
    $output = reverseArray($linha);

    $respostaStr = explode(" ",fgets($answers));
    $resposta = array_map('intval',$respostaStr);
    
    if (!(itWorked($output,$resposta))){
        throw new Exception("Error : Function 'reverseArray' is incorrect");
    }

    $allArrays[$i] = $output;
    $i++;
}

print_r($allArrays);



