<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca</title>


<h2>Cek Cuaca</h2>

<form method="post" action="">
    Masukkan suhu dalam Fahrenheit: <input type="text" name="temperature">
    <input type="submit" name="submit" value="Cek">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['temperature'])) {
        $fahrenheit = floatval($_POST['temperature']);

        // Konversi Fahrenheit ke Celsius
        $celsius = ($fahrenheit - 32) * 5/9;

        if ($celsius > 30) {
            $cuaca ="Panas";
        } elseif ($celsius < 25) {
            $cuaca ="Dingin";
        } else {
            $cuaca ="Normal";
        }
    }
?>
    <h3>hasil analisis cuaca</h3>
    <p>Suhu celcius : <?php echo $celsius; ?>C</p>
    <p>Suhu fahrenheit : <?php echo $fahrenheit; ?>F</p>
    <p>Kondisi cuaca : <?php echo $cuaca; ?></p>
<?php
}
?>

</body>
</html>
