<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <center>
<style>
        body{
        background-color: #FFB7B7;
        background-repeat: no-repeat;
        background-size:cover;
        font-family:  'sans-serif';
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        form {
        background-color: #F8F6F4;
        border-radius: 25px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
         width: 300px;
        }

        label {
        display: block;
        margin-bottom: 15px;
        border-radius: 30px;
        font-weight: bold;

        }

       


        
        </style>

<form action="" method="post">
    <h2>Penjualan Tiket Bioskop</h2>
    <label for="vip">Tiket VIP:</label>
    <input type="number" name="vip" id="vip"><br><br>
    <label for="eksekutif">Tiket Eksekutif:</label>
    <input type="number" name="eksekutif" id="eksekutif"><br><br>
    <label for="ekonomi">Tiket Ekonomi:</label>
    <input type="number" name="ekonomi" id="ekonomi"><br><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if (isset($_POST['submit'])) {
    $tiketVIP = $_POST['vip'];
    $tiketEksekutif = $_POST['eksekutif'];
    $tiketEkonomi = $_POST['ekonomi'];

    $kelasVIP = 50;
    $kelasEksekutif = 50;
    $kelasEkonomi = 50;

    $totalTiket = $tiketVIP + $tiketEksekutif + $tiketEkonomi;

    $keuntunganVIP = 0;
    if ($tiketVIP >= 35) {
        $keuntunganVIP = $tiketVIP * $kelasVIP * 0.25;
    } elseif ($tiketVIP >= 20) {
        $keuntunganVIP = $tiketVIP * $kelasVIP * 0.15;
    } else {
        $keuntunganVIP = $tiketVIP * $kelasVIP * 0.05;
    }

    $keuntunganEksekutif = 0;
    if ($tiketEksekutif >= 40) {
        $keuntunganEksekutif = $tiketEksekutif * $kelasEksekutif * 0.20;
    } elseif ($tiketEksekutif >= 20) {
        $keuntunganEksekutif = $tiketEksekutif * $kelasEksekutif * 0.10;
    } else {
        $keuntunganEksekutif = $tiketEksekutif * $kelasEksekutif * 0.02;
    }

    $keuntunganEkonomi = $tiketEkonomi * $kelasEkonomi * 0.07;

    $totalKeuntungan = $keuntunganVIP + $keuntunganEksekutif + $keuntunganEkonomi;

    echo "<h2>Hasil Perhitungan:</h2>";
    echo "Keuntungan Tiket VIP: $" . number_format($keuntunganVIP, 2) . "<br>";
    echo "Keuntungan Tiket Eksekutif: $" . number_format($keuntunganEksekutif, 2) . "<br>";
    echo "Keuntungan Tiket Ekonomi: $" . number_format($keuntunganEkonomi, 2) . "<br>";
    echo "Keuntungan Keseluruhan: $" . number_format($totalKeuntungan, 2) . "<br>";
    echo "Jumlah Tiket VIP Terjual: " . $tiketVIP . "<br>";
    echo "Jumlah Tiket Eksekutif Terjual: " . $tiketEksekutif . "<br>";
    echo "Jumlah Tiket Ekonomi Terjual: " . $tiketEkonomi . "<br>";
    echo "Total Jumlah Tiket Terjual: " . $totalTiket . "<br>";
}
?>
</center>
</body>
</html>