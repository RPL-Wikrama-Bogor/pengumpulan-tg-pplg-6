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
            "nama" => "Restu",
            "nis" => 12209114,
            "rombel" => "PPLG XI-6",
            "rayon" => "Cicurug 1",
            "umur" => "16",
        ],
        [
            "nama" => "alpar",
            "nis" => 12209144,
            "rombel" => "PPLG XI-6",
            "rayon" => "Cisarua 1",
            "umur" => "20",
        ],
        [
            "nama" => "ikhfan",
            "nis" => 12209098,
            "rombel" => "PPLG XI-6",
            "rayon" => "Ciawi 1",
            "umur" => "18",
        ],
        [
            "nama" => "galib",
            "nis" => 12209235,
            "rombel" => "PPLG XI-6",
            "rayon" => "Ciawi 5",
            "umur" => "19",
        ],
        ];
    ?>
    <form action="" method="post">
                <a href="?cari">Cari yang sudah berusia 17 tahun atau lebih</a>
                <br>
                <hr>
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
        $umur_di_bawah_17 = false; 
        
    foreach($names as $key => $data_siswa){
        if($nama == $data_siswa['nama']){
            if($data_siswa['umur'] <= 17){
                $umur_di_bawah_17 = true;
                break; 
            }
                echo "Nama: $nama<br>";
                echo "NIS: {$data_siswa['nis']}<br>";
                echo "Rombel: {$data_siswa['rombel']}<br>";
                echo "Rayon: {$data_siswa['rayon']}<br>";
                echo "Umur: {$data_siswa['umur']}<br>";
        }
    }
    
    if($umur_di_bawah_17){
        echo "Umur Anda di bawah 17 tahun";
    }
}
?>
</body>
</html>