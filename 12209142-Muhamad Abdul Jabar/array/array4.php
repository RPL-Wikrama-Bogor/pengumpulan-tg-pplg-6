<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"] {
            padding: 5px;
            width: 200px;
            border-radius:5px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius:5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
        $dataDiri = [
            [
                "nama" => "Muhamad Abdul Jabar",
                "nis" => "12209041",
                "romber" => "PPLG XI-6",
                "umur" => 17
            ],
            [
                "nama" => "Abdul Reza",
                "nis" => "12209041",
                "romber" => "PPLG XI-6",
                "umur" => 16
            ],
            [
                "nama" => "Muhamad Rusmana",
                "nis" => "12209041",
                "romber" => "PPLG XI-6",
                "umur" => 17
            ],
            [
                "nama" => "Muhamad Nurdin",
                "nis" => "12209041",
                "romber" => "PPLG XI-6",
                "umur" => 18
            ]
        ];

        $namaTidakAda = true;
    ?>
<center>
    <form action="#" method="POST">
        <tr>
            <td>Umur Siswa yang lebih dari 17thn</td>
            <td><input type="submit" name="submit" value="Cari"></td>
        </tr><br><br>
        <tr>
            <td>Cari data diri siswa</td>
            <td><input type="text" name="nama" ></td>
            <td><input type="submit" name="submit2" value="Cari"></td>
        </tr><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        foreach ($dataDiri as $key => $umur) {
            if ($umur['umur'] >= 17) {
                echo $umur['nama'] . "<br>";
                echo $umur['nis'] . "<br>";
                echo $umur['romber'] . "<br>";
                echo $umur['umur']. "<br>" ;
            }
        }
    }
    if (isset($_POST['submit2'])) {
        $nama = $_POST['nama'];

        foreach ($dataDiri as $key => $i) {
          if ($i['nama'] == $nama) {
            echo "<br>nama : " . $i['nama'];
            echo "<br>Nis : " . $i['nis'];
            echo "<br>Romber : " . $i['romber'];
            echo "<br>Umur : " . $i['umur'];
            $namaTidakAda = false;
          }
        }
        if ($namaTidakAda) {
            echo "Nama " . $nama . " tidak ditemukan";
        }
    }



    ?>
</center>
</body>
</html>