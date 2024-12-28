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

$rev = strrev($word); //membalikan string 
echo "Rev : {$rev} \n";

$toUpper = strtoupper($word);// string huruf kapital
echo "Upper : {$toUpper} \n";

$toLower = strtolower($word);// string huruf kecil
echo "lower : {$toLower} \n";

$subString = substr($word,0,9);// menampilkan string dari 0 sampai  akhir kata output Bangsawan 
echo "subString : {$subString} \n";

$strsplit = str_split($word); //memecahkan value string menjadi array
var_dump($strsplit);

$explode = explode(" ",$word);//memecahakn value string menjadi array sesuai separotor


$len = strlen($word);
echo "Len : {$len} \n";
;?>