<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array</title>
<style>
    body{
        background:linear-gradient(170deg, #DFCCFB, #96B6C5, #EEE0C9);
        height:533px;
        max-width: 100%;
  }
    
    .form{ 
    width: 470px;
    height: 390px;
    margin: 400px ;
    margin-top:110px;
    border: 2px solid #ccc;
    padding: 25px;
    background: white;
    border-radius: 5px;
    text-align: left;
    justify-content: center;
    }

    .form h2{
        color:#ADC4CE;
    }
</style>
</head>

<body>
<div class="form">
    <center><h2>Nilai Saya </h2><hr></center>
<div class="nilai">


<?php
$nilai = [87, 90, 70, 98, 92, 80];

echo "Nilai Saya : <b>" . implode(", ", $nilai) . "</b> <br /><br>";
echo "Dari keseluruhan nilai saya yang paling tinggi adalah : <b>" . max($nilai) . "</b> <br /><br>";
echo "Dan nilai yang paling kecil adalah : <b>" . min($nilai) . "</b> <br /><br>";

$nilai2 = [];
foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}

arsort($nilai2);
echo "Jika diurutkan dari yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br /><br>";

asort($nilai2);
echo "Jika diurutkan dari yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br /><br>";

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya adalah : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br /><br>";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [75];
array_splice($nilai, $key, 1, $nilaiGanti);

echo "Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapatkan nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br /><br>"; 

arsort($nilai);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar hingga yang terkecil menjadi : <b>" . implode(", ", $nilai) . "</b> <br /><br>";
?>
 </div>
</div>

</body>
</html>