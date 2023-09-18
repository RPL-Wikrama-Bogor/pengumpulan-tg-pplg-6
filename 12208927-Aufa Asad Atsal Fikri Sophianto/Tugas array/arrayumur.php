<?php
$siswa = [
    [
        "nama" => "Aufa as;ad",
        "nis" => "12208927",
        "rombel" => "PPLG XI-6",
        "umur" => 17,
    ],
    [
        "nama" => "Muhammad Reza aditya",
        "nis" => "12209041",
        "rombel" => "PPLG XI-6",
        "umur" => 17,
    ],
    [
        "nama" => "Hendra Rusmana",
        "nis" => "12209041",
        "rombel" => "PPLG XI-6",
        "umur" => 17,
    ],
    [
        "nama" => "Louis Marchall",
        "nis" => "12209092",
        "rombel" => "PPLG XI-6",
        "umur" => 17,
    ],
    [
        "nama" => "Andika Surya Elang",
        "nis" => "12208896",
        "rombel" => "PPLG XI-6",
        "umur" => 17,
    ], 
];
?>
<?php
if (isset($_POST['cari_nama'])){
echo "<h2>Data Siswa Umur 17 ke atas:</h2>";
foreach ($siswa as $data) {
    if ($data['umur'] >= 17) {
        echo "Nama: " . $data['nama'] . "<br>";
        echo "NIS: " . $data['nis'] . "<br>";
        echo "Rombel: " . $data['rombel'] . "<br>";
        echo "Umur: " . $data['umur'] . "<br><br>";
    }
}
}


if (isset($_POST['cari_nama'])) {
    $nama_cari = $_POST['cari_nama'];
    
    echo "<h2>Hasil Pencarian untuk Nama: $nama_cari</h2>";
    
    foreach ($siswa as $data) {
        if (strpos(strtolower($data['nama']), strtolower($nama_cari)) !== false) {
            echo "Nama: " . $data['nama'] . "<br>";
            echo "NIS: " . $data['nis'] . "<br>";
            echo "Rombel: " . $data['rombel'] . "<br>";
            echo "Umur: " . $data['umur'] . "<br><br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas kak fema</title>
</head>
<body>
<form method="post">
    <label for="cari_nama">Cari Nama Siswa:</label>
    <input type="text" id="cari_nama" name="cari_nama">
    <input type="submit" value="Cari">
</form>
</body>
</html>


