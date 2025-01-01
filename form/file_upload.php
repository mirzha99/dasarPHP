<?php
$method = strtolower($_SERVER['REQUEST_METHOD']);

header("Content-Type: application/json");

$msg = function ($msg, $status_code) {
    http_response_code($status_code);
    $result = [
        'message' => $msg,
        'status_code' => $status_code,
    ];
    echo json_encode($result);
    exit();
};

switch ($method) {
    case 'get':
        echo "get";
    break;
    case 'post':
        //check apakah form file gambar ada ?
        if (isset($_FILES['gambar'])) {
            $gambar = $_FILES['gambar'];
            //check apakah file gambar ada ?
            if ($gambar['error'] == 4) {
                $msg("Gambar Tidak Ada", 404);
            }
            // Mendapatkan MIME tipe file
            $mimeType = mime_content_type($gambar['tmp_name']);
            // extension yang di izinkan
            $allowedMimeTypesImage = ['image/jpeg', 'image/png', 'image/gif'];
            //check mime tipe file apakah sesuai dengan yang di izinkan
            if (!in_array($mimeType, $allowedMimeTypesImage)) {
                $msg("{$mimeType} tidak dizinkan", 401);
            }
            //check size gambar
            if($gambar['size'] > 5 * 1024 * 1024){
                $msg("size {$gambar['size']} terlalu besar", 413);
            }

            //buat folder untuk uploads jika tidak ada
            $upload_dir = __DIR__ .'/uploads/';
            if(!is_dir($upload_dir)){
                mkdir($upload_dir, 0755,true);
            }
            //tujuan file mau di simpan
            $destination = $upload_dir.time()."_".basename($gambar['name']);
            if(move_uploaded_file($gambar['tmp_name'],$destination)){
                $msg("gambar berhasil diupload",200);
            }else{
                $msg("gambar gagal diupload",500);
            }
        }
    break;
    default:
    $msg('method is not allowed',401);
    break;
}
?>