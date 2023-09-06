<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Grade Rata-rata</title>
</head>
<body>
    <h2>Perhitungan Grade Rata-rata</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <label for="nilai_pabp">Nilai PABP:</label>
        <input type="number" name="nilai_pabp" id="nilai_pabp" required><br><br>
        
        <label for="nilai_mtk">Nilai MTK:</label>
        <input type="number" name="nilai_mtk" id="nilai_mtk" required><br><br>
        
        <label for="nilai_dpk">Nilai DPK:</label>
        <input type="number" name="nilai_dpk" id="nilai_dpk" required><br><br>
        
        <input type="submit" value="Hitung">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $nilai_pabp = $_POST["nilai_pabp"];
        $nilai_mtk = $_POST["nilai_mtk"];
        $nilai_dpk = $_POST["nilai_dpk"];
        
        // Menghitung rata-rata
        $rata_rata = ($nilai_pabp + $nilai_mtk + $nilai_dpk) / 3;
        
        // Menentukan grade berdasarkan rata-rata
        if ($rata_rata >= 80 && $rata_rata <= 100) {
            $grade = "A";
        } elseif ($rata_rata >= 75 && $rata_rata < 80) {
            $grade = "B";
        } elseif ($rata_rata >= 65 && $rata_rata < 75) {
            $grade = "C";
        } elseif ($rata_rata >= 45 && $rata_rata < 65) {
            $grade = "D";
        } else {
            $grade = "K";
        }
    ?>
    <h3>Hasil Perhitungan untuk <?php echo $nama; ?></h3>
    <p>Rata-rata: <?php echo $rata_rata; ?></p>
    <p>Grade: <?php echo $grade; ?></p>
    <?php
    }
    ?>
</body>
</html>
