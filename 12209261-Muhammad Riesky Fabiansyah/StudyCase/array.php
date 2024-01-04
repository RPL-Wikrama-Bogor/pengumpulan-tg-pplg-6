<?php
$ganjil = [1, 3, 5, 7, 9, 11];
$genap = [2, 4, 6, 8, 10, 12];

echo "Angka genap : <b>" . implode(", ", $genap) . "</b> <br />"; //IMPLODE memecah array menjadi text dan dipisahkan dengan koma (,)
echo "Angka ganjil : <b>" . implode(", ", $ganjil) . "</b> <br />";
echo "Dari keseluruhan, bilangan dengan angka yang paling tinggi dibilangan ganjil ialah : <b>" . max($ganjil) . "</b> <br />";
echo "Dari keseluruhan, bilangan dengan angka yang paling tinggi dibilangan genap ialah : <b>" . max($genap) . "</b> <br />";
echo "Sedangkan nilai yang paling kecil dibilangan ganjil & genap : <b>" . "genap : ". min($genap) . "&nbsp; ganjil : ". min($ganjil) ."</b> <br />";

$gjl = [];
foreach ($ganjil as $gl) {
	$gjl[] = $gl;
}

$gnp = [];
foreach ($genap as $gn) {
	$gnp[] = $gn;
}

asort($ganjil);
asort($genap); //ASORT -> mengurutkan dari yang terkecil ke terbesar
echo "Apabila diurutkan dari yang terkecil menjadi : <b>" . "Ganjil : " .implode(", ", $ganjil) . "&nbsp;" ." Genap : ". implode(", ", $genap) ."</b> <br />";

arsort($ganjil);
arsort($genap); //ARSORT -> mengurutkan dari yang terbesar ke terkecil
echo "Apabila diurutkan dari yang terbesar menjadi : <b>" . "Ganjil : " .implode(", ", $ganjil) . "&nbsp;" . " Genap : " .implode(", ", $genap). "</b> <br />";

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . " Ganjil : " .round(array_sum($ganjil)/count($ganjil)) . " &nbsp; " . " Genap : " .round(array_sum($genap) / count($genap)) ."</b> <br />";

$key = array_search(min($ganjil), $ganjil);
// array_search() berguna untuk mencari sebuah value yang ada di array, 
// dan memunculkan output berupa key yang memiliki value yang di cari. 
$nilaiGanti = [18];
array_splice($ganjil, $key, 1, $nilaiGanti); 
// Fungsi splice berguna untuk menambahkan beberapa elemen array. 
// Parameter pertama fungsi adalah posisi urutan elemen baru. 
// Parameter kedua fungsi adalah menentukan berapa elemen yang perlu dihapus dalam proses penambahan. 
// Parameter selanjutnya adalah elemen-elemen yang akan ditambahkan.

echo "Setelah melakukan perbaikan untuk nilai <b>" . min($gjl) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $ganjil) . "</b> <br />"; 

arsort($ganjil);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(", ", $ganjil) . "</b> <br />";
?>