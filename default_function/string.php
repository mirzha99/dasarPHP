<?php
/*
String Functions
    * strrev: Membalikkan string.
    * strtoupper: Mengubah string menjadi huruf besar.
    * strtolower: Mengubah string menjadi huruf kecil.
    * substr: Mengambil sebagian string.
    * strlen: Menghitung panjang string.
*/
$word = "Bangsawan Code";

$rev = strrev($word);
echo "Rev : {$rev} \n";

$toUpper = strtoupper($word);
echo "Upper : {$toUpper} \n";

$toLower = strtolower($word);
echo "lower : {$toLower} \n";

$subString = substr($word,1,2);
echo "subString : {$subString} \n";

$strsplit = str_split($word); //memecahkan value string menjadi array
var_dump($strsplit);

$explode = explode(" ",$word);//memecahakn value string menjadi array sesuai separotor


$len = strlen($word);
echo "Len : {$len} \n";
;?>