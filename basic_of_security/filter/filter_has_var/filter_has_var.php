<?php 
    /*
    filter_has_array => berfungsi untuk pengecekan sebuah variabel

     Syntax : filter_has_var(type, variable);

    Parameter Values
        Parameter	Description
        type	    Required. The input type to check for. Can be one of the following:
                I   INPUT_GET
                    INPUT_POST
                    INPUT_COOKIE
                    INPUT_SERVER
                    INPUT_ENV 
        variable	Required. The variable name to check
     */
    header("Content-Type: application/json");
    require_once 'loadenv.php';

    $method = $_SERVER['REQUEST_METHOD'];
    $msg = function($msg,$statusCode){
        http_response_code($statusCode);
        $data = [
            'message'=>$msg,
            'status_code'=>$statusCode
        ];
        echo json_encode($data);
    };
    switch(strtolower($method)){
        case 'get':
            if(filter_has_var(INPUT_GET,'email')){
                $msg("variabel email found => {$_GET['email']}",200);
            }else{
                $msg('variabel email not found',404);
            }
            if(filter_has_var(INPUT_COOKIE,'zakey')){
                $msg("variabel cookie found => {$_COOKIE['zakey']}",200);
            }else{
                $msg('variabel cookie not found',404);
            }
            if (filter_has_var(INPUT_SERVER, 'HTTP_HOST')) {
                $msg("Variabel 'HTTP_HOST' tersedia: " . $_SERVER['HTTP_HOST'],200);
            } else {
                $msg("Variabel 'HTTP_HOST' tidak ditemukan.",404);
            }
             //dikarenakan filter env tidak dapat dilakukan maka ada opsi lain
            $_ENV['API_KEY'] = getenv('API_KEY');
            if($_ENV['API_KEY']){
                $msg(['env_key'=> 'API_KEY','env_value'=>$_ENV['API_KEY']],200);
            }else{
                $msg(['env'=>'API_KEY tidak di temukan'],404);
            }
        break;
        case 'post':
            //form-data
            if(filter_has_var(INPUT_POST,'nama')){
                $msg("nama found => {$_POST['nama']}",200);
            }else{
                $msg('nama not found',404);
            }
        break;
        
        default:
            echo json_encode(['method not allowed']);
        break;
    }
;?>
