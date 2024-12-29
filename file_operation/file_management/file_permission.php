<?php

/**
 
Izin	    Pemilik (rwx)	    Grup (rwx)	    Lainnya (rwx)
Oktal	    7 (rwx)        	    5 (r-x)	        0 (---)
Biner	    111	                101	            000

Contoh      Izin Umum dalam Oktal dan Biner

Izin	    Oktal	Biner	        Arti
rwxr-xr-x	755	    111 101 101	    Baca, Tulis, Eksekusi untuk pemilik, baca dan eksekusi untuk grup dan lainnya
rw-r--r--	644	    110 100 100	    Baca dan Tulis untuk pemilik, Baca untuk grup dan lainnya
rwxrwxrwx	777	    111 111 111	    Izin penuh untuk pemilik, grup, dan lainnya
rw-------	600	    110 000 000	    Baca dan Tulis untuk pemili

$file = 'data_user.php';

// Set izin file menjadi rwxr-xr-x (755 dalam oktal)
chmod($file, 0755);

// Set izin file menjadi rw-r--r-- (644 dalam oktal)
chmod($file, 0644);

// Set izin file menjadi rw------- (600 dalam oktal)
chmod($file, 0600);

 */
//izin kan file hanya membaca saja
function menu(){
    echo "
    ===============================
    1. ubah file data hanya baca
    2. ubah file data bisa menulis
    3. exit 
    ===============================
    ";
}
while(true){

    menu();
    echo "Pilih Menu :";
    $menu = trim(fgets(STDIN));
    switch ($menu){
        case 1:
            chmod('data.php', 0444);
        break;
        case 2:
            chmod('data.php', 0777);
        break;
        default:
        echo "Bye....";
        exit;
        break;
    }
}

;?>