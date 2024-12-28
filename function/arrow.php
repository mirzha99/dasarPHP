<?php 
$nama = ["arijal","mirza","iqbal"];
$users = [
    ['id'=>rand(1,5),'nama'=>$nama[0]],
    ['id'=>rand(1,5),'nama'=>$nama[1]],
    ['id'=>rand(1,5),'nama'=>$nama[2]],
];

$ids = array_map(function($user){
    return $user['nama'];
}, $users);

var_dump($ids);
$squre = fn($x,$y) => $x + $y;
echo $squre(8,1);
;?>