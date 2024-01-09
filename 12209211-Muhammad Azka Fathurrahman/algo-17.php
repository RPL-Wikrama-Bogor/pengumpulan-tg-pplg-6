<!DOCTYPE html>
<html>
<head>
    <title>Statistik Bilangan</title>
</head>
<body>

<h2>Mencetak Statistik Bilangan</h2>

<form method="post" action="">
    Masukkan 20 bilangan:<br>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        echo "<input type='number' name='bilangan[]'><br>";
    }
    ?>
    <input type="submit" value="Hitung">
</form>

<?php
if (isset($_POST['bilangan'])) {
    $bilanganArray = $_POST['bilangan'];

    $jumlahBilangan = count($bilanganArray);
    $terbesar = max($bilanganArray);
    $terkecil = min($bilanganArray);
    $rataRata = array_sum($bilanganArray) / $jumlahBilangan;

    echo "<h3>Statistik:</h3>";
    echo "Terbesar: " . $terbesar . "<br>";
    echo "Terkecil: " . $terkecil . "<br>";
    echo "Rata-rata: " . $rataRata . "<br>";
}
?>

</body>
</html>
