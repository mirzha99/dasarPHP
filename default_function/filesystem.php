<?php
/*
fopen: Membuka file.
fwrite: Menulis ke file.
fclose: Menutup file.

Refrerensi : https://www.w3schools.com/php/php_ref_filesystem.asp
*/

/*

fopen(filename, mode, include_path, context);

Parameter       Deskripsi 
filename        Menentukan file atau URL yang akan dibuka

mode            Menentukan jenis akses yang Anda perlukan ke file/aliran.
                Nilai yang mungkin:
                "r"  - Hanya baca. Dimulai di awal file
                "r+" - Baca/Tulis. Dimulai di awal file
                "w"  - Tulis saja. Membuka dan memotong file; atau membuat file baru jika tidak ada.
                       Tempatkan penunjuk file di awal file
                "w+" - Baca/Tulis. Membuka dan memotong file; atau membuat file baru jika tidak ada.
                       Tempatkan penunjuk file di awal file
                "a"  - Tulis saja. Membuka dan menulis sampai akhir file atau membuat file baru 
                       jika tidak ada
                "a+" - Baca/Tulis. Mempertahankan konten file dengan menulis sampai akhir file
                "x"  - Tulis saja. Membuat file baru. Mengembalikan FALSE dan kesalahan jika file 
                       sudah ada
                "x+" - Baca/Tulis. Membuat file baru. Mengembalikan FALSE dan kesalahan jika file
                       sudah ada
                "c"  - Tulis saja. Membuka berkas; atau membuat file baru jika tidak ada.
                       Tempatkan penunjuk file di awal file
                "c+" - Baca/Tulis. Membuka berkas; atau membuat file baru jika tidak ada.
                       Tempatkan penunjuk file di awal file
                "e"  - Hanya tersedia dalam PHP yang dikompilasi pada sistem penyesuaian POSIX.1-2008.

include_path    Opsional  Setel parameter ini ke '1' jika Anda ingin mencari file di include_path 
                (di php.ini) juga

context         Opsional Menentukan konteks pegangan file. Konteks adalah serangkaian opsi yang dapat 
                mengubah perilaku aliran
*/

$file = fopen('za.php', 'x');
fwrite($file, '<?php echo "hello mirza" ;?>');
fclose($file);

unlink('za.php'); // hapus file berdasarkan path directory
