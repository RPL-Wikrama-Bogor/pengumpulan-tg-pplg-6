<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $data = [
        [
            "nama" => "Alya Nursyifa",
            "nis" => "12208889",
            "rombel" => "PPLG XI-6",
            "rayon" => "Cicurug 6",
            "umur" => 16
        ],
        [
            "nama" => "Feitan",
            "nis" => "12208989",
            "rombel" => "PPLG XI-1",
            "rayon" => "Cisarua 6",
            "umur" => 20
        ],
        [
            "nama" => "Kuromi",
            "nis" => "12207890",
            "rombel" => "PPLG XI-5",
            "rayon" => "Tajur 3",
            "umur" => 13
        ],
    ];
?>
    <h1>Cari nama siswa</h1>
    <ul>
        <li>Alya Nursyifa</li>
        <li>Feitan</li>
        <li>Kuromi</li>
    </ul>

    <form action="#" method="post">
        <td>Masukkan nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
        <td><input type="submit" name="submit" value="Cari"></td>
    </form><br>
<?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $namahasil = array_search($nama, array_column($data, 'nama'));
        
        if($namahasil !== false){
            $new = $data[$namahasil];

            if ($new['umur'] >= 17){
                echo "Nama : ".$new['nama']."<br>";
                echo "Nis : ".$new['nis']."<br>";
                echo "Rombel : ".$new['rombel']."<br>";
                echo "Rayon : ".$new['rayon']."<br>";
                echo "Umur : ".$new['umur'];
            }
            else {
                echo $new['nama'] . " berumur " . $new['umur'] . " tahun maka ia tidak termasuk kategori umur lebih dari 17 tahun";
            }
        } else {
            echo "Nama tidak tersedia";
        }
    }
?>
</body>
</html>
