<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    
<form action="" method="post">
    <h2>Penjualan Tiket Bioskop</h2>
    <label for="vip">Tiket VIP:</label>
    <input type="number" name="vip" id="vip"><br>
    <label for="eksekutif">Tiket Eksekutif:</label>
    <input type="number" name="eksekutif" id="eksekutif"><br>
    <label for="ekonomi">Tiket Ekonomi:</label>
    <input type="number" name="ekonomi" id="ekonomi"><br>
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
</body>
</html>
