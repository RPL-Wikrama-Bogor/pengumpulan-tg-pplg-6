<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Gaji Karyawan</title>
</head>
<body>
    <h2>Perhitungan Gaji Karyawan</h2>
    <form method="post" action="">
        <label for="nama">Nama Karyawan:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" name="gaji_pokok" id="gaji_pokok" required><br><br>
        
        <input type="submit" value="Hitung">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $gaji_pokok = $_POST["gaji_pokok"];
        
        // Menghitung tunjangan
        $tunjangan = 0.2 * $gaji_pokok;
        
        // Menghitung pajak
        $pajak = 0.15 * ($gaji_pokok + $tunjangan);
        
        // Menghitung gaji bersih
        $gaji_bersih = $gaji_pokok + $tunjangan - $pajak;
    ?>
    <h3>Hasil Perhitungan</h3>
    <p>Nama Karyawan: <?php echo $nama; ?></p>
    <p>Tunjangan: <?php echo $tunjangan; ?></p>
    <p>Pajak: <?php echo $pajak; ?></p>
    <p>Gaji Bersih: <?php echo $gaji_bersih; ?></p>
    <?php
    }
    ?>
</body>
</html>