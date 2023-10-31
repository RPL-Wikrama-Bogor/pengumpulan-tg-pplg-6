<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Nilai</title>
    <style>
		body {
			background-color: gray;
		}
		
        h1 {
            text-align: center;
            font-size: 36px;
            color: #f2f2f2;
            margin-bottom: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .nilai-label {
            font-weight: bold;
            color: #555;
        }

        .nilai-hasil {
            font-size: 18px;
            color: #333;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>🤗~~Informasi Nilai~~🤗</h1>
    <div class="container">
        <?php
        $nilai = [80, 78, 72, 84, 92, 88];

        echo "<p class='nilai-label'>Nilai Saya yang di dapatkan:</p>";
        echo "<p class='nilai-hasil'>". "=> " . implode(", ", $nilai) . "</p>";
        echo "<p class='nilai-label'>Nilai Saya yang paling tinggi:</p>";
        echo "<p class='nilai-hasil'>". "=> " . max($nilai) . "</p>";
        echo "<p class='nilai-label'>Nilai Saya yang paling terkecil:</p>";
        echo "<p class='nilai-hasil'>". "=> " . min($nilai) . "</p>";

        $nilai2 = [];
        foreach ($nilai as $nil) {
            $nilai2[] = $nil;
        }
        asort($nilai2);
        echo "<p class='nilai-label'>Urutan Nilai dari yang terkecil:</p>";
        echo "<p class='nilai-hasil'>". "=> " . implode(", ", $nilai2) . "</p>";

        arsort($nilai2);
        echo "<p class='nilai-label'>Urutan Nilai dari yang terkecil:</p>";
        echo "<p class='nilai-hasil'>". "=> " . implode(", ", $nilai2) . "</p>";

        echo "<p class='nilai-label'>Nilai rata rata dari keseluruhan Nilai yang saya dapatkan:</p>";
        echo "<p class='nilai-hasil'>". "=> " . round(array_sum($nilai)/count($nilai)) . "</p>";

        $key = array_search(min($nilai), $nilai);
        $nilGnti = [75];
        array_splice($nilai, $key, 1, $nilGnti);

		arsort($nilai);
        echo "<p class='nilai-label'>Setelah melakukan perbaikan dari nilai " . min($nilai2) . ", Nilai saya menjadi " . $nilGnti[0] . ". Jadi nilai saya sekarang menjadi:</p>";
        echo "<p class='nilai-hasil'>". "=> " . implode(", ", $nilai) . "</p>";
        ?>
    </div>
    <footer>&copy; 2023 Informasi Nilai</footer>
</body>
</html>
