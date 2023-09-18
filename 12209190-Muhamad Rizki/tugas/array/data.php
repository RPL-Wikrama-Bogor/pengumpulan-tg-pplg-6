<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    input {
        width: 200px;
    }
</style>
</head>
<body>
<?php
    $names = [
        [
            "nama" => "Rizki",
            "nis" => 12209190,
            "rombel" => "PPLG XI-6",
            "rayon" => "Ciawi 2",
            "umur" => "16",
        ],
        [
            "nama" => "ky",
            "nis" => 1220989898,
            "rombel" => "PPLG XX-22",
            "rayon" => "Ciawi 200",
            "umur" => "17",
        ],
        [
            "nama" => "rzky",
            "nis" => 1220989898,
            "rombel" => "PPLG XX-33",
            "rayon" => "Ciawi 300",
            "umur" => "18",
        ],
        [
            "nama" => "agus",
            "nis" => 1220989898,
            "rombel" => "PPLG XX-44",
            "rayon" => "Ciawi 400",
            "umur" => "16",
        ],
        [
            "nama" => "noel",
            "nis" => 1220989898,
            "rombel" => "PPLG XX-44",
            "rayon" => "Ciawi 400",
            "umur" => "20",
        ],
        ];
    ?>
    <form action="" method="post">
                <a href="?cari">Cari yang sudah berusia 17 tahun atau lebih</a>
                <div style="display: flex;">
                    <label  for="nama" >Cari berdasarkan nama :</label>
                    <input  autocomplete="off" type="text" name="nama" id="nama">
                    <button type="submit" name="submit">Cari</button>
                </div>
    </form>
    <?php
    if (isset($_GET['cari'])) {
    foreach ($names as $name) {
        if($name ['umur'] >= 17) {
            echo "<ul><li> $name[nama] | $name[umur]</li></ul>";
        }
    }
}
    ?>
    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        foreach($names as $key => $data_siswa){
            if($nama == $data_siswa['nama']){
               
            }
        }
    }
    ?>
</body>
</html>