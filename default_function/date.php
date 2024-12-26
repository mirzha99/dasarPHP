<?php 
/*
Date/Time Functions
date: Mengembalikan tanggal atau waktu dalam format tertentu.
time: Mengembalikan timestamp saat ini.
strtotime: Mengonversi string tanggal ke timestamp.

Refrerensi : https://www.w3schools.com/php/php_ref_date.asp
*/
function helperdate(int $timestamp = null,string $format = null){
    if(!$format){
          $format = "d-m-Y (H:i:s)";
    }else{
        $format = $format;
    }
    return date($format,$timestamp);
}
function helperstrtime(string $strtotime = null){
    if(!$strtotime){
        return time();
    }else{
        $strtotime = strtotime($strtotime);
        if($strtotime){
            return $strtotime;
        }else{
            return "format salah ('tahun-bulan-tanggal jam:menit:detik')";
        }
    }
    
}

echo helperdate(null,'d-m-Y (H:i:s)'). "\n";
echo helperstrtime("1999-07-31 06:59:23")."\n";
echo date_default_timezone_get(). "\n"; //mengabil data default zona waktu => UTC
date_default_timezone_set('Asia/jakarta');//atur default zona waktu Asia/jakarta
echo date_default_timezone_get() ."\n";//mengabil data default zona waktu => Asia/jakarta
echo helperdate(null,'d-m-Y (H:i:s)'). "\n";
echo helperstrtime("1999-07-31 06:59:23")."\n";
;?>