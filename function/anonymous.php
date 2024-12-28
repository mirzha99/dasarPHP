<?php 
    /*
    Function Anonymous
         function anonymous pada sebuah fungsi yang bisa di deklarasi tanpa membuat nama fungsi
    biasanya bisa langsung di buat dengan variabel 

    berikut adalah contoh :
    */
    $tambah = function(int $n1,int $n2){ $hasil = $n1 + $n2; return $hasil;};
    $kurang = function(int $n1,int $n2){ $hasil = $n1 - $n2; return $hasil;};
    $kali = function(int $n1,int $n2){ $hasil = $n1 * $n2; return $hasil;};
    $bagi = function(int $n1,int $n2){ $hasil = $n1 / $n2; return $hasil;};

    echo $tambah(1,4)."\n"; //5 
    echo $kurang(1,4)."\n"; //-3 
    echo $kali(1,4)."\n"; //4 
    echo $bagi(1,4)."\n"; //0.25
    
    //setiap function anonymous yang memiliki variabel wajib di akhiri dengan (;)
;?>