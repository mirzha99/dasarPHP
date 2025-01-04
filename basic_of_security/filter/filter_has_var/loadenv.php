<?php
function loadenv($file)
{
    if (!file_exists($file)) {
        die('File .env not found');
    }

    //baca tiap baris file .env
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        //abaikan komentar #
        if (strpos(trim($line), "#") === 0) {
            continue;
        }

        //pisahkan key dan value berdasarkan =
        list($key,$value) = explode('=',$line,2);
        
        $key = trim($key);
        $value = trim($value);
        //set variabel env (lingkungan)
        putenv("$key=$value");
    }
}
loadenv('.env');
;?>
