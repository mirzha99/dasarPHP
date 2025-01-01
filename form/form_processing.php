<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prosessing</title>
</head>
<body>
    <form action="/form_processing.php" method="post">
        <input type="text" name="nama" value="<h1>Muhammad Mirza</h1>">
        <button type="submit">Ok</button>
    </form>
</body>
</html>

<?php
/*
Pemrosesan formulir merupakan fungsi web umum dan dalam PHP, pemrosesannya cukup mudah. 
​​Pemrosesan formulir biasanya melibatkan penerimaan data dari pengguna melalui formulir web,
lalu menggunakan PHP untuk menangani, memproses, dan mungkin menyimpan data tersebut. 
PHP menyediakan array superglobal ( $_GET, $_POST, dan $_REQUEST) yang membantu mengumpulkan data formulir. 
Mari kita bahas contoh sederhana formulir yang menerima nama dari pengguna, lalu menampilkannya.

Pastikan untuk menangani data formulir dengan aman, misalnya dengan menggunakan htmlspecialchars() 
fungsi untuk menetralkan karakter yang berbahaya.
*/
    if(isset($_POST['nama'])){
        echo "Tanpa html Spesial Chars : ".$_POST['nama'].PHP_EOL;
        echo "html Spesial Chars : ". htmlspecialchars($_POST['nama'].PHP_EOL);
    }
;?> 