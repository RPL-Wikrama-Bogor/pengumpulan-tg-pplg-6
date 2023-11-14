<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Buah Jeruk</title>
</head>
<body>
    <h2>Kalkulator Harga Buah Jeruk</h2>
    <form method="post">
        Masukkan berat buah jeruk (dalam gram): <input type="number" name="berat" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat = $_POST["berat"];
        $harga_per_100g = 500;

        
        $total_harga_sebelum_diskon = ($berat / 100) * $harga_per_100g;

       
        $diskon = 0.05 * $total_harga_sebelum_diskon;

       
        $total_harga_setelah_diskon = $total_harga_sebelum_diskon - $diskon;

        echo "Berat buah jeruk: $berat gram<br>";
        echo "Total harga sebelum diskon: " . number_format($total_harga_sebelum_diskon, 2) . " rupiah<br>";
        echo "Diskon (5%): " . number_format($diskon, 2) . " rupiah<br>";
        echo "Total harga setelah diskon: " . number_format($total_harga_setelah_diskon, 2) . " rupiah<br>";
    }
    ?>
</body>
</html>