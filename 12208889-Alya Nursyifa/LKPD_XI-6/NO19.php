<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghasilan Penjualan Tiket Bioskop</title>
</head>
<body>
    <div class="container">
    <h2>Penghasilan Penjualan Tiket Bioskop</h2>
    <form action="" method="post">
        <h3>Kelas VIP</h3>
        Jumlah Tiket Terjual: <input type="number" name="t_vip" required><br>

        <h3>Kelas Eksekutif</h3>
        Jumlah Tiket Terjual: <input type="number" name="t_eks" required><br>

        <h3>Kelas Ekonomi</h3>
        Jumlah Tiket Terjual: <input type="number" name="t_eko" required><br>

        <br>
        <input type="submit" name="submit" value="Hitung Penghasilan">
    </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $t_vip = $_POST['t_vip'];
        $t_eks = $_POST['t_eks'];
        $t_eko = $_POST['t_eko'];

        $keuntungan_vip = 0;
        $keuntungan_eksekutif = 0;
        $keuntungan_ekonomi = 0;
        $total_keuntungan = 0;

        if ($t_vip >= 35) {
            $keuntungan_vip = 0.25;
        } elseif ($t_vip >= 20) {
            $keuntungan_vip = 0.15;
        } else {
            $keuntungan_vip = 0.05;
        }

        if ($t_eks >= 40) {
            $keuntungan_eksekutif = 0.20;
        } elseif ($t_eks >= 20) {
            $keuntungan_eksekutif = 0.10;
        } else {
            $keuntungan_eksekutif = 0.02;
        }

        $keuntungan_ekonomi = 0.07;

        $total_keuntungan = ($t_vip * 50 * $keuntungan_vip) + ($t_eks * 50 * $keuntungan_eksekutif) + ($t_eko * 50 * $keuntungan_ekonomi);
        echo "<br/>";
        echo "<div class=result>";
        echo "<h3>Hasil Penghitungan</h3>";
        echo "Keuntungan Kelas VIP: $" . number_format($t_vip * 50 * $keuntungan_vip, 2) . "<br>";
        echo "Keuntungan Kelas Eksekutif: $" . number_format($t_eks * 50 * $keuntungan_eksekutif, 2) . "<br>";
        echo "Keuntungan Kelas Ekonomi: $" . number_format($t_eko * 50 * $keuntungan_ekonomi, 2) . "<br>";
        echo "Total Keuntungan: $" . number_format($total_keuntungan, 2);
        echo "</div>";
    }
    ?>
</body>
</html>