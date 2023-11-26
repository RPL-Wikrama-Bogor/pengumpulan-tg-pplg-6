<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Umur Siswa di Atas 17 Tahun</title>
</head>
<body>
<h2>Tampilkan data umur siswa diatas 17 tahun</h2>
    <form method="post" action="">
        <button type="submit" name="submit">Tampilkan Data</button>
    </form>
    <div id="output"></div>

    <h3>Cari Data</h3>
    <form method="post" action="">
        <input type="text" name="inputnama" placeholder="cari">
        <button type="submit" name="carinama">Cari</button>
    </form>
    <div id="searchResult"></div>
    <hr>
    <h3>Data Siswa</h3>
   

<?php
    $datasis = [
        ["Nia", 17, "12209319", "PPLG"],
        ["Sheva", 17,"12208143", "PPLG"],
        ["Salma", 16, "12208674", "MPLB"],
        ["Nirmala", 16, "12208997", "PPLG"]
    ];

    
    function displayData($data) {
        foreach ($data as $orang) {
            echo "<p>Nama: ". $orang[0] . "<br>Umur : " . $orang[1] . "<br>Nis: " . $orang[2] . "<br>Rombel : " . $orang[3] . "</p>";
        }
    }

    if (isset($_POST["submit"])) {
        $umur = array_filter($datasis, function ($orang) {
            return $orang[1] >= 17;
        });
        displayData($umur);
    }

    if (isset($_POST["carinama"])) {
        $searchTerm = strtolower($_POST["inputnama"]);
        $searchResults = [];
       

        foreach ($datasis as $orang) {
            $fullName = strtolower($orang[0] . " " . $orang[1] . " " . $orang[2] . " " . $orang[3]);
            if (strpos($fullName, $searchTerm) !== false) {
                $searchResults[] = $orang;
            }
        }

        if (empty($searchResults)) {
            echo "Tidak ada hasil yang cocok! .";
        } else {
            displayData($searchResults);
        }
    }
    ?>
    
    
</body>
</html>