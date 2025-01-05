<?php
function menuList()
{
    echo "
    ================================
    | 1. filter id                 |
    | 2. filter input              |
    | 3. filter array              |
    | 4. filter var                |
    ================================
    ";
}

function  menu($menu)
{
    switch ($menu) {
        case 1:
            filter_ids();
            break;
        case 4:
            filter_vars();
            break;
        case "exit";
            echo "Bye..." . PHP_EOL;
            exit();
            break;
        default;
            echo "menu {$menu} tidak ada";
            break;
    }
}

function filter_ids()
{
    echo "Masukan Email :";
    $email = trim(fgets(STDIN));
    $filter_id = filter_id('email');
    if (filter_id($filter_id) !== false && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "yes";
    } else {
        echo "no";
    }
}
function filter_vars() {
    echo "4. Filter Var".PHP_EOL;
    echo "Masukan Email :";
   $email = trim(fgets(STDIN));
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email Not Found".PHP_EOL;
    }else{
        echo "Email {$email} Found".PHP_EOL;
    }
    echo "Masukan Url :";
    $url = trim(fgets(STDIN));
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        echo "Url Not Found".PHP_EOL;
    }else{
        echo "Url {$url} Found".PHP_EOL;
    }
}
while (true) {
    menuList();
    echo "Menu :";
    $menu = trim(fgets(STDIN));
    menu($menu);
};
