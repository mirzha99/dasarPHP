<?php 
function sum(...$int){
    $hasil = 0;
    foreach($int as $i){
        if(is_int($i)){
            $hasil +=$i;
        }
    }
    echo $hasil;
}

sum(1,2,3,4,5,6,"d");
;?>