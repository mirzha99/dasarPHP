<?php 
$file = fopen('dataUser.csv','r');

if(!$file){
    echo "Terjadi kesalah izin file atau file tidak di temukan";
    exit;
}
$headerCsv = fgetcsv($file, 1000,","); // mengambil semua data di baris pertama biasanya jadi header

$csvtojson = [];
    while(($handle = fgetcsv($file, 1000,",")) !== false ){
        $csvtojson[] = array_combine($headerCsv,$handle);
    }
$result = json_encode($csvtojson);

echo $result;
;?>