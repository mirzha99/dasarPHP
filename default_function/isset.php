<?php

//Tanpa Null Coalescing Operator

$check = "";

if(isset($check)){
    $kondisi = "true";
}else{
    $kondisi = "false";
}

echo "Tanpa Null Coalescing Operator => {$kondisi} ";

echo "\n";
//Null Coalescing Operator

$kondisi = $check ?? "false";

echo "Null Coalescing Operator => {$kondisi} ";


;?>