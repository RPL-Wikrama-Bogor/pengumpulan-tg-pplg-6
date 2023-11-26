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
    <title>no 19</title>
</head>

<style>

</style>

<body>

    <form action="" method="post">
        <div>
            <?php if ($i < 15) { ?>

                <label for="nama"> Input Nama:</label> 
                <input type="text" name="nama" id="nama" required> 
                <label for="kehadiran"> Input Kehadiran: </label>
                <input type="number" name="kehadiran" id="kehadiran" required>
                <hr>
                <h3>Input Nilai!<h3>
                <input type="number" placeholder="Nlai Matematika" name="mtk" id="mtk" required>
                <input type="number" placeholder="Nilai Indonesia" name="indo" id="indo" required>
                <input type="number" placeholder="Nilai Inggris" name="ing" id="ing" required>
                <input type="number" placeholder="Nilai DPK" name="dpk" id="dpk" required>
                <input type="number" placeholder="Nilai Agama" name="agama" id="agama" required>
                <label for="submit"></label><br>
                <input type="submit" name="submit" class="submit" id="submit">
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

<style>
body{
   background:linear-gradient(135deg,  #7C96AB, #EDC6B1, #B7B7B7 );
   display:flex;
   align-items:center;
   justify-content:center;
   padding :10px;
   border-radius:5px;
   height:100vh;
}

form{
    width: 350px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #F8F0E5;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    height: 420px;
    margin: 24px;
    border-radius: 2px;
    text-align: left;
    justify-content: center;

}

form h3{
    color:#7C96AB;
    text-align:center;
}

form p{
    
}
input {
    display: block;
    border: 2px solid #ccc;
    width: 60%;
    padding: 7px;
    margin: 5px auto;
    border-radius: 5px;

}

label {
    color:#7C96AB;
    font-size: 15px;
    padding: 15px;
    text-align:center;
}

.submit{
    width:350px;
    border-radius:7px;
    padding:8px 10px;
    background: linear-gradient(135deg,  #7C96AB, #EDC6B1, #B7B7B7 );
    color:white;
    border:#DAC0A3;
}
</style>
</body>
</html>