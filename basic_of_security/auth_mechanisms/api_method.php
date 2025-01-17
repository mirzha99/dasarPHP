<?php
$datas =  [];

if (file_exists('data.php')) {
    require_once "data.php";
    if(isset($dataUser)){
        $datas =  $dataUser;
    }
    
}

function handleMsg($type, $msg)
{
    $response_array  = function ($type, $result, $status_code) {
        http_response_code($status_code);
        $data = [
            "status_code" => $status_code,
            "{$type}" => $result,
        ];
        echo json_encode($data);
    };
    switch ($type) {
        case "msg":
            return $response_array($type, $msg, 200);
            break;
        case "success":
            return $response_array($type, ['data'=>$msg], 200);
            break;
        case "error":
            return $response_array($type, $msg, 404);
        break;
        case "error_auth":
            return $response_array($type, $msg, 401);
        break;
        default:
            return null;
            break;
    }
}

function getUser()
{
    global $datas;
    if(empty($datas)){
        handleMsg('error',['data kosong']);
    }else{
        handleMsg('success', $datas);
    }
    
}

;?>
