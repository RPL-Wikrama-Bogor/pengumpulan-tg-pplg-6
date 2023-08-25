<!DOCTYPE html>
<html>
<head>
    <title>Konversi Total Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h2>Konversi Total Detik ke Jam-Menit-Detik</h2>
    <form method="post" action="">
        Total Detik: <input type="number" name="totalDetik" min="0"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $totalDetik = isset($_POST['totalDetik']) ? (int)$_POST['totalDetik'] : 0;

        $jam = floor($totalDetik / 3600);
        $sisaDetik = $totalDetik % 3600;
        $menit = floor($sisaDetik / 60);
        $detik = $sisaDetik % 60;
        
        echo "Hasil konversi: $jam jam $menit menit $detik detik ";
        
    }
    ?>
</body>
</html>
