<?php
function loadenv($file){
    if (!file_exists($file)) {
        echo "file {$file} tidak ditemukan" . PHP_EOL;
    }
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        //abaikan komentar #
        if (strpos(trim($line), "#") === 0) {
            continue;
        }
        list($key,$value) = explode("=",$line,2);
        $key = trim($key);
        $value = trim($value);
        putenv("{$key}={$value}");
    }
}

?>
