<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 150px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        p {
            margin: 10px 0;
            font-size: 18px;
        }

        b {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $nilai = [82, 86, 72, 91, 98, 88];

        echo "<h1>Data Nilai Saya</h1>";
        echo "<p>Nilai Saya : <b>" . implode(", ", $nilai) . "</b></p>";
        echo "<p>Nilai yang paling tinggi adalah : <b>" . max($nilai) . "</b></p>";
        echo "<p>Sedangkan nilai yang paling rendah : <b>" . min($nilai) . "</b></p>";

        $nilai2 = [];
        foreach ($nilai as $nl) {
            $nilai2[] = $nl;
        }
        asort($nilai2);
        echo "<p>Jika nilai diurutkan dari yang terkecil adalah : <b>" . implode(", ", $nilai2) . "</b></p>";

        arsort($nilai2);
        echo "<p>Dan nilai diurutkan dari yang terbesar adalah : <b>" . implode(", ", $nilai2) . "</b></p>";

        echo "<p>Apabila dibulatkan, rata-rata nilai saya menajadi : <b>" . round(array_sum($nilai)/count($nilai)) . "</b></p>";

        $key = array_search(min($nilai), $nilai);
        $nilaiGanti = [75];
        array_splice($nilai, $key, 1, $nilaiGanti);

        echo "<p>Setelah melakukan perbaikan nilai terkecil saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b></p>";

        arsort($nilai);
        echo "<p>Jika sekarang diurutkan nilai saya dari yang terbesar adalah : <b>" . implode(", ", $nilai) . "</b></p>";
        ?>
    </div>
</body>
</html>