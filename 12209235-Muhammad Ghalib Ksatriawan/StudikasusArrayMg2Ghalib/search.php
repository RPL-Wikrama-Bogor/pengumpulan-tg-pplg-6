<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nama-nama Niswa PPLG XI 6 Diatas 17 Tahun</h1>
    <div>
         <form action="" method="post">
                <a href="?cari">Cari yang sudah berusia 17 tahun atau lebih</a>
    </form>
    </div>
   
                
    <div>
        <form action="" method="post">
            <input type="text" name="keyword" autocomplete="" placeholder="Cari Nama" >
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>
</body>
</html>

<?php
$murid = [
    [
        "nama" => "Ghalib",
        "nis" => "12209235",
        "rombel" => "pplg XI.6",
        "umur" => 17
    ],
    [
        "nama" => "Rhestu",
        "nis" => "12209114",
        "rombel" => "pplg XI.6",
        "umur" => 17
    ],
    [
        "nama" => "Azka",
        "nis" => "12209211",
        "rombel" => "pplg XI.6",
        "umur" => 16
    ],
    [
        "nama" => "Ikhfan",
        "nis" => "12209098",
        "rombel" => "pplg XI.6",
        "umur" => 15
    ],
    [
        "nama" => "Azan",
        "nis" => "12209144",
        "rombel" => "pplg XI.6",
        "umur" => 20
    ],
    [
        "nama" => "Rizki",
        "nis" => "12209190",
        "rombel" => "pplg XI.6",
        "umur" => 20
    ]
];

if (isset($_GET['cari'])) {
    foreach ($murid as $murids) {
        if($murids ['umur'] >= 17) {
            echo "<ul><li> $murids[nama] | usia = $murids[umur] tahun</li></ul>";
        }
}
}


if (isset($_POST['cari'])) {
    $varcari = isset($_POST['keyword']) ? $_POST['keyword'] : '';
    $lowcari = strtolower($varcari); // data cari menjadi huruf kecil

    $kolom = array_column($murid, "nama");
    $lowkolom = array_map("strtolower", $kolom); // data array huruf kecil

    while (($cari = array_search($lowcari, $lowkolom)) !== false) {
        $hasil = $cari;
        // Tampilkan data hasil pencarian
        if ($murid[$hasil]['umur'] < 17) {
            
            echo "Umur siswa di bawah 17 tahun." ;
        } else {
            echo "<ul>";
            echo "<li>" . "Nama = " . $murid[$hasil]['nama'] . "</li>";
            echo "<li>" . "Nis = " . $murid[$hasil]['nis'] . "</li>";
            echo "<li>" . "Rombel = " . $murid[$hasil]['rombel'] . "</li>";
            echo "<li>" . "Umur = " . $murid[$hasil]['umur'] . " tahun" . "</li>";
            echo "</ul>";
        }
        // setelah ketemu kita unset dulu agar tidak terjadi infinite loop
        unset($lowkolom[$cari]);
    }
}
?>
