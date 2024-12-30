<?php
/**
 * $_GET adalah array yang telah ditentukan sebelumnya dalam PHP, yang digunakan untuk mengumpulkan
 *  data formulir yang dikirim melalui metode HTTP GET. Array ini berguna setiap kali Anda perlu memproses atau berinteraksi dengan data yang telah diteruskan melalui string kueri URL. Misalnya, jika Anda memiliki formulir dengan metode GET, Anda bisa mendapatkan nilai elemen formulir melalui array global $_GET ini. Berikut contohnya:

<form method="get" action="test.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

Dengan menggunakan $_GET di test.php, Anda dapat mengambil nilai 'fname' dari URL:

echo "Name is: " . $_GET['fname'];
 */

;?>