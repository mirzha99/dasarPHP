<?php
$iduser = 1;
$user = [];
if (file_exists('data.php')) {
    require_once 'data.php';
    if (!empty($user)) {
        $iduser = end($user)['id'] + 1;
    }
}

function menu()
{
    echo "===================================\n";
    echo "1. Tambah User \n";
    echo "2. Tampil User \n";
    echo "3. Cari User \n";
    echo "4. Edit User \n";
    echo "5. Hapus User\n";
    echo "===================================\n";
    echo "Pilih Menu :";
}
function add(&$user, &$iduser)
{
    echo "Nama :";
    $nama = trim(fgets(STDIN));
    echo "Email :";
    $email = trim(fgets(STDIN));
    echo "Alamat :";
    $alamat = trim(fgets(STDIN));

    $user[] = [
        'id' => $iduser++,
        'nama' => $nama,
        'email' => $email,
        'alamat' => $alamat
    ];

    // Menyimpan data ke file
    $file = fopen('data.php', 'w');
    fwrite($file, "<?php\n\$user = " . var_export($user, true) . ";\n?>");
    fclose($file); 
}

function data($user)
{
    echo "Id \t Nama \t\t Email \t\t\t\t\t\t Alamat \t\t\t\t\n";
    if (empty($user)) {
        echo "Data Kosong\n";
    }
    foreach ($user as $u) {
        echo "{$u['id']} \t {$u['nama']} \t\t {$u['email']}\t\t\t {$u['alamat']} \t\t\t\t\n";
    }
}
function cari($user)
{
    echo "Cari :";
    $search = trim(fgets(STDIN));
    $found = false;
    echo "Id \t Nama \t\t Email \t\t\t\t\t\t Alamat \t\t\t\t\n";
    foreach ($user as $u) {
        if ($u['id'] == $search) {
            $found = true;
            echo "{$u['id']} \t {$u['nama']} \t\t {$u['email']}\t\t\t {$u['alamat']} \t\t\t\t\n";
        }
    }
    if (!$found) {
        echo "data id {$search} tidak ditemukan\n";
    }
}
function edit(&$user){
    echo "pilih id yang mau di edit :";
    $iduser = trim(fgets(STDIN));
    $found = false;

    foreach($user as $key=>$u){
        if($iduser == $u['id']){
            $found = true;
            echo "Nama :";
            $editNama = trim(fgets(STDIN));
            $user[$key]['nama'] =$editNama;
            echo "Email :";
            $editEmail = trim(fgets(STDIN));
            $user[$key]['email'] =$editEmail;
            echo "Alamat :";
            $editAlamat = trim(fgets(STDIN));
            $user[$key]['alamat'] =$editAlamat;
            echo "user id {$iduser} berhasil di edit \n";
            break;
        }
    }
    if(!$found){
        echo "data id {$iduser} tidak ditemukan\n";
    }else{
          // Menyimpan data ke file
          $file = fopen('data.php', 'w');
          fwrite($file, "<?php\n\$user = " . var_export($user, true) . ";\n?>");
          fclose($file); 
    }
}
function hapus(&$user)
{
    echo "Hapus ID user :";
    $iduser = trim(fgets(STDIN));
    $found = false;
    foreach ($user as $key=>$u) {
        if ($u['id'] == $iduser) {
            $found = true;
            unset($user[$key]);
            echo "user {$u['nama']} berhail dihapus {$key}\n";
            break;
        }
    }
    if (!$found) {
        echo "data id {$iduser} tidak ditemukan\n";
    } else {
        // Menyimpan data ke file
        $file = fopen('data.php', 'w');
        fwrite($file, "<?php\n\$user = " . var_export($user, true) . ";\n?>");
        fclose($file); 
    }
}
while (true) {
    menu();
    $menu = trim(fgets(STDIN));

    switch ($menu) {
        case 1:
            add($user, $iduser);
            break;
        case 2:
            data($user);
            break;
        case 3:
            cari($user);
            break;
        case 4:
            edit($user);
            break;
            case 5:
                hapus($user);
                break;
        default:
            exit();
            break;
    }
};
