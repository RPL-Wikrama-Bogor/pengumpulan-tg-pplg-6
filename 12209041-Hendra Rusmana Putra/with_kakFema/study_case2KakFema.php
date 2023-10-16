<?php
$murid = [
    [
        "nama"=>"Abdul Jabar",
        "rombel"=> "PPLG XI-1",
        "nis" => "12209142",
        "umur" => "1700"
    ],
    [
        "nama"=>"Abdul Reza",
        "rombel"=> "TJKT XI-3",
        "nis" => "12209142",
        "umur" => "20"
    ],
    [
        "nama"=>"Abdul Fery",
        "rombel"=> "KLN XI-2",
        "nis" => "12209142",
        "umur" => "0"
    ],
    [
        "nama"=>"Abdul Dinta",
        "rombel"=> "Otomotif XI-1",
        "nis" => "12209142",
        "umur" => "-20"
    ],
    [
        "nama"=>"Abdul Dudul",
        "rombel"=> "PPLG XI-6",
        "nis" => "12209142",
        "umur" => "19"
    ],
];

$nama_tidak_ditemukan = true ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari nama siswa</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Cari berdasarkan umur</td>
                <td><input type="submit" name="cari" value="Cari"></td>
            </tr>
            <tr>
                <td>Cari melalui nama</td>
                <td><input type="text" name="nama"></td>
                <td><input type="submit" name="kirim" value="Cari"></td>
            </tr>
        </table>
    </form>     
</body>
</html>

<?php

if (isset($_POST['cari'])) {

    echo "<h1>Ini merupakan nama nama murid dari yang umurnya lebih dari 17 tahun</h1>";
    
    foreach ($murid as $key => $a) {
        if ($a["umur"] >= 17) {
            echo "<br>Nama: ". $a["nama"];
            echo "<br>Nis: ". $a["nis"];
            echo "<br>Rombel: ".$a["rombel"];
            echo "<br>Umur: ".$a["umur"]."<br>";
        }
    }
}

if (isset($_POST['kirim'])) {
    
    $nama = $_POST ['nama'];

    foreach ($murid as $key => $a) {
        if ($a ["nama"] == $nama) {
            echo "<br>Nama: ".$a["nama"];
            echo "<br>Nis: ".$a["nis"];
            echo "<br>Rombel: ".$a["rombel"];
            echo "<br>Umur: ".$a["umur"];
            $nama_tidak_ditemukan = false; // Set flag menjadi false karena nama ditemukan
        }
    }

    if ($nama_tidak_ditemukan) {
        echo "<br>Nama murid \"$nama\" tidak ditemukan.";
    }
}
?>

