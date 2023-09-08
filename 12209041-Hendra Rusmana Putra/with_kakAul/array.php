<?php
$nilai = [80, 85, 74, 87, 98, 90];

$nilai2 = [];

foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [83];
array_splice($nilai, $key, 1, $nilaiGanti);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Siswa</title>
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .result-box {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .highlight {
            font-weight: bold;
            color: #007bff;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Penilaian Siswa</h1>

        <div class="result-box">
            <p>Nilai Saya: <span class="highlight"><?= implode(", ", $nilai2) ?></span></p>
            <p>Ini adalah nilai tertinggi: <span class="highlight"><?= max($nilai) ?></span></p>
            <p>Dan ini adalah nilai terkecil: <span class="highlight"><?= min($nilai2) ?></span></p>
        </div>

        <div class="result-box">
            <p>Apabila diurutkan dari yang terkecil menjadi: <span class="highlight"><?php asort($nilai2); echo implode(", ", $nilai2) ?></span></p>
            <p>Dan bila diurutkan dari yang terbesar menjadi: <span class="highlight"><?php arsort($nilai2); echo implode(", ", $nilai2) ?></span></p>
        </div>

        <div class="result-box">
            <p>Apabila dibulatkan, rata-rata dari nilai saya menjadi: <span class="highlight"><?= round(array_sum($nilai2)/count($nilai2)) ?></span></p>
        </div>

        <div class="result-box">
            <p>Setelah melakukan perbaikan untuk nilai <span class="highlight"><?= min($nilai2) ?></span>, saya mendapat nilai <span class="highlight"><?= $nilaiGanti[0] ?></span>. Jadi nilai saya sekarang: <span class="highlight"><?= implode(", ", $nilai) ?></span></p>
            <p>Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi: <span class="highlight"><?php arsort($nilai); echo implode(", ", $nilai) ?></span></p>
        </div>
    </div>
</body>
</html>
