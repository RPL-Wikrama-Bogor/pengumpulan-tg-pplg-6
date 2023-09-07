<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Data</title>
</head>

<body>
    <?php
    $data = [
        [
            "nama" => "Rafli",
            "nis" => "1234568",
            "rombel" => "PPLG XI-9",
            "umur" => 19
        ],
        [
            "nama" => "Lintaa",
            "nis" => "11223344",
            "rombel" => "PPLG XI-2",
            "umur" => 16
        ],
        [
            "nama" => "Ariwibawa",
            "nis" => "87654321",
            "rombel" => "PPLG XI-4",
            "umur" => 14
        ],
        [
            "nama" => "Abiyu Rafi Linta Aribawa",
            "nis" => "12208862",
            "rombel" => "PPLG XI-6",
            "umur" => 17
        ]
    ];
    ?>
</body>

<form action="" method="post">
    <table>
        <tr>
            <td>
                <input type="text" name="data" placeholder="Masukkan Data" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Cari">
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['submit'])) {
    $cari = $_POST['data'];

    $hasil = [];
    foreach ($data as $siswa) {
        if ((intval($cari) >= 17 && $siswa['umur'] >= 17) || (stripos($siswa['nama'], $cari) !== false)) {
            $hasil[] = $siswa;
        }
    }
    if (!empty($hasil) && !empty($cari)) {
        echo "<h2>Hasil :</h2>";
        foreach ($hasil as $hasil) {
            echo "Nama: " . $hasil['nama'] . "<br>";
            echo "NIS: " . $hasil['nis'] . "<br>";
            echo "Rombel: " . $hasil['rombel'] . "<br>";
            echo "Umur: " . $hasil['umur'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "gada.";
    }
}
?>

</html>