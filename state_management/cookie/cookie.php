<?php
if (isset($_POST['submit'])) {
    // Mendefinisikan nama dan nilai cookie
    $nama_cookie = $_POST['nama_cookie'];  // Nama cookie yang akan disimpan
    $value = $_POST['value'];           // Nilai yang akan disimpan dalam cookie

    // Mengatur waktu kedaluwarsa cookie (1 jam dari saat ini)
    $expire = time() + 3600;    // Fungsi time() mengembalikan waktu sekarang dalam detik. 3600 detik = 1 jam

    // Menentukan path cookie agar bisa diakses di seluruh website
    $path = "/";                // Jika diatur "/", cookie dapat diakses di seluruh domain. Bisa dibatasi dengan path seperti "/admin/".

    // Menentukan domain cookie (opsional, jika ingin mengatur domain khusus untuk cookie)
    $domain = "";               // Biarkan kosong untuk menggunakan domain saat ini

    // Menentukan apakah cookie hanya bisa diakses melalui HTTPS (secure)
    $secure = false;            // Jika true, cookie hanya akan dikirim melalui koneksi HTTPS (sangat direkomendasikan untuk situs dengan HTTPS)

    // Menentukan apakah cookie hanya bisa diakses melalui HTTP (untuk mencegah XSS)
    $httponly = true;           // Mengatur cookie hanya bisa diakses melalui HTTP (mengurangi risiko serangan XSS)

    // Mengatur cookie
    setcookie($nama_cookie, $value, $expire, $path, $domain, $secure, $httponly);
    header("Location: index.php");
}
if (isset($_POST['submit_del'])) {
    //Hapus Cookie
       // Mendefinisikan nama dan nilai cookie
       $nama_cookie = $_POST['nama_cookie'];  // Nama cookie yang akan disimpan
       $value = '';           // Nilai yang akan disimpan dalam cookie
   
       // Mengatur waktu kedaluwarsa cookie (1 jam dari saat ini)
       $expire = time() - 3600;    // Mengurangi Waktu yang sudah di set kurang 1 jam
   
       // Menentukan path cookie agar bisa diakses di seluruh website
       $path = "/";                // Jika diatur "/", cookie dapat diakses di seluruh domain. Bisa dibatasi dengan path seperti "/admin/".
   
       // Menentukan domain cookie (opsional, jika ingin mengatur domain khusus untuk cookie)
       $domain = "";               // Biarkan kosong untuk menggunakan domain saat ini
   
       // Menentukan apakah cookie hanya bisa diakses melalui HTTPS (secure)
       $secure = false;            // Jika true, cookie hanya akan dikirim melalui koneksi HTTPS (sangat direkomendasikan untuk situs dengan HTTPS)
   
       // Menentukan apakah cookie hanya bisa diakses melalui HTTP (untuk mencegah XSS)
       $httponly = true;           // Mengatur cookie hanya bisa diakses melalui HTTP (mengurangi risiko serangan XSS)
   
       // Mengatur cookie
       setcookie($nama_cookie, $value, $expire, $path, $domain, $secure, $httponly);
    header("Location: index.php");
};
