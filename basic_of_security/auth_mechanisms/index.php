<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth Mechanisms</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">Auth Mechanisms</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Asal</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <!-- Data akan dimasukkan di sini oleh JavaScript -->
        </tbody>
    </table>

<script>
    urlApi = "http://localhost:8080/";
    keyBearer = "za31";
    fetch(urlApi,{
        headers:{Authorization: `Bearer ${keyBearer}`}
    }).then(reps => reps.json()).then(data =>{
        const tableBody = document.getElementById('table-body');
           // Clear isi tabel sebelumnya
           tableBody.innerHTML = '';
        const dataUser = data.success.data;
        
        dataUser.forEach((data , index) => {
            const i = 1;
            const row = document.createElement('tr');
            row.innerHTML=
                `
                <td>${index + 1}</td>
                <td>${data.nama}</td>
                <td>${data.asal}</td>
                `;
            tableBody.appendChild(row);
        });
    });

</script>
   
</body>

</html>