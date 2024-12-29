<?php
/*
    if else 
        adalah conditional statement untuk menentukan sebuah kodisi sebelumm kode di jalankan. if else 
    hanya  menerima parameter tipe data boolean, di dalam kondisi tersebut bisa mengunakan 
    operator logika atau operator perbandingan.


        if(kondisi){
            //kode dijalakan jika kondisi benar
        }else{
            //kode dijalankan jika kondisi salah
        }
    */
echo "if else\n";
$password = "12345";
$message = "";
if ($password == "12345") {
    $message = "Password benar";
} else {
    $message = "Password salah";
}

echo $message;

echo "\n";
//if else bercabang
echo "if else bercabang \n";
$nilai = 49;
$jurusan = "IPS";
if ($jurusan == "IPA") {
    if ($nilai >= 90) {
        echo "Sempurna";
    } else if ($nilai >= 80) {
        echo "Baik";
    } else if ($nilai >= 60) {
        echo "Cukup";
    } else {
        echo "Kurang";
    }
} else if ($jurusan == "IPS") {
    if ($nilai >= 80) {
        echo "Sempurna";
    } else if ($nilai >= 70) {
        echo "Baik";
    } else if ($nilai >= 50) {
        echo "Cukup";
    } else {
        echo "Kurang";
    }
} else {
    echo "Jurusan Tidak Ada";
}
echo "\n";

echo "Ternary Operator\n";
$password = "123";
/**
    Tenary Operator 
hanya bisa membuat kondisi if else saja tidak bisa becabang
dengan ternary operator kita bisa membuat kondisi dalam 1 baris 
contoh 
    (kondisi) ? (statement benar) : (statement salah);
 */
echo  ($password == "1231") ? "Password Benar\n" : "Password Salah\n"; 


echo "Switch\n";
$hari = "rabu";
switch ($hari) {
    case "senin" || "rabu":
        echo "Semangat jadi lebih baik lagi";
        break;
    case "selasa":
        echo "mantap";
        break;
    default:
        echo "semoga jadi lebih baik";
};
