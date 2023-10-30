<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Jeruk</title>
</head>
<body>
    <h1>Kalkulator Harga Jeruk</h1>
    <form method="post" action="">
        <label for="berat">Berat Jeruk (dalam gram):</label>
        <input type="number" id="berat" name="berat" required>
        <br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $harga_per_kg = 500; // dalam rupiah
        $diskon = 0.05; // 5%

        $berat = $_POST['berat'];
        $total_harga_sebelum_diskon = ($berat / 1000) * $harga_per_kg;
        $jumlah_diskon = $total_harga_sebelum_diskon * $diskon;
        $total_harga_setelah_diskon = $total_harga_sebelum_diskon - $jumlah_diskon;

        echo "<h2>Detail Pembelian</h2>";
        echo "Total Harga Sebelum Diskon: " . number_format($total_harga_sebelum_diskon, 2) . " rupiah<br>";
        echo "Diskon (" . ($diskon * 100) . "%): " . number_format($jumlah_diskon, 2) . " rupiah<br>";
        echo "Total Harga Setelah Diskon: " . number_format($total_harga_setelah_diskon, 2) . " rupiah";
    }
    ?>
</body>
</html>
