<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Value Array</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}
.container {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
    color: #333;
}
b {
    font-weight: bold;
    color: #38E54D;
}
h2{
    text-align: center;
}

</style>
<body>


<div class="container">
    <h2>Hasil Perhitungan Nilai</h2>

    <?php
    $nilai = [92, 87, 84, 97, 90, 63];

    echo "<p>Nilai Saya : <b>" . implode(", ", $nilai) . "</b></p>";
    echo "<p>Nilai tertinggi yang saya dapatkan adalah : <b>" . max($nilai) . "</b></p>";
    echo "<p>Sedangkan nilai terkecil adalah : <b>" . min($nilai) . "</b></p>";

    $nilai2 = [];
    foreach ($nilai as $nl) {
    $nilai2[] = $nl;
    }
    asort($nilai2); 
    echo "<p>urutan nilai saya jika diurutkan dari yang terkecil : <b>" . implode(", ", $nilai2) . "</b></p>";

    arsort($nilai2);
    echo "<p>urutan nilai saya jika diurutkan dari yang terbesar : <b>" . implode(", ", $nilai2) . "</b></p>";

    echo "<p>Rata rata dari keseluruhan nilai saya adalah : <b>" . round(array_sum($nilai)/count($nilai)) . "</b></p>";

    $key = array_search(min($nilai), $nilai);
    $nilaiGanti = [80];
    array_splice($nilai, $key, 1, $nilaiGanti);

    echo "<p>Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b></p>";

    arsort($nilai);
    echo "<p>sekarang, urutan nilai saya jika diurutkan dari yang terbesar adalah : <b>" . implode(", ", $nilai) . "</b></p>";
    ?>
</div>


</body>
</html>