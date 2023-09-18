<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $gaji_pokok = $_POST["gaji_pokok"];

    $tunj = 0.2 * $gaji_pokok;

    $pjk = 0.15 * ($gaji_pokok + $tunj);

    $gaji_bersih = $gaji_pokok + $tunj - $pjk;
    
    $tunjangan_formatted = number_format($tunj, 2);
    $pajak_formatted = number_format($pjk, 2);
    $gaji_bersih_formatted = number_format($gaji_bersih, 2);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .result-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
            margin: 20px;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Hasil Perhitungan Gaji</h1>
    <div class="result-container">
        <p>Nama Karyawan: <?php echo $nama; ?></p>
        <p>Tunjangan: <?php echo $tunjangan_formatted; ?></p>
        <p>Pajak: <?php echo $pajak_formatted; ?></p>
        <p>Gaji Bersih: <?php echo $gaji_bersih_formatted; ?></p>
    </div>
</body>
</html>

