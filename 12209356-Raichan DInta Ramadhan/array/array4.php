<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $dataDiri = [
            [
                "nama" => "Raichan Dinta Ramdhan",
                "nis" => "12209356",
                "romber" => "PPLG XI-6",
                "umur" => 17
            ],
            [
                "nama" => "Asep Surya",
                "nis" => "12209023",
                "romber" => "PPLG XI-6",
                "umur" => 17
            ],
            [
                "nama" => "Louis Marchal",
                "nis" => "12209224",
                "romber" => "PPLG XI-6",
                "umur" => 17
            ],
            [
                "nama" => "Khairul dante",
                "nis" => "12209872",
                "romber" => "PPLG XI-6",
                "umur" => 18
            ]
        ];

        $namaTidakAda = true;
    ?>
<center>
    <div class="container">
    <h1>Data siswa</h1>
    <form action="" method="POST">
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
</div>
</body>
</html>