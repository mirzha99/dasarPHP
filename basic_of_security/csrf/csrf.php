<?php
/*
    Cross-Site Request Forgery (CSRF) 

       CSRF key berfungsi sebagai bagian dari mekanisme perlindungan CSRF token untuk memastikan setiap
     permintaan yang dikirim ke server berasal dari pengguna yang sah. Berikut adalah penjelasan singkat
     tentang fungsinya:

        1. Identitas Unik untuk Token
            CSRF key digunakan untuk menghasilkan CSRF token yang unik bagi setiap sesi pengguna.
           Key ini sering digabungkan dengan informasi lain, seperti ID sesi pengguna, untuk memastikan 
           bahwa token tidak dapat dipalsukan.

        2. Meningkatkan Keamanan Token
            CSRF key memastikan token sulit ditebak oleh penyerang. Biasanya, key ini bersifat rahasia dan 
           hanya diketahui oleh server. Tanpa key ini, token akan lebih mudah diretas.

        3. Validasi Token pada Server
            Ketika server menerima permintaan dari pengguna, server menggunakan CSRF key untuk memvalidasi token 
           yang dikirimkan bersama permintaan. Jika token tidak cocok dengan key atau dianggap tidak valid, permintaan akan ditolak.

        Singkatnya
        CSRF key adalah "kunci rahasia" yang membantu server memastikan bahwa setiap CSRF token yang diterima adalah asli dan sesuai dengan
        sesi pengguna yang sah. Hal ini mencegah serangan CSRF secara efektif.
*/ 
session_start();

function csrf(){
    if(!isset($_SESSION['csrf'])){
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
}
function csrfV($csrf){
    $result = "";
    if(isset($_SESSION['csrf'])){
        if($csrf == $_SESSION['csrf']){
            $result = true;
        }else{
            $result = false;
        }
    }else{
        $result = "CSRF Not Found";
    }
    return $result;
}

function csrfGet(){
    if(isset($_SESSION['csrf'])){
       echo "CSRF =>" .$_SESSION['csrf'].PHP_EOL; 
    }else{
        echo "CSRF Not Found".PHP_EOL;
    }
}

function csrfverify($csrf){
    if(isset($_SESSION['csrf'])){
        if($csrf == $_SESSION['csrf']){
            echo "TRUE".PHP_EOL;
        }else{
            echo "FALSE".PHP_EOL;
        }
    }else{
        echo "CSRF Not Found".PHP_EOL;
    }
}
// while(true){
//     echo "Menu :";
//     $menu = trim(fgets(STDIN));
//     switch($menu){
//         case "1":
//             csrf();
//         break;
//         case "2":
//             csrfGet();
//         break;
//         case "3":
//             echo "CSRF :";
//             $csrf = trim(fgets(STDIN));
//             csrfverify($csrf);
//         break;
//     }
// }
;?>