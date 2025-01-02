<?php
/*
Session dalam PHP
    Session adalah mekanisme penyimpanan data sementara di sisi server yang digunakan untuk mempertahankan
informasi antara permintaan (requests) pada aplikasi web. Data yang disimpan dalam session tidak terlihat 
oleh pengguna dan tidak disimpan di browser mereka, berbeda dengan cookie yang disimpan di sisi klien.

Kegunaan Session:
    1. Autentikasi Pengguna (User Login):
        Session memungkinkan aplikasi untuk menyimpan informasi pengguna yang telah login, 
      seperti ID pengguna atau status login, sehingga pengguna tidak perlu login ulang setiap 
      kali berpindah halaman.

    2. Flash Messages:
        Flash messages adalah pesan singkat yang sering digunakan untuk memberikan umpan balik 
       kepada pengguna setelah mereka melakukan suatu tindakan (misalnya, mengisi formulir atau 
       berhasil login). Session dapat menyimpan pesan ini sementara, sehingga hanya ditampilkan 
       satu kali dan kemudian dihapus setelah dilihat oleh pengguna.

    3. Menjaga Data antar Halaman:
         Session dapat menyimpan data yang harus tetap tersedia selama pengguna berada dalam satu
        sesi, seperti item dalam keranjang belanja di aplikasi e-commerce.
    
Cara Kerja Session:
    1. Memulai Session:
        Sebelum menggunakan session, Anda perlu memulai session dengan memanggil session_start(). 
       Ini akan memeriksa apakah ada session yang sudah ada, atau jika belum, akan membuat session baru.

    2. Menyimpan Data dalam Session:
        Data dapat disimpan dalam session menggunakan array global $_SESSION. Data ini dapat berupa informasi
       apa saja yang perlu dipertahankan antar halaman, seperti status login atau data formulir.

    3. Mengakses Data Session:
        Setelah data disimpan dalam session, Anda dapat mengaksesnya kapan saja selama sesi tersebut aktif.

    4. Menghapus Data dalam Session:
        Untuk menghapus data tertentu dari session, Anda dapat menggunakan fungsi unset() pada variabel $_SESSION.
    
    5. Menghancurkan Session:
        Jika Anda ingin menghapus seluruh data dalam session dan menghentikan sesi, Anda dapat menggunakan session_destroy().
       Ini akan menghapus semua data yang terkait dengan session tersebut.

Keamanan Session:
    1. Melindungi Data Session:
        Karena data session disimpan di sisi server, hal yang perlu diperhatikan adalah keamanan pengelolaannya. Pastikan menggunakan 
       session dengan benar agar data sensitif tidak mudah diakses oleh pihak yang tidak berwenang. Gunakan HTTPS untuk mengenkripsi 
       komunikasi data dan hindari menyimpan informasi sensitif langsung dalam session tanpa perlindungan yang memadai.
    2. Session Hijacking:
        Keamanan session harus dijaga dari potensi ancaman seperti session hijacking, di mana pihak ketiga mencoba mencuri session ID.
       Untuk mengurangi risiko ini, pastikan session ID diubah secara berkala dan hanya digunakan di koneksi yang aman (HTTPS).
 */
 session_start();
function menu(){
    echo "
    =============================================
    | 1. set session                            |
    | 2. get session                            |
    | 3. delete session                         |
    | 4. destroy all session                    |
    =============================================
    ";
}
function setSession(){
    echo "Masukan Nama Session : ";
    $name_session = trim(fgets(STDIN));
    echo "Masukan Value Session :";
    $value_session = trim(fgets(STDIN));
    $_SESSION[$name_session] = $value_session;
}
function getSession(){
    var_dump($_SESSION);
}
function delSession(){
    echo "Masukan Nama Session : ";
    $name_session = trim(fgets(STDIN));
    if(isset($_SESSION[$name_session])){
        unset($_SESSION[$name_session]);
        echo "session {$name_session} berhasil dihapus";
    }else{
        echo "session {$name_session} tidak ditemukan";
    }
}
function destroySession(){
    session_destroy();
    $_SESSION = [];
    echo "semua session telah di hancurkan";
}
while(true){
    menu();
    echo "Menu :";
    $menu = trim(fgets(STDIN));
    switch($menu){
        case 1:
            setSession();
        break;
        case 2:
            getSession();
        break;
        case 3:
            delSession();
        break;
        case 4:
            destroySession();
        break;
        default:
        exit();
        break;
    }
}
;?>