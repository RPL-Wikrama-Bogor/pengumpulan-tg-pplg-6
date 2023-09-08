<?php
$siswa = [
    [
        "nama" => "Rey",
        "nis" => 12209113,
        "rombel" => "PPLG XI-6",
        "umur" => 15,
    ],
    [
        "nama" => "Han",
        "nis" => 31190221,
        "rombel" => "PPLG XI-6",
        "umur" => 61,
    ],
    [
        "nama" => "Aul",
        "nis" => 91131220,
        "rombel" => "PPLG XI-4",
        "umur" => 98,
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>List nama siswa</h2>
<?php
foreach($siswa as $key => $cuy){
    echo  "- " . $cuy['nama'] . "<br>";
}
?>

    <form action="" method="post">
    <h2>Pilih siswa untuk lihat data</h2>
        <table>
        <tr>
                <td>
                    <tr>
                        <label for="nama">Masukan Nama: </label>
                    </tr>
                    <tr>
                        <input type="text" name="nama" id="nama" required>
                    </tr>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Cek</button>

    </form>
    <br>
<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $namaHasil = array_search($nama, array_column($siswa, 'nama'));

    if ($namaHasil !== false) { 
        $new = $siswa[$namaHasil];

        if ($new && $new['umur'] >= 17) {
            echo "Nama: " . $new['nama'] . "<br>";
            echo "NIS: " . $new['nis'] . "<br>";
            echo "Rombel: " . $new['rombel'] . "<br>";
            echo "Usia: " . $new['umur'] . "<br>";
        } else {
            echo "Umur tidak lebih dari 17<br>";
        }
    } else {
        echo "Data tidak ditemukan<br>";
    }
}

?>




</body>
</html>