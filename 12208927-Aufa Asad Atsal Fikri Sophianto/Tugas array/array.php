<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .bold-text {
            font-weight: bold;
        }

        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Nilai Siswa</h1>

        <div class="result">
            <?php
            $nilai = [80, 78, 72, 84, 92, 88];

            echo "<p class='bold-text'>Nilai Saya :</p>";
            echo "<p><b>" . implode(", ", $nilai) . "</b></p>";

            echo "<p class='bold-text'>Nilai Tertinggi :</p>";
            echo "<p><b>" . max($nilai) . "</b></p>";

            echo "<p class='bold-text'>Nilai Terendah :</p>";
            echo "<p><b>" . min($nilai) . "</b></p>";

            $nilai2 = $nilai;
            asort($nilai2);

            echo "<p class='bold-text'>Nilai Terkecil ke Terbesar :</p>";
            echo "<p><b>" . implode(", ", $nilai2) . "</b></p>";

            arsort($nilai2);

            echo "<p class='bold-text'>Nilai Terbesar ke Terkecil :</p>";
            echo "<p><b>" . implode(", ", $nilai2) . "</b></p>";

            $average = round(array_sum($nilai) / count($nilai));

            echo "<p class='bold-text'>Rata-rata Nilai :</p>";
            echo "<p><b>" . $average . "</b></p>";

            $minValue = min($nilai);
            $newValue = 75;
            $key = array_search($minValue, $nilai);

            array_splice($nilai, $key, 1, $newValue);

            echo "<p class='bold-text'>Setelah perbaikan untuk nilai terendah (" . $minValue . "), saya mendapat nilai " . $newValue . ".</p>";
            echo "<p class='bold-text'>Nilai Saya Sekarang :</p>";
            echo "<p><b>" . implode(", ", $nilai) . "</b></p>";

            arsort($nilai);

            echo "<p class='bold-text'>Urutan Nilai Saya (Terbesar ke Terkecil) :</p>";
            echo "<p><b>" . implode(", ", $nilai) . "</b></p>";
            ?>
        </div>
    </div>
</body>
</html>
