<?php 
$data = [
    ['nama'=>'Mirza','nim'=>'171041020030','jk'=>'laki-laki'],
    ['nama'=>'Teuku Umar','nim'=>'171041020031','jk'=>'laki-laki'],
    ['nama'=>'Cut nyak dien','nim'=>'171041020032','jk'=>'Perempuan'],
    ['nama'=>'Panglima Polem','nim'=>'171041020033','jk'=>'laki-laki'],
];
if(is_writable('data.php')){
    $file =  fopen('data.php','w');
    fwrite($file,"<?php\n\$data = ".var_export($data,true)."\n;?>");
    fclose($file);
}else{
    echo "file ini tidak bisa di tulis";
}

;?>