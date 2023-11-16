<!DOCTYPE html>
<html>
<head>
    <title>Prediksi Cuaca</title>
</head>
<body>
    <h2>Masukkan temperatur dalam Fahrenheit:</h2>
    <form method="post" action="">
        <input type="number" step="any" name="temperatur" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $temperaturFahrenheit = floatval($_POST['temperatur']);
        $temperaturCelsius = ($temperaturFahrenheit - 32) * 5/9;

        if ($temperaturFahrenheit > 300) {
            echo "<h2>Hasil:</h2>";
            echo "Cuaca: Panas";
        } elseif ($temperaturFahrenheit < 250) {
            echo "<h2>hasil:</h2>";
            echo "Cuaca: Dingin";
        } else {
            echo "<h2>Hasil:</h2>";
            echo "Cuaca: Normal";
        }
    }
    ?>
</body>
</html>