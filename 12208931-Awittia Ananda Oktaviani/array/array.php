<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Nilai</title>
</head>
<body>
    <style>
        .nilai {
            background-color: #FFF6DC;
            text-align: center;
        }
    </style>

<div class="nilai">


<?php
$nilai = [80, 78, 72, 84, 92, 88];

echo "Nilai Saya : <b>" . implode(", ", $nilai) . "</b> <br />"; //implode = mengkonpert kedalam array
echo "Dari keseluruhan nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br />";
echo "Sedangkan nilai yang paling kecil : <b>" . min($nilai) . "</b> <br />";

$nilai2 = [];
foreach ($nilai as $nl) { //foreach untuk memecah array
	$nilai2[] = $nl;
}
asort($nilai2);
echo "Apabila diurutkan dari yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

arsort($nilai2);
echo "Apabila diurutkan dari yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [75];
array_splice($nilai, $key, 1, $nilaiGanti);

echo "Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br />"; 

arsort($nilai);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(", ", $nilai) . "</b> <br />";
?>
</div>