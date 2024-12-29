<?php 
$data = [
    ['nama'=>'Mirza','nim'=>'171041020030','jk'=>'laki-laki'],
    ['nama'=>'Teuku Umar','nim'=>'171041020031','jk'=>'laki-laki'],
    ['nama'=>'Cut nyak dien','nim'=>'171041020032','jk'=>'Perempuan'],
    ['nama'=>'Panglima Polem','nim'=>'171041020033','jk'=>'laki-laki'],
];

// Encode the array into a JSON string
$json = json_encode($data);
echo $json;

echo "\n";
// Decode the JSON string back into an array
var_dump(json_decode($json,true));
;?>