<?php

$siswa = [
    [
    "nama" => "Khairul",
    "nis" => "12209244",
    "rombel" => "PPLG XI-6",
    "rayon" => "Ciawi 2",
    "umur" => 16,
    
],[
    "nama" => "Owl",
    "nis" => "12209326",
    "rombel" => "PPLG XI-6",
    "rayon" => "Ciawi 2",
    "umur" => 16,
],[
    "nama" => "Iwan",
    "nis" => "12209267",
    "rombel" => "PPLG XI-6",
    "rayon" => "Cicurug 2",
    "umur" => 17,
],[
    
    "nama" => "Louis",
    "nis" => "12209334",
    "rombel" => "PPLG XI-6",
    "rayon" => "Wikrama 4",
    "umur" => 16,
],[
    
    "nama" => "Andika",
    "nis" => "12209248",
    "rombel" => "PPLG XI-6",
    "rayon" => "Cibedug 3",
    "umur" => 17,
],[
    
    "nama" => "Raichan",
    "nis" => "12209357",
    "rombel" => "PPLG XI-6",
    "rayon" => "Cicurug 6",
    "umur" => 17,
],[
    
    "nama" => "Reyhan",
    "nis" => "12209233",
    "rombel" => "PPLG XI-6",
    "rayon" => "Cicurug 7",
    "umur" => 16,
]

]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h3>Data Siswa</h3>

 
    <h3><a href="?opsi=umur">Cari yang sudah berusia lebih dari 17 tahun</a></h3>

    <?php
    if (isset($_GET['opsi']) && $_GET['opsi'] === 'umur') {
        echo '<ul>';
        foreach ($siswa as $data) {
            if ($data['umur'] >= 17) {
                echo '<li>' . $data['nama'] . ' : ' . $data['umur'] . '</li>';
            }
        }
        echo '</ul>';
    }
    ?>

    
    <h3>Cari berdasarkan nama</h3>
    <form method="post">
        <input type="text" name="nama_cari" placeholder="Masukkan nama">
        <button type="submit">Cari</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_cari = $_POST['nama_cari'];
        $found = false;

        echo '<ol>';
        foreach ($siswa as $data) {
            if (strcasecmp($data['nama'], $nama_cari) === 0) {
                echo '<li>' . $data['nama'] . ' : ' . $data['umur'] . ' : ' . $data['nis'] . ' : ' . $data['rombel'] . ' : ' . $data['rayon'] . '</li>';
                $found = true;
            }
        }
        echo '</ol>';

        if (!$found) {
            echo 'Nama tidak ditemukan.';
        }
    }
    ?>

  
    <h2>Siswa</h2>
    <ol>
        <?php
        foreach ($siswa as $data) {
            echo '<li>' . $data['nama'] . ' : ' . $data['umur'] .'</li>';
        }
        ?>
        
    </ol>
</body>
</html>
