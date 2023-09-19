<!DOCTYPE html>
<html>
<head>
    <title>Analisis Cuaca</title>
</head>
<body>
    <h2>Analisis Cuaca</h2>
    <form method="post" action="">
        <label for="suhu">Masukkan Suhu (Fahrenheit):</label>
        <input type="number" name="suhu" id="suhu" required><br><br>
        
        <input type="submit" value="Analisis">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $suhu_fahrenheit = $_POST["suhu"];

        $celcius = ($suhu_fahrenheit - 32)*5/9;
  
        
        // Mengecek kondisi cuaca
        if ($celcius > 30) {
            $cuaca = "Panas";
        } elseif ($celcius < 25) {
            $cuaca = "Dingin";
        } else {
            $cuaca = "Normal";
        }
    ?>
    <h3>Hasil Analisis Cuaca</h3>
    <p>Suhu Celcius : <?php echo $celcius; ?>°C</p>
    <p>Suhu Fahrenheit : <?php echo $suhu_fahrenheit; ?>°F</p>
    <p>Kondisi Cuaca : <?php echo $cuaca; ?></p>

    <?php
    }
    ?>
</body>
</html>
