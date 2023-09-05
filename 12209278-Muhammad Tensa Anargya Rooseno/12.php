<?php
// Data waktu dalam format "hh:mm:ss"
$waktu1 = "02:13:23";
$waktu2 = "02:13:59";
$waktu3 = "01:59:59";
$waktu4 = "23:59:59";

// Fungsi untuk menambahkan 1 detik ke waktu
function tambahSatuDetik($waktu) {
    $detikAwal = strtotime($waktu);
    $detikBaru = $detikAwal + 1;
    return date("H:i:s", $detikBaru);
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            display: flex;
            justify-content: space-between;
        }
        .time-box {
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="time-box">
            <p>Waktu sebelum ditambah 1 detik:</p>
            <p>Waktu 1: <?php echo $waktu1; ?></p>
            <p>Waktu 2: <?php echo $waktu2; ?></p>
            <p>Waktu 3: <?php echo $waktu3; ?></p>
            <p>Waktu 4: <?php echo $waktu4; ?></p>
        </div>
        <div class="time-box">
            <p>Waktu setelah ditambah 1 detik:</p>
            <p>Waktu 1: <?php echo tambahSatuDetik($waktu1); ?></p>
            <p>Waktu 2: <?php echo tambahSatuDetik($waktu2); ?></p>
            <p>Waktu 3: <?php echo tambahSatuDetik($waktu3); ?></p>
            <p>Waktu 4: <?php echo tambahSatuDetik($waktu4); ?></p>
        </div>
    </div>
</body>
</html>
