<?php
/*
Array Functions
count: Menghitung jumlah elemen dalam array.
array_push: Menambahkan elemen ke akhir array.
array_merge: Menggabungkan dua atau lebih array.

refrerensi = https://www.w3schools.com/php/php_ref_array.asp
*/
$array_old = array(
    array('nama' => "mirza", 'usia' => rand(25, 30)),
    array('nama' => "azrim", 'usia' => rand(25, 30)),
    array('nama' => "ahmad", 'usia' => rand(25, 30)),
    array('nama' => "magomedov", 'usia' => rand(25, 30)),
);
array_push($array_old, array('nama' => strrev("muhammad"), 'usia' => rand(23, 26)));
$array_new = [
    ['nama' => "elsa", 'usia' => rand(23, 27)],
    ['nama' => "putri", 'usia' => rand(23, 27)],
    ['nama' => "icha", 'usia' => rand(23, 27)],
];

$array = array_merge($array_old, $array_new);
echo "array push and merge \n";
var_dump($array);
echo "end array \n";
var_dump(end($array)); // mengabil data array paling terakhir

echo "in_array \n";
$ditemukan = false; //variabel menampung kondisi sekarang
foreach ($array as $user) { //melakukan perulangan dari variabel array yang di aliaskan menjadi variabel user
    if (in_array("elsa", $user)) { //in_array tidak bisa di gunakan dalam array multidemension in_arrayy hanya bisa mencari value bukan key
        $ditemukan = true; //jika kondisi di temukan ubah variabel jadi true
        break;             //break untuk memberhentikan proses perulangan foreach
    }
}
if ($ditemukan) {
    echo "ditemukan \n";
} else {
    echo "tidak ditemukan \n";
}

/**  
array column mirip dengan foreach
 $output = [];
 foreach ($array as $user) {
     $output[] = $user['nama'];
 } 
var_dump($output);
 */

echo "array column \n";
$array_column = array_column($array, 'nama');
var_dump($array_column);
echo "Countable array => " . count($array); // menghitung jumlah data array
