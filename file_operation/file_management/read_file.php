<?php 
if(!file_exists('data.php')){
    echo "file data.php tidak di temukan";
  die;
}
$file = fopen("data.php", "r"); 
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    fclose($file);
} else {
    echo 'Error opening file';
}
;?>