<?php
function persegipanjang($p, $l) {
    echo "Rumus Persegi Panjang\n";
    $luas = $p * $l;
    $keliling = 2 * ($p + $l);
    echo "Luas dari panjang {$p} dan lebar {$l} adalah {$luas}\n";
    echo "Keliling dari panjang {$p} dan lebar {$l} adalah {$keliling}\n";

    $hasil = [
        'luas'=>$luas,
        'keliling'=>$keliling,
    ];
    return $hasil;
}

function login($u,$p){
    $data = [
        ['u'=>'root', 'p'=>'123'],
        ['u'=>'user', 'p'=>'321'],
        ['u'=>'admin', 'p'=>'456'],
    ];

    foreach($data as $key=>$value){
        if($value['u'] == $u && $value['p'] == $p){ //jika ada data array yang cocok dengan kondisi
            return $value; // maka return value
        } 
    }
    return  "username dan password salah"; //kalau tidak ada data yang cocok di dalam array 
}
function palindrome($words){
    $word = strrev($words);
    if($words == $word){
        return "{$words} is Palindrome";
    }else{
        return "{$words} not Palindrome";
    }
}
function factorial(int $number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
        $factorial = $factorial * $i; 
    }
    return $factorial;
}
// Panggil fungsi
persegipanjang(2, 2);
echo "\n";
var_dump(persegipanjang(3,3));
var_dump(login('admin','456'));
echo palindrome("kodok");
echo "\n ".factorial(10);
?>