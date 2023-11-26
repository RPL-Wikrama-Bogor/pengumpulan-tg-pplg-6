<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Harga Bensin</title>
</head>
<body>
    <h1>Harga Bensin</h1>
    
    <form method="post">
        <label for="liter">Jumlah Liter Bensin:</label>
        <input type="number" name="liter" id="liter" required>
        <br><br>

        <label for="merek">Merek Bensin:</label>
        <select name="merek" id="merek" required>
            <option value="Shell">Shell</option>
            <option value="Pertamax">Pertamax</option>
            <option value="Pertalite">Pertalite</option>
        </select>
        <br><br>

        <input type="submit" name="hitung" value="Hitung Total Harga">
    </form>

    <?php
    if (isset($_POST["hitung"])) {
        $liter = $_POST["liter"];
        $merek = $_POST["merek"];
        
        // Definisikan harga per liter berdasarkan merek bensin
        $harga_per_liter = 0;
        
        if ($merek == "Shell") {
            $harga_per_liter = 16000; // Harga per liter Shell
        } elseif ($merek == "Pertamax") {
            $harga_per_liter = 17000; // Harga per liter Pertamax
        } elseif ($merek == "Pertalite") {
            $harga_per_liter = 10000; // Harga per liter Pertalite
        }

        // Hitung total harga
        $total_harga = $liter * $harga_per_liter;
        
        // Tampilkan hasil
        echo "<h2>Hasil Perhitungan</h2>";
        echo "Merek Bensin: $merek<br>";
        echo "Jumlah Liter Bensin: $liter liter<br>";
        echo "Harga per Liter: Rp " . number_format($harga_per_liter, 2) . "<br>";
        echo "Total Harga: Rp " . number_format($total_harga, 2);
    }
    ?>
</body>
</html>
