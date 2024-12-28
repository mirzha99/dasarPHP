<?php 
function Countdonw($count){
    echo $count;
    if($count > 0 ){
        echo Countdonw($count - 1);
    }
}

echo Countdonw(8);
;?>