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
            "nama" => "alex",
            "nis" => 12209113,
            "rombel" => "PPLG XI-8",
            "rayon" => "Cisarua 11",
            "umur" => "16",
        ],
        [
            "nama" => "roheng",
            "nis" => 12209111,
            "rombel" => "PPLG XI-19",
            "rayon" => "Cisarua 1",
            "umur" => "20",
        ],
        [
            "nama" => "sepuh",
            "nis" => 12209112,
            "rombel" => "PPLG XI-72",
            "rayon" => "Cisarua 2",
            "umur" => "18",
        ],
        [
            "nama" => "apong",
            "nis" => 1229110,
            "rombel" => "PPLG XI-38",
            "rayon" => "Cisarua 9",
            "umur" => "19",
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
        $umur_di_bawah_17 = false; 
        
    foreach($names as $key => $data_siswa){
        if($nama == $data_siswa['nama']){
            if($data_siswa['umur'] < 17){
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
        echo "Umur yang anda cari dibawah 17 tahun";
    }
}
?>

</body>
</html>