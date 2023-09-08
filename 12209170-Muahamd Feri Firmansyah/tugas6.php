<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h2>Konversi Detik ke Jam-Menit-Detik</h2>
    <form method="post" action="">
        <label for="total_detik">Total Detik:</label>
        <input type="number" name="total_detik" id="total_detik" required><br><br>
        
        <input type="submit" value="Konversi">
    </form>
    <br>
    <?php   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total_detik = $_POST["total_detik"];
        
        $jam = floor($total_detik / 3600);
        $sisa_detik = $total_detik % 3600;
        $menit = floor($sisa_detik / 60);
        $detik = $sisa_detik % 60;
    ?>
    <h3>Hasil Konversi</h3>
    <p><?php echo $jam; ?> jam <?php echo $menit; ?> menit <?php echo $detik; ?> detik</p>
    <?php
    }
    ?>
</body>
</html>

