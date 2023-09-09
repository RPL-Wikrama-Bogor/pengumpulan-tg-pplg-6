<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Grade</title>
</head>
<body>
    <h2>Kalkulator Grade</h2>
    <form method="post" action="">
        <label for="nilai_matematika">Nilai Matematika:</label>
        <input type="number" name="nilai_matematika" required><br>
        
        <label for="nilai_bahasa">Nilai Bahasa:</label>
        <input type="number" name="nilai_bahasa" required><br>
        
        <label for="nilai_ipa">Nilai IPA:</label>
        <input type="number" name="nilai_ipa" required><br>
        
        <input type="submit" name="hitung" value="Hitung">
    </form>
    
    <?php
    if (isset($_POST['hitung'])) {
        $nilai_matematika = $_POST['nilai_matematika'];
        $nilai_bahasa = $_POST['nilai_bahasa'];
        $nilai_ipa = $_POST['nilai_ipa'];
        
        $rata_rata = ($nilai_matematika + $nilai_bahasa + $nilai_ipa) / 3;
        
        echo "<h3>Hasil:</h3>";
        echo "Rata-rata Nilai: " . number_format($rata_rata, 2) . "<br>";
        
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


