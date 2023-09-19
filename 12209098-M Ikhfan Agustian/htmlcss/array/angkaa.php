<?php
$nilai = [90, 77, 86, 67, 86, 86];

echo "Nilai Saya : <b>" . implode(", ", $nilai) . "</b> <br />";
echo "Dari keseluruhan nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br />";
echo "Sedangkan nilai yang paling kecil : <b>" . min($nilai) . "</b> <br />";

$nilai2 = [];
foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}
//implode untuk mengubah/ dincovert array ke dalam text
asort($nilai2);
echo "apabila diurutkan dari yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";
//asort untuk mengurutkan dari yang terkecil-terbesar
arsort($nilai2);
echo "apabila diurutkan dari yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";
//arsort untuk mengurutkan dari yang terbesar-terkecil
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [70];
array_splice($nilai, $key, 1, $nilaiGanti);
//splice untuk meriplace 
echo "Sesudah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br />"; 

arsort($nilai);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(", ", $nilai) . "</b> <br />";
?>