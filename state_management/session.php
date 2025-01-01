<?php
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