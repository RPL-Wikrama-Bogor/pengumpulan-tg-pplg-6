<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai</title>
</head>
    <style>
        body{
            background: linear-gradient(170deg, #E4A5FF, #ECF9FF)
        }
        .form{
            background: linear-gradient(170deg, #C0DBEA, #FFDEDE);
            outline: auto;
            width: 550px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 15px;
            margin-top: 160px;
        }

        h2{
            text-align: center;
        }
    </style>
<body>
    <div class="form">
        <h2>NILAI</h2>
    <?php
        $nilai = [90, 88, 75, 89, 92, 95];

        echo "Nilai Saya : <b>" . implode(", ", $nilai) . "</b> <br />";
        echo "Dari keseluruhan nilai, nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br />";
        echo "Sedangkan nilai yang paling kecil : <b>" . min($nilai) . "</b> <br />";

        $nilai2 = [];
        foreach ($nilai as $nl) {
            $nilai2[] = $nl;
        }
        asort($nilai2);
        echo "Apabila diurutkan dari yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

        arsort($nilai2);
        echo "Apabila diurutkan dari yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

        echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

        $key = array_search(min($nilai), $nilai);
        $nilaiGanti = [80];
        array_splice($nilai, $key, 1, $nilaiGanti);

        echo "Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br />"; 

        arsort($nilai);
        echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(", ", $nilai) . "</b> <br />";
        ?>
    </div>
</body>
</html>