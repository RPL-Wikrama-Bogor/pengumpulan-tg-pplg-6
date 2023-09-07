<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			background: linear-gradient(170deg, #B9F3FC, #AEE2FF, #93C6E7, #FEDEFF);
			height: 465px;
		}
		.form{
			outline : auto;
			width: 500px;
			margin : 50px auto;
			padding: 30px;
			border-radius: 10px;
			margin-top: 170px;
			background-color: #DFCCFB;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="form">
		<h1>Hasil Nilai</h1>
		<?php
		$nilai = [90, 88, 92, 97, 87, 73];

		echo "Nilai : <b>" . implode(", ", $nilai) . "</b> <br />";
		echo "Nilai paling tinggi adalah <b>" . max($nilai) . "</b> <br />";
		echo "Dan nilai paling rendah adalah  <b>" . min($nilai) . "</b> <br />"; 

		$nilai2 = [];
		foreach ($nilai as $nl) { 
			$nilai2[] = $nl; 
		}
		asort($nilai2); 
		echo "Urutan nilai dari yang terkecil dimulai dari <b>" . implode(", ", $nilai2) . "</b> <br />";

		arsort($nilai2); 
		echo "Urutan nilai dari yang terbesar dimulai dari <b>" . implode(", ", $nilai2) . "</b> <br />";

		echo "Rata - rata dari keseluruhan nilai setelah dibulatkan adalah <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

		$key = array_search(min($nilai), $nilai); 
		$nilaiGanti = [75]; 
		array_splice($nilai, $key, 1, $nilaiGanti); 

		echo "Setelah melakukan perbaikan nilai <b>" . min($nilai2) . "</b>, saya berhasi mendapat nilai <b>$nilaiGanti[0]</b>. Jadi keseluruhan nilai saya sekarang adalah <b>" . implode(", ", $nilai) . "</b> <br />"; 

		arsort($nilai);
		echo "Setelah perbaikan, sekarang urutan nilai dari yang terbesar dimulai dari <b>" . implode(", ", $nilai) . "</b> <br />";
		?>
	</div>
</body>
</html>