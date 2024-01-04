<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Harga Buah</title>
</head>
<body>
    <h2>Perhitungan Total Harga Buah</h2>
    <form method="post" action="">
        <label for="jenis_buah">Jenis Buah:</label>
        <input type="text" name="jenis_buah" id="jenis_buah" required><br><br>
        
        <label for="berat_buah">Berat Buah (gram):</label>
        <input type="number" name="berat_buah" id="berat_buah" required><br><br>
        
        <input type="submit" value="Hitung">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jenis_buah = $_POST["jenis_buah"];
        $berat_buah_gram = $_POST["berat_buah"];
        
        // Harga per 100 gram (500 rupiah)
        $harga_per_100_gram = 500;
        
        // Menghitung total harga sebelum diskon
        $total_harga_sebelum_diskon = ($berat_buah_gram / 100) * $harga_per_100_gram;
        
        // Menghitung diskon (5% dari total harga sebelum diskon)
        $diskon = 0.05 * $total_harga_sebelum_diskon;
        
        // Menghitung total harga setelah diskon
        $total_harga_setelah_diskon = $total_harga_sebelum_diskon - $diskon;
    ?>
    <h3>Hasil Perhitungan untuk <?php echo $jenis_buah; ?></h3>
    <p>Total berat buah <?php echo $jenis_buah; ?> <?php echo $berat_buah_gram; ?> G</p>
    <p>Total Harga Sebelum Diskon: <?php echo $total_harga_sebelum_diskon; ?> rupiah</p>
    <p>Diskon: <?php echo $diskon; ?> rupiah</p>
    <p>Total Harga Setelah Diskon: <?php echo $total_harga_setelah_diskon; ?> rupiah</p>
    <?php
    }
    ?>
</body>
</html>

