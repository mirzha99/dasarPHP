<?php
$data = [];
$id = 1;
if(file_exists('save.php')){
    include "save.php";
    if(isset($save)){
        $id = end($save)['id'] + 1 ;
        var_dump($id);
    }
  
}else{
    echo "save.php tidak di temukan";
}
function headTabel(){
    echo "id\tword\t\t\tstatus\t\t\t\tdate\n";
}
function bodyTabel($d){
    echo "{$d['id']}\t{$d['word']}\t\t\t{$d['status']}\t\t\t\t{$d['date']}\n";
}
function showDataPalindrome(){
    headTabel();
   global $save;
   foreach($save as $data){
        bodyTabel($data);
   }

}
function addPalidrome(&$data,&$id){
    echo "Masukan Kata :";
    $word = trim(fgets(STDIN));
    $split = str_split($word);
    $palindrom = ""; 
    $status = "";
    for($i = count($split) -1; $i >= 0; $i--) {
        $palindrom .= $split[$i];
    }
    if($word == $palindrom){
        $status = "{$word} is Palindrome";
    }else{
        $status = "{$word} not Palindrome";
    }
    date_default_timezone_set('Asia/jakarta');
    $data[] = [
        'id'=> $id ++,
        'word'=>$word,
        'status'=>$status,
        'date'=>date('d-m-Y (H:i:s)'),
        'timestamp'=> time()
    ];
    
    $file = fopen("save.php","w");
    fwrite($file,"<?php\n\$save = ". var_export($data,true).";\n?>");
    fclose($file);
}
while(true){
    echo "Pilih Menu :";
    $menu = trim(fgets(STDIN));
    switch($menu){
        case 1:
            showDataPalindrome();
        break;
        case 2:
            addPalidrome($data,$id);
        break;
    }
}

;?>