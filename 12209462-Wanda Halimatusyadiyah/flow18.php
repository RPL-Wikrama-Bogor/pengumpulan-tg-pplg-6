<?php
session_start(); 


if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();
    $_SESSION['count'] = 0;
}

$mtk;
$indo;
$ing;
$dpk;
$agama;
$nama;
$kehadiran;
$total;
$i = $_SESSION['count']; 

if (isset($_POST['submit']) && $i < 15) {
    $mtk[$i] = $_POST['mtk'];
    $indo[$i] = $_POST['indo'];
    $ing[$i] = $_POST['ing'];
    $dpk[$i] = $_POST['dpk'];
    $agama[$i] = $_POST['agama'];
    $nama[$i] = $_POST['nama'];
    $kehadiran[$i] = $_POST['kehadiran'];

    $i++; 

    $_SESSION['data'][] = array(
        'mtk' => $mtk[$i - 1],
        'indo' => $indo[$i - 1],
        'ing' => $ing[$i - 1],
        'dpk' => $dpk[$i - 1],
        'agama' => $agama[$i - 1],
        'nama' => $nama[$i - 1],
        'kehadiran' => $kehadiran[$i - 1]
    );

    $_SESSION['count'] = $i;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

</style>

<body>

    <form action="" method="post">
        <div>
            <?php if ($i < 15) { ?>

                <label for="nama"> Input nama </label>
                <input type="text" name="nama" id="nama" required> <br>
                <label for="kehadiran"> Input kehadiran </label>
                <input type="number" name="kehadiran" id="kehadiran" required><br>
                <label for="mtk"> Input nilai mtk </label>
                <input type="number" name="mtk" id="mtk" required><br>
                <label for="indo"> Input nilai indo </label>
                <input type="number" name="indo" id="indo" required><br>
                <label for="ing"> Input nilai ing </label>
                <input type="number" name="ing" id="ing" required><br>
                <label for="dpk"> Input nilai dpk </label>
                <input type="number" name="dpk" id="dpk" required><br>
                <label for="agama"> Input nilai agama </label>
                <input type="number" name="agama" id="agama" required><br>
                <label for="submit"></label>
                <input type="submit" name="submit" id="submit">
            <?php } else { ?>
                <p>Anda telah mengisi data untuk 15 siswa. Tidak dapat mengisi lebih banyak.</p>
            <?php } ?>
        </div>
    </form>
    
    <?php

    if (!empty($_SESSION['data'])) {
        echo '<h2>Data yang sudah diinput:</h2>';
        foreach ($_SESSION['data'] as $index => $dataSiswa) {
            echo "<h3>Siswa ke-" . ($index + 1) . ": " . $dataSiswa['nama'] . "</h3>";
            echo "Jumlah total nilai nya &nbsp" . array_sum($dataSiswa) . "<br>";
            echo "Kehadiran : &nbsp" . $dataSiswa['kehadiran'] . "%<br>";
            if (array_sum($dataSiswa) >= 475 && $dataSiswa['kehadiran'] == 100) {
                echo "siswa &nbsp" . $dataSiswa['nama'] . " &nbsp menjadi juara<br>";
            } else {
                echo "siswa &nbsp" . $dataSiswa['nama'] . "&nbsp tidak menjadi juara<br>";
            }
        }
    }
    ?>
</body>

</html>