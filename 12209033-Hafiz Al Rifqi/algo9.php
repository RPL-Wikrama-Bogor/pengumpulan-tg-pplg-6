<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca</title>
</head>
<body>
    <form method="post" action="">
        <label for="temperature">Masukkan suhu dalam Fahrenheit:</label>
        <input type="text" id="temperature" name="temperature" required>
        <button type="submit">Cek Cuaca</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperatureFahrenheit = $_POST["temperature"];

        // Konversi suhu Fahrenheit ke Celsius
        $temperatureCelsius = ($temperatureFahrenheit - 32) * 5 / 9;

        if ($temperatureCelsius > 30) {
            echo "Cuaca: Panas";
        } elseif ($temperatureCelsius < 25) {
            echo "Cuaca: Dingin";
        } else {
            echo "Cuaca: Normal";
        }
    }
    ?>
</body>
</html>