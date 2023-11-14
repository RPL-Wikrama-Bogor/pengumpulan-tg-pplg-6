<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pengumpulan Nilai</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #96B6C5;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    b {
        color: maroon;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
	<h1>Perolehan Nilai</h1>
</style>
</body>
</html>

<?php
$nilai = [90, 76, 70, 8, 92, 80];

echo "Nilai yang saya peroleh: <b>" . implode(", ", $nilai) . "</b> <br />";
echo "Dari keseluruhan nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br />";
echo "Sedangkan nilai yang paling kecil ialah : <b>" . min($nilai) . "</b> <br />";

$nilai2 = [];
foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}
asort($nilai2);
echo "Apabila diurutkan dari nilai yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

arsort($nilai2);
echo "Apabila diurutkan dari nilai yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [75];
array_splice($nilai, $key, 1, $nilaiGanti);

echo "Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br />"; 

arsort($nilai);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(", ", $nilai) . "</b> <br />";
?>