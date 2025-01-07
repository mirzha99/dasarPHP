<?php 
/**
    password hash adalah function bawaan php yang mengubah rangkaian huruf yang rumit di sebut sebagai chipetext
    password verify adalah function bawaan php yang memverifikasi password hash apakah cocok dengan password function ini mengembalikan nilai bool
 */
function menu(){
    echo "
    +======================+
    |1. set password       |
    |2. get password hash  |
    |3. verify password    |
    |4. exit CLI           |
    +======================+
    ";
}
$password_hash = "";
function set_password(){
    echo "Set Password :";
    $password = trim(fgets(STDIN));
    global $password_hash;
    $password_hash = password_hash($password,PASSWORD_DEFAULT);
    echo "Berhasil Set Password".PHP_EOL;
}
function get_password_hash($password_hash){
    if(empty($password_hash)){
        echo "Password Belum di set".PHP_EOL;
    }else{
        echo "Password Hash : {$password_hash}".PHP_EOL;
    }
}
function verify_password($password_hash){
    echo "Masukan Password Anda :";
    $password = trim(fgets(STDIN));
    if(password_verify($password,$password_hash)){
        echo "Password Benar".PHP_EOL;
    }else{
        echo "Password Salah".PHP_EOL;
    }
}

while(true){
    menu();
    echo "Menu :";
    $menu = trim(fgets(STDIN));
    switch($menu){
        case "1":
            set_password();
        break;
        case "2":
            get_password_hash($password_hash);
        break;
        case "3":
            verify_password($password_hash);
        break;
        case "4":
            exit();
        break;
        default:
            echo "Menu {$menu} tidak ada !".PHP_EOL;
        break;
    }
}
;?>