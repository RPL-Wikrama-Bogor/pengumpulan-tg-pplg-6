<?php
$listnama = [
    [
        "Nama" => "Louis Marchall Joheart Cardoso",
        "Nis" => 12209092,
        "Rombel" => "PPLG XI - 6",
        "Umur" => 17
    ],
    [
        "Nama" => "Reyhan Aulia Treeana",
        "Nis" => 12122321,
        "Rombel" => "PPLG XI - 2",
        "Umur" => 16
    ],
    [
        "Nama" => "Jesen Marselino",
        "Nis" => 12209065,
        "Rombel" => "PPLG XI - 1",
        "Umur" => 15
    ],
    [
        "Nama" => "Abyi",
        "Nis" => 12122320,
        "Rombel" => "PPLG XI - 6",
        "Umur" => 19
    ]
];


?>

<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Pencarian Data Siswa</title>
    <style>
        * {
            font-family: 'Cabin', sans-serif;
            background-color: #f2f2f2;

        }
=
    </style>
</head>

<body>


        <h1>Pencarian Data Siswa</h1>

   
        <form method="POST" action="">
            <label for="umur">Cari siswa dengan umur >=</label>
            <input type="number" name="umur" id="umur" required>
            <input type="submit" name="submit" value="Cari">
        </form>

        <form method="POST" action="">
            <label for="nama">Cari siswa berdasarkan Nama:</label>
            <input type="text" name="nama" id="nama" required>
            <input type="submit" name="nama_submit" value="Cari">
        </form>

        <?php
 
        ?>


    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
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


   
    

</body>

</html>
