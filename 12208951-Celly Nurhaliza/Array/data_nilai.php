<?php
$nilai = [87, 70, 95, 84, 76, 91];

echo "<h3>Data Nilai</h3>";
echo "Nilai : " . implode(", ", $nilai) . "<br>";
echo "Nilai tertinggi : " . max($nilai) . "<br>";
echo "Nilai terrendah : " . min($nilai) . "<br>";

$nilai2 = [];
foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}
asort($nilai2);
echo "Urutan nilai dari yang terkecil : " . implode(", ", $nilai2) . "<br>";

arsort($nilai2);
echo "Urutan nilai dari yang terbesar : " . implode(", ", $nilai2) . "<br>";

echo "Rata-rata : " . round(array_sum($nilai)/count($nilai)) . "<br>";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [75];
array_splice($nilai, $key, 1, $nilaiGanti);

echo "Saya melakukan perbaikan untuk nilai " . min($nilai2) . ", dan saya telah mendapatkan nilai $nilaiGanti[0]. Jadi nilai saya sekarang : " . implode(", ", $nilai) . "<br>"; 

arsort($nilai);
echo "Urutan nilai saya saat ini dari yang terbesar yaitu : " . implode(", ", $nilai) . "<br>";
?>