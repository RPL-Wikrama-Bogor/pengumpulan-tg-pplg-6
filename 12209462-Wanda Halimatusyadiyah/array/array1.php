<!DOCTYPE html>
<html>
<head>
<style>
    body {
        background-image :url(https://i.pinimg.com/564x/3b/0e/38/3b0e386caac1473756b5007a9dd283f6.jpg);
		
    }

	h1{
		font-family: "Helvetica Neue";
		color:#EF9595;
	}
    center {
        text-align: center;
        margin-top: 20px;
    }
    .container {
	border: 0px solid #FFB7B7;
    padding: 31px;
    width: 392px;
    margin: 0 auto;
    background-color: #FAF0E6;
    margin-top: 3rem;
	border-radius:80px;
}
</style>
</head>
<body>
<center>
<div class="container">
	<h1>
		Nilai Budi
	</h1>
<?php
$nilai = [88, 79, 74, 84, 92, 89];
echo "<br>";

echo "Nilai budi : <b> <br>" . implode (", ", $nilai) . "</b><br />"; 
echo "Nilai yang paling tinggi yaitu :<br> <b>" . max($nilai) . "</b> <br />"; 
echo "Nilai yang paling kecil yaitu : <br><b>" . min($nilai) . "</b> <br />"; 

$nilai2 = []; 
foreach ($nilai as $nl) { 
    $nilai2[] = $nl;
}
asort($nilai2);
echo "jika diurutkan dari yang terkecil nilai budi yaitu: <br><b>" . implode(", ", $nilai2) . "</b> <br />";

arsort($nilai2);
echo "dan jika diurutkan dari yang terbesar nilai budi yaitu: <br><b>" . implode(", ", $nilai2) . "</b> <br />";

echo "jika dibulatkan, rata-rata dari keseluruhan nilai budi yaitu : <br><b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [75];
array_splice($nilai, $key, 1, $nilaiGanti);

echo "ketika sudah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, budi mendapat nilai <br><b>$nilaiGanti[0]</b><br> Jadi nilai budi yang sekarang yaitu : <br><b>" . implode(", ", $nilai) . "</b> <br />"; 

arsort($nilai);
echo "Dan sekarang, urutan nilai budi dari yang terbesar yaitu : <br><b>" . implode(", ", $nilai) . "</b> <br />";
?>
</div>
</center>
</body>
</html>
