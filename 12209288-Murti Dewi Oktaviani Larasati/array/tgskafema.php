<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas ka fema</title>
</head>

<body>
<?php
$siswa = [
    [
        "nama" => "Murti",
        "nis" => 12209288,
        "rombel" => "PPLG XI-6",
        "rayon" => "Tajur 2",
        "umur" => 17,
    ],
    [
        "nama" => "Putri",
        "nis" => 12204000,
        "rombel" => "PPLG XI-6",
        "rayon" => "Tajur 3",
        "umur" => 16,
    ],
    [
        "nama" => "Dini",
        "nis" => 12203000,
        "rombel" => "PPLG XI-6",
        "rayon" => "Tajur 4",
        "umur" => 18,
    ],
  
];
?>
<form action="" method="post">
    <li>opsi 1 : jika di klik menampilkan data yang memiliki umur>=17</li>
    <li>opsi 2 : menampilkan data diri nama yang dicari</li>
    <ul>
        <li>
            <a href="?cari" style="text-decoration: none;">Cari yang sudah berusia lebih dari 17 tahun</a>
        </li>
        <li>
            <div style="display: flex;">
                <label for="nama">Cari Berdasarkan Nama :</label>
                <br><br>
                <input type="text" name="nama" id="nama">
                <button type="submit" name="submit">Cari</button>
        </div>
        </li>
    </ul>
</form>
    <?php
    if(isset($_GET['cari'])){
        foreach($siswa as $key => $data_siswa){
            if($data_siswa['umur'] >= 17){
                echo"<ul><li>$data_siswa[nama] : $data_siswa[umur]</li></ul>";

            }
        }
    }
?>
    <?php
    if(isset($_POST['submit'])){
        $nama =strtolower($_POST['nama']);

        echo "<ol>";
        foreach($siswa as $key => $data_siswa){
            if($nama == $data_siswa['nama'] || $nama == strtolower($data_siswa['nama'])){
                echo "Nama : $nama<br>";
                echo "Nis : $data_siswa[nis]<br>";
                echo "Rombel : $data_siswa[rombel]<br>";
                echo "Rayon : $data_siswa[rayon]<br>";
                echo "Umur : $data_siswa[umur]<br>";
            }
        }
        echo "</ol>";
    }
?>
</body>
</html>