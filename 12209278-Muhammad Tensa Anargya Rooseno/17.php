<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Bilangan</title>
</head>
<body>

<form method="post" action="">
    <label for="bilangan">Masukkan 20 bilangan:</label><br>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        echo "<input type='number' name='bilangan[]'><br>";
    }
    ?>
    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilanganInput = $_POST["bilangan"];
    $jumlahBilangan = count($bilanganInput);
    $total = array_sum($bilanganInput);
    $rataRata = $total / $jumlahBilangan;
    $terbesar = max($bilanganInput);
    $terkecil = min($bilanganInput);

    echo "Bilangan terbesar: " . $terbesar . "<br>";
    echo "Bilangan terkecil: " . $terkecil . "<br>";
    echo "Rata-rata: " . $rataRata . "<br>";
}
?>

</body>
</html>
