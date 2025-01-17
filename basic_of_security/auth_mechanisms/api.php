<?php
require_once 'config/loadenv.php';
require_once 'config/middleware.php';
loadenv(".env");
require_once 'api_method.php';
$_ENV['BEARER'] = getenv("BEARER");

$method = $_SERVER['REQUEST_METHOD'];
header("Content-Type: application/json");

//cors
header("Access-Control-Allow-Origin: http://localhost"); // Izinkan hanya localhost
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Metode yang diizinkan
header("Access-Control-Allow-Headers: Authorization, Content-Type"); // Header yang diizinkan

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Tangani preflight request untuk OPTIONS
    http_response_code(204);
    exit;
}

// Panggil fungsi authenticate sebelum melanjutkan
// $url = $_SERVER["REQUEST_URI"];
// if($url != "/api.php"){
    authenticate();
//}

switch ($method) {
    case "GET":
        getUser();
        break;
    default:
        handleMsg('error','method tidak diizinkan');
    break;
};
