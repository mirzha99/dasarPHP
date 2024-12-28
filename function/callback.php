<?php 
//function callback
function string($nama, $callback = null){
    $result = [
        'upper'=>strtoupper($nama),
        'lower'=>strtolower($nama),
    ];

    if(is_callable($callback)){
        $newResult = [
            'rev'=>strrev($nama),
            'str_split'=>str_split($nama),
        ];

        $results = array_merge($result,$newResult);
        return call_user_func($callback,$results);
    }else{
        return $result;
    }
}
//pemanggilan callback
string("mirza", function($data){
    echo $data['rev']."\n";
});
//gabungan dari anonymous function dan callback
$palindrome = function($kata){
    return string($kata, function($stringCallback){
       $strsplit = $stringCallback['str_split'];
       $kataJadi = "";
        for($i=count($strsplit) - 1; $i >= 0; $i--){
          $kataJadi .=   $strsplit[$i];
        }
        $kata = $stringCallback['lower'];

        if(strtolower($kataJadi) === $kata){
           return "{$kata} is Palindrome";
        }else{
            return "{$kata} not Palindrome";
        }
        
    });
};

echo $palindrome('lol');
;?>