<?php
/*
        Operator Arimatika

        + = pertambhan
        - = pengurangan
        * = perkalian
        / = peembagian 

    */
$a_nilai1 = 3;
$a_nilai2 = 2;
$a_hasil = $a_nilai1 + $a_nilai2;

echo  $a_hasil . "\n";

/*
        Operator Perbandingan

        !=  : tidak dengan sama dengan
        ==  : sama dengan
        >=   : lebih besar sama dengan
        <=   : lebih kecil sama dengan
        >   : lebih besar
        <   : lebih kecil
    */

$p_nilai1 = 3;
$p_nilai2 = 2;
// != tidak sama dengan
$p_hasil = ($p_nilai1 != $p_nilai2); //true
var_dump($p_hasil);
// == sama dengan
$p_hasil = ($p_nilai1 == $p_nilai2); //false
var_dump($p_hasil);
// >= lebih besar sama dengan
$p_hasil = ($p_nilai1 >= $p_nilai2);
var_dump($p_hasil); // true
// <= lebih kecil sama dengan
$p_hasil = ($p_nilai1 <= $p_nilai2);
var_dump($p_hasil); // false
// > lebih besar
$p_hasil = ($p_nilai1 > $p_nilai2);
var_dump($p_hasil); // true
// < lebih kecil
$p_hasil = ($p_nilai1 < $p_nilai2);
var_dump($p_hasil); // false

/* 
    Operator Logika
    && = dan (And) jika ada kondisi true dan false maka menghasilkan false
    || = atau (Or) jika ada kondisi true atau false maka menghasilkan true
*/
echo "Operator Logika \n";

$benar = true;
$salah = false;
// && And
$p_hasil = ($benar && $salah);
var_dump($p_hasil); // false
// || Or
$p_hasil = ($salah || $benar);
var_dump($p_hasil); // true


;
