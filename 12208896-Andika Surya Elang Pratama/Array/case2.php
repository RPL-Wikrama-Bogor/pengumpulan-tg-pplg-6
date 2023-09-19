<?php
$listnama = [
    [
        "Nama" => "Andika Surya",
        "Nis" => 1222000,
        "Rombel" => "PPLG",
        "Umur" => 17
    ],
    [
        "Nama" => "Asep",
        "Nis" => 122200080,
        "Rombel" => "PPLG",
        "Umur" => 15
    ],
    [
        "Nama" => "Brody",
        "Nis" => 1222000,
        "Rombel" => "PPLG",
        "Umur" => 19
    ]
];


?>

<!DOCTYPE html>
<html>

<head>
    <title>Pencarian Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
        }

        form {
            margin: 20px 0;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="number"],
        input[type="text"] {
            padding: 5px;
            width: 200px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        b {
            color: #f00;
        }
    </style>
</head>

<body>

    <center>
        <h1>Pencarian Data Siswa</h1>

        <!-- Form untuk mencari umur -->
        <form method="POST" action="">
            <label for="umur">Cari siswa dengan umur >= </label>
            <input type="number" name="umur" id="umur" required>
            <input type="submit" name="submit" value="Cari">
        </form>

        <!-- Form untuk mencari nama -->
        <form method="POST" action="">
            <label for="nama">Cari siswa berdasarkan Nama:</label>
            <input type="text" name="nama" id="nama" required>
            <input type="submit" name="nama_submit" value="Cari">
        </form>

        <?php
        // ... (kode PHP Anda tetap sama)
        ?>


    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Jika form umur di-submit
    if (isset($_POST['submit'])) {
        $umurMin = $_POST['umur'];
        $siswaUmurTertentu = [];

        foreach ($listnama as $siswa) {
            if ($siswa['Umur'] >= $umurMin) {
                $siswaUmurTertentu[] = $siswa['Nama'];
            }
        }
        echo "<h2>Siswa dengan umur >= $umurMin:</h2>";
        echo "<ul>";
        foreach ($siswaUmurTertentu as $nama) {
            echo "<li>$nama</li>";
        }
        echo "</ul>";
    }   

    // Jika form pencarian nama di-submit
    if (isset($_POST['nama_submit'])) {
        $namaCari = $_POST['nama'];
        $siswaDitemukan = null;

        foreach ($listnama as $siswa) {
            if (strcasecmp($siswa['Nama'], $namaCari) === 0) {
                $siswaDitemukan = $siswa;
                break;
            } 
        } if ($siswaDitemukan) {
                    echo "<h2>Data siswa ditemukan:</h2>";
        echo "Nama: " . $siswaDitemukan['Nama'] . "<br>";
        echo "NIS: " . $siswaDitemukan['Nis'] . "<br>";
        echo "Rombel: " . $siswaDitemukan['Rombel'] . "<br>";
        echo "Umur: " . $siswaDitemukan['Umur'] . "<br>";
        }else{
            echo "<br>";
            echo "<b> Data Tidak Ditemukan / Tidak Ada </b>";
        }

    }
    }


    ?>

</center>

   
    

</body>

</html>
