<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Grade</title>
</head>
<body>
    <h2>Kalkulator Grade</h2>
    <form method="post" action="">
        <label for="Nilai_pabp">Nilai Pabp:</label>
        <input type="number" name="Nilai_pabp" required><br>
        
        <label for="Nilai_mtk">Nilai Mtk:</label>
        <input type="number" name="Nilai_mtk" required><br>
        
        <label for="Nilai_Dpk">Nilai Dpk:</label>
        <input type="number" name="Nilai_Dpk" required><br>
        
        <input type="submit" name="hitung" value="Hitung">
    </form>
    
    <?php
    if (isset($_POST['hitung'])) {
        $Nilai_pabp = $_POST['Nilai_pabp'];
        $Nilai_mtk = $_POST['Nilai_mtk'];
        $Nilai_Dpk = $_POST['Nilai_Dpk'];
        
        $rata_rata = ($Nilai_pabp + $Nilai_mtk + $Nilai_Dpk) / 3;
        
        echo "<h3>Hasil:</h3>";
        echo "Rata-rata Nilai: " . number_format($rata_rata, 0) . "<br>";
        
        echo "Grade: ";
        if ($rata_rata >= 80 && $rata_rata <= 100) {
            echo "A";
        } elseif ($rata_rata >= 75 && $rata_rata < 80) {
            echo "B";
        } elseif ($rata_rata >= 65 && $rata_rata < 75) {
            echo "C";
        } elseif ($rata_rata >= 45 && $rata_rata < 65) {
            echo "D";
        } elseif ($rata_rata >= 0 && $rata_rata < 45) {
            echo "E";
        } else {
            echo "K";
        }
    }
    ?>
</body>
</html>