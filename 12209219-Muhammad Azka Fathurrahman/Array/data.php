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
            "nama" => "Azka",
            "nis" => 12208912,
            "rombel" => "PPLG XI",
            "rayon" => "Cicurug",
            "umur" => "16",
        ],
        [
            "nama" => "Fathur",
            "nis" => 1220928198,
            "rombel" => "PPLG XI-",
            "rayon" => "Cicurug",
            "umur" => "20",
        ],
        [
            "nama" => "alfas",
            "nis" => 1220928123,
            "rombel" => "PPLG XI",
            "rayon" => "Cicurug",
            "umur" => "19",
        ],
        [
            "nama" => "alvin",
            "nis" => 122092824,
            "rombel" => "PPLG XI",
            "rayon" => "Cicurug",
            "umur" => "18",
        ],
        ];
    ?>
    <form action="" method="post">
                <a href="?cari">Cari yang sudah berusia 17 tahun atau lebih</a>
                <div style="display: flex;">
                    <label  for="nama" >Cari berdasarkan nama :</label>
                    <input placeholder="Ketik Nama yang akan Anda cari" autocomplete="off" type="text" name="nama" id="nama">
                    <button type="submit" name="submit">Cari Nama</button>
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
                echo "Nama: $nama<br>";
                echo "NIS: $data_siswa[nis]<br>";
                echo "Rombel: $data_siswa[rombel]<br>";
                echo "Rayon: $data_siswa[rayon]<br>";
                echo "Umur: $data_siswa[umur]<br>";
            }
        }
    }
    ?>
</body>
</html>