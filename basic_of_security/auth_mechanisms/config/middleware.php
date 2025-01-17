<?php 
// Fungsi untuk memvalidasi token
function authenticate() {
    $headers = apache_request_headers(); // Mendapatkan semua header
    if (isset($headers['Authorization'])) {
        $authHeader = $headers['Authorization'];
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1]; // Token dari header
            if ($token === $_ENV['BEARER']) {
                return true; // Token valid
            }
        }
    }
    handleMsg('error_auth', 'Unauthorized access'); // Token tidak valid
    exit();
}
;?>