	
	
	<?php
	$nilai = [70, 82, 95, 84, 90, 76, ];

	// echo "Nilai Saya : <b>" . implode(", ", $nilai) . "</b> <br />";
	// menampilkan seluruh nilai didalam variable
	// echo "Niali terbesar saya adalah : <b>" . max($nilai) . "</b> <br />"; // mencari nilai terbesar dalam variabel
	// echo "Nilai terkecil saya adalah : <b>" . min($nilai) . "</b> <br />";
	// 
	$nilai2 = [];
	foreach ($nilai as $nl) {
		$nilai2[] = $nl; //memecahkan sebuah variable
	}
	arsort($nilai2);// mencari (menjabarkan) nilai dari yang  terbesar
	// echo "Pengurutan nilai dari yang terbesar : <b>" . implode(", ", $nilai2) . "</b> <br />";

	asort($nilai2); // mencari (menjabarkan) nilai dari yang  terkecil
	// echo "Pengurutan nilai dari yang terkecil : <b>" . implode(", ", $nilai2) . "</b> <br />";

	// echo "Rata-rata nilai saya dan di bulatkan menjadi : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

	$key = array_search(min($nilai), $nilai);
	$nilaiGanti = [75];
	array_splice($nilai, $key, 1, $nilaiGanti); // berfungsi me replice atau mengubah nilai terkecil pada sebuah varible

	// echo "Nilai sebelum saya melakukan perbaikan adalah :  <b>" . min($nilai2) . "</b>, setelah saya melakukan perbaikan nilai saya menjadi : <b>$nilaiGanti[0]</b>. Nilai saya sekarang adalah <b>" . implode(", ", $nilai) . "</b> <br />"; // menampilkan nilai yang sebelum di ganti dan setelah di gganti

	arsort($nilai);
	// echo "Sehingga nilai saya sekarang adalah : <b>" . implode(", ", $nilai) . "</b> <br />"; //menampilkan nilai dari yang terbesa

	?>
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Nilai</title>
    <style>
		
        .card {
			
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			text-align: center;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="card" >
        <h2>Nilai Saya</h2>
        <p><strong>Nilai:</strong> <?php echo implode(", ", $nilai); ?></p>
        <p><strong>Nilai Terbesar:</strong> <?php echo max($nilai); ?></p>
        <p><strong>Nilai Terkecil:</strong> <?php echo min($nilai); ?></p>
        <p><strong>Pengurutan Nilai Terbesar ke Terkecil:</strong> <?php echo implode(", ", $nilai2); ?></p>
        <p><strong>Pengurutan Nilai Terkecil ke Terbesar:</strong> <?php echo implode(", ", $nilai2); ?></p>
        <p><strong>Rata-rata Nilai:</strong> <?php echo round(array_sum($nilai)/count($nilai)); ?></p>
        <?php
        $key = array_search(min($nilai), $nilai);
        $nilaiGanti = [75];
        array_splice($nilai, $key, 1, $nilaiGanti);
        ?>
        <p><strong>Perbaikan Nilai:</strong> Nilai terkecil sebelumnya adalah <?php echo min($nilai2); ?>, setelah perbaikan menjadi <?php echo $nilaiGanti[0]; ?></p>
        <p><strong>Nilai Saya Setelah Perbaikan:</strong> <?php echo implode(", ", $nilai); ?></p>
        <p><strong>Nilai Terbesar Setelah Perbaikan:</strong> <?php arsort($nilai); echo implode(", ", $nilai); ?></p>
    </div>
</body>
</html>
