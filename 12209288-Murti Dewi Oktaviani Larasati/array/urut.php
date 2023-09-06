<!DOCTYPE html>
<html lang="en">
<head>
   
<style>
        body{
          background-image: url(https://i.pinimg.com/564x/de/57/64/de5764069ce3c87105dac291093e7ef9.jpg);
          background-size:cover;
          background-repeat:none;
        }
        .kotak {
            background-color: #EEEEEE;
            padding: 20px;
             border-radius: 10px;
             max-width: 600px;
             margin: 120px;
             text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            
        }


        </style>
</head>
<center>
<body>
<div class="kotak">
    <h1>NILAI SAYA</h1>

<div class="hasil">
<?php
$nilai = [90, 95, 70, 84, 87, 85];

echo "Nilai Murti : <b>" . implode(", ", $nilai) . "</b> <br />";
echo "Nilai Tertinggi : <b>" . max($nilai) . "</b> <br />";
echo "Nilai Terkecil : <b>" . min($nilai) . "</b> <br />";

$nilai2 = [];
foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}
asort($nilai2);
echo "Urutan dari yang terkecil : <b>" . implode(", ", $nilai2) . "</b> <br />";

arsort($nilai2);
echo "Urutan dari yang terbesar: <b>" . implode(", ", $nilai2) . "</b> <br />";

echo "Apabila dibulatkan, rata-rata  : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [75];
array_splice($nilai, $key, 1, $nilaiGanti);

echo "Setelah melakukan remedial untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br />"; 

arsort($nilai);
echo "Dan sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(", ", $nilai) . "</b> <br />";
?>

</center>
</div>
</div>
</body>
</html>