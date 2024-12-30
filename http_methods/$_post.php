<?php 
/**'
 $_POSTadalah variabel superglobal dalam PHP yang digunakan untuk mengumpulkan data formulir yang dikirimkan melalui metode HTTP POST. 
 Skrip PHP Anda dapat mengakses data ini melalui $_POST. Misalnya, Anda memiliki formulir HTML sederhana di halaman web Anda. 
 Saat pengguna mengirimkan formulir ini, data yang dimasukkan dapat diambil menggunakan $_POST. Berikut contoh singkatnya:

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
}
?>
Dalam kode ini, $_POST["name"]mengambil nilai yang dimasukkan dalam kolom 'nama' pada formulir. 
Selalu berhati-hati saat menggunakannya $_POST karena mungkin berisi input pengguna yang merupakan sumber kerentanan umum. 
Selalu validasi dan bersihkan data sebelum $_POST menggunakannya.

Kunjungi sumber daya berikut untuk mempelajari lebih lanjut:
 */
;?>