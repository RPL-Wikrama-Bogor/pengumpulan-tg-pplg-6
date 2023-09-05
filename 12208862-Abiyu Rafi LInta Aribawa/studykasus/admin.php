<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/e/e2/Lambang_Kabupaten_Bogor.png" />
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .hom{
            margin-left: 0%;
        }
        .log{
            margin-left: 46.8%;
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: gray;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            width: 100px;
            height: auto;
        }

        .submit {
            padding: 8px 18px;
            background-color: #e9ba55;
            color: #ffffff;
            border: none;
            border-radius: 30px;
            font-size: 14.8px;
            text-decoration: none;
            transition: background-color 0.3s;
            cursor: pointer;
            order: 2;
            margin-left: -1%;
        }

        @media screen and (max-width: 600px) {
            table, th, td {
                display: block;
            }
            
            th, td {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Keluhan</h1>
        <div class="button">
            <a class="log" href="loginadmin.html">Logout</a> | <a class="hom" href="landingpage.html">Home</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>Pengaduan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12208862</td>
                    <td>Abiyu Rafi Linta Aribawa</td>
                    <td>0881-0242-88090</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, possimus tempora</td>
                    <td><img src="img/berlubang.jpg" alt=""></td>
                    <td><a class="submit" href="#">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
