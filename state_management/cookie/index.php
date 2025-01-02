<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Atur body untuk menggunakan flexbox dan memusatkan konten */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Container untuk form dan tabel */
        .container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        /* Atur tabel agar tampil lebih rapi */
        table,
        th,
        td {
            margin: 10px;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
        }

        /* Tombol merah */
        .btn-red {
            background-color: red;
            border-radius: 20px;
            color: black;
            padding: 5px 10px;
        }

        .btn-red:hover {
            background-color: darkred;
        }

        .btn-yellow {
            background-color: yellow;
            border-radius: 20px;
            color: black;
            padding: 5px 10px;
        }

        .btn-yellow:hover {
            background-color: darkred;
        }
    </style>
    <title>Cookies</title>
</head>

<body>
    <div class="container">
        <h1>Cookie</h1>
        <form action="cookie.php" method="post">
            <input type="text" name="nama_cookie" placeholder="nama cookie">
            <input type="text" name="value" placeholder="value">
            <button type="submit" name="submit">Ok</button>
        </form>
        <table>
            <!-- thead  -->
            <tr>
                <th>No</th>
                <th>Nama Cookie</th>
                <th>Value Cookies</th>
                <th>Aksi</th>
            </tr>
            <!-- tbody -->
            <?php $i = 1; foreach ($_COOKIE as $cookie_name => $cookie_value): ?>
            <tr>
                <td><?= $i++; ?>.</td>
                <td><?= $cookie_name ?></td>
                <td><?= $cookie_value ?></td>
                <td>
                    <form action="cookie.php" method="post">
                        <input type="hidden" name="nama_cookie" value="<?= $cookie_name ?>">
                        <button type="submit" name="submit_del" class="btn-red">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
