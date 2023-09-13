<!DOCTYPE html>
<html>
<head>
    <title>statistik bilangan</title>
</head>
<body>
    <h2>statistik bilangan</h2>
    <form action="" method="post">
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<input type='number' name='bilangan[]' placeholder='Bilangan ke-$i' required><br>";
        }
        ?>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];

        $total = 0;
        $terkecil = $bilangan[0];
        $terbesar = $bilangan[0];

        foreach ($bilangan as $angka) {
            $total += $angka;

            if ($angka < $terkecil) {
                $terkecil = $angka;
            }

            if ($angka > $terbesar) {
                $terbesar = $angka;
            }
        }

        $rataRata = $total / count($bilangan);

        echo "<h3>Hasil Statistik</h3>";
        echo "Bilangan Terkecil: $terkecil<br>";
        echo "Bilangan Terbesar: $terbesar<br>";
        echo "Rata-rata: $rataRata";
    }
    ?>
</body>
</html>
