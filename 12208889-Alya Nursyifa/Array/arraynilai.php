<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
            font-family: Arial, sans-serif;
        }
		.css{
			padding: 30px;
			margin:180px;
			background-color:#E2C799 ;
			margin-top: 10%;
			text-align:center;
			transition: .4s ease;
		}
		.css:hover{
			background-color:#C08261;
			transform: scale(1.02);
		}
	</style>
</head>
<body>

	<div class="css">
	    <h1>Nilai</h1>
		
    <?php
        $nilai = [90, 77, 70, 85, 95, 80];

        echo "Nilai Saya : <b>" . implode(", ", $nilai) . "</b> <br />"; 
        echo "Dari keseluruhan nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br />";
        echo "Sedangkan nilai yang paling kecil : <b>" . min($nilai) . "</b> <br />";

        $nilai2 = [];

        foreach ($nilai as $nl) { 
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
	
</body>
</html>
