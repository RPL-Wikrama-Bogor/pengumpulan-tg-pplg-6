<?php
    $data_siswa = [
        ["fania", 16, "12208997", "PPLG XI-6"],
        ["ony",17 ,"12208904", "PPLG XI-6"],
        ["mey",15 ,"12208892", "PPLG XI-6"],
        ["nia", 17, "12209319", "PPLG XI-6"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Usia di Atas 17 Tahun</title>
</head>
<body>
    <h2>Tampilkan data umur diatas 17 tahun</h2>
    <form method="post" action="">
        <button type="submit" name="submit">Tampilkan Data</button>
    </form>
    <div id="output"></div>

    <h2>Cari Data</h2>
    <form method="post" action="">
        <input type="text" name="input_nama" placeholder="Cari...">
        <button type="submit" name="cari_nama">Cari</button>
    </form>
    <div id="searchResult"></div>

    <?php
    function displayData($data) {
        foreach ($data as $person) {
            echo "<p>Nama: ". $person[0] . "<br>Umur : " . $person[1] . "<br>Nis: " . $person[2] . "<br>Rombel : " . $person[3] . "</p>";
        }
    }

    if (isset($_POST["submit"])) {
        $filter_umur = array_filter($data_siswa, function ($person) {
            return $person[1] >= 17;
        });
        displayData($filter_umur);
    }
//cari
    if (isset($_POST["cari_nama"])) {
        $searchTerm = strtolower($_POST["input_nama"]);
        $searchResults = [];

        foreach ($data_siswa as $person) {
            $fullName = strtolower($person[0] . " " . $person[1] . " " . $person[2] . " " . $person[3]);
            if (strpos($fullName, $searchTerm) !== false) {
                $searchResults[] = $person;
            }
        }

        if (empty($searchResults)) {
            echo "Tidak ada hasil yang cocok.";
        } else {
            displayData($searchResults);
        }
    }
    ?>
</body>
</html>