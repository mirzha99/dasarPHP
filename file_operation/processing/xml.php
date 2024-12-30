<?php
//xml
$dataUser = simplexml_load_file('dataUser.xml');

if($dataUser === false){
    echo "file xml tidak kebaca";
    foreach(libxml_get_errors() as $erorr){
        echo "\t Error =>" .$erorr->message;
    }
    die;
}

foreach($dataUser->id as $user){
    echo "Nama : ";
    echo $user->nama.PHP_EOL;
    echo "Email : ";
    echo $user->email.PHP_EOL;
}

;?>