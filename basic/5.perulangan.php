<?php
echo "for \n";
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo '* ';
    }
    echo "\n";
}
echo "while \n";
$nilai = 0;
while ($nilai <= 10) {
    echo $nilai . "\n";
    $nilai++;
}
echo "do while \n";
$dowhile = 0;
do {
    echo $dowhile . "\n";
    $dowhile++;
} while ($dowhile < 10);
echo "foreach \n";
/*
    foreach hanya berlaku untuk array dan object
*/
$data = [
    ['nama'=>'mirza'],
    ['nama'=>'iqbal'],
    ['nama'=>'najwa'],
];
$output = [];
foreach ($data as $key=>$value) {
    echo $key ."=>".$value['nama']."\n";
};


