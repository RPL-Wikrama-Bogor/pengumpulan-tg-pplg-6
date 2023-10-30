<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Grade</title>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Grade</h2>
        <form method="post" action="">
            <label for="nilai_matematika">Nilai Matematika:</label>
            <input type="number" name="nilai_matematika" required><br>
            
            <label for="nilai_pabp">Nilai PABP:</label>
            <input type="number" name="nilai_pabp" required><br>
            
            <label for="nilai_dpk">Nilai DPK:</label>
            <input type="number" name="nilai_dpk" required><br>
            
            <input type="submit" name="hitung" value="Hitung">
        </form>
        
        <?php
        if (isset($_POST['hitung'])) {
            $nilai_matematika = $_POST['nilai_matematika'];
            $nilai_pabp = $_POST['nilai_pabp'];
            $nilai_dpk = $_POST['nilai_dpk'];
            
            $rata_rata = ($nilai_matematika + $nilai_pabp + $nilai_dpk) / 3;
            
            echo "<div class='result'>";
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
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
