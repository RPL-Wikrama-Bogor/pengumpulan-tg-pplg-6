<!DOCTYPE html>
<html>
<head>
    <title>Konversi Waktu ke Detik</title>
</head>
<body>

<h2>Konversi Waktu ke Detik</h2>

<form method="post" action="">
    Jam: <input type="number" name="jam" min="0" max="24" required><br>
    Menit: <input type="number" name="menit" min="0" required><br>
    Detik: <input type="number" name="detik" min="0" required><br>
    <input type="submit" value="Konversi">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jam = $_POST["jam"];
    $menit = $_POST["menit"];
    $detik = $_POST["detik"];

    $totalDetik = ($jam * 3600) + ($menit * 60) + $detik;

    echo "<p>Total Detik: $totalDetik detik</p>";
}
?>

</body>
</html>
