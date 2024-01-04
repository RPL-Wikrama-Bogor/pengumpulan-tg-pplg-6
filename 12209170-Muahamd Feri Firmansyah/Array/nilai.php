<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nilai Ujian saya</title>
</head>
<body>
	<center>
	<h2>Nilai Ujian Saya</h2>
</center>
	<div>
	<?php
$nilai = [80, 70, 75, 85, 95, 100];

echo "Nilai Saya : <b>" . implode(", ", $nilai) . "</b> <br />"; //IMPLODE memecah array menjadi text dan dipisahkan dengan koma (,)
echo "Dari keseluruhan nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br />";
echo "Sedangkan nilai yang paling kecil : <b>" . min($nilai) . "</b> <br />";

$nilai2 = [];
foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}

asort($nilai2); //ASORT -> mengurutkan dari yang terkecil ke terbesar
echo "Apabila diurutkan dari yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

arsort($nilai2); //ARSORT -> mengurutkan dari yang terbesar ke terkecil
echo "Apabila diurutkan dari yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

$key = array_search(min($nilai), $nilai); 
// array_search() berguna untuk mencari sebuah value yang ada di array, 
// dan memunculkan output berupa key yang memiliki value yang di cari. 
$nilaiGanti = [80];
array_splice($nilai, $key, 1, $nilaiGanti); 
// Fungsi splice berguna untuk menambahkan beberapa elemen array. 
// Parameter pertama fungsi adalah posisi urutan elemen baru. 
// Parameter kedua fungsi adalah menentukan berapa elemen yang perlu dihapus dalam proses penambahan. 
// Parameter selanjutnya adalah elemen-elemen yang akan ditambahkan.

echo "Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br />"; 

arsort($nilai);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(", ", $nilai) . "</b> <br />";
?>
	</div>
</body>
</html>

