<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background-color: #f5f5f5;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 10px;
        }
        .nilai-label {
            font-weight: bold;
            font-size: 1.2em;
        }
        .nilai-list {
            list-style: none;
            padding: 0;
        }
        .nilai-list-item {
            margin-bottom: 5px;
        }
        .nilai-list-item b {
            color: #d00000;
        }
        .highlight {
            background-color: #fff;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card" style="width: 300px;">
            <?php
            $nilai = [90, 100, 78, 88, 93, 82];
            echo "<p class='nilai-label'>Nilai : <b>" . implode(", ", $nilai) . "</b></p>";
            echo "<p class='nilai-label'>Dari semua nilai, nilai tertinggi adalah : <b>" . max($nilai) . "</b></p>";
            echo "<p class='nilai-label'>Sedangkan nilai yang paling kecil : <b>" . min($nilai) . "</b></p>";
            $nilai2 = [];
            foreach ($nilai as $nl) {
                $nilai2[] = $nl;
            }
            asort($nilai2);
            echo "<p class='nilai-label'>Apabila diurutkan dari yang terkecil menjadi :</p>";
            echo "<ul class='nilai-list'>";
            foreach ($nilai2 as $value) {
                echo "<li class='nilai-list-item'><b>$value</b></li>";
            }
            echo "</ul>";
            arsort($nilai2);
            echo "<p class='nilai-label'>Apabila diurutkan dari yang terbesar menjadi :</p>";
            echo "<ul class='nilai-list'>";
            foreach ($nilai2 as $value) {
                echo "<li class='nilai-list-item'><b>$value</b></li>";
            }
            echo "</ul>";
            $average = round(array_sum($nilai) / count($nilai));
            echo "<p class='nilai-label'>Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>$average</b></p>";
            $key = array_search(min($nilai), $nilai);
            $nilaiGanti = [80];
            array_splice($nilai, $key, 1, $nilaiGanti);
            echo "<p class='nilai-label'>Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>{$nilaiGanti[0]}</b>. Jadi nilai saya sekarang : </p>";
            echo "<ul class='nilai-list'>";
            foreach ($nilai as $value) {
                echo "<li class='nilai-list-item'><b>$value</b></li>";
            }
            echo "</ul>";
            arsort($nilai);
            echo "<p class='nilai-label'>Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi :</p>";
            echo "<ul class='nilai-list'>";
            foreach ($nilai as $value) {
                echo "<li class='nilai-list-item'><b>$value</b></li>";
            }
            echo "</ul>";
            ?>
        </div>
    </div>
</body>

</html>