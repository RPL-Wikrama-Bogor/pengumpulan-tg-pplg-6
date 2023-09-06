<!DOCTYPE html>
<html>
<head>
    <title>Hitung Penghasilan Penjualan Tiket Bioskop</title>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h2 {
    color: #333;
    text-align: center;
}

form {
    background-color: #f7f7f7;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    width: 300px;
    margin: 0 auto;
}

label {
    display: inline-block;
    width: 150px;
    margin-bottom: 5px;
}

input[type="number"] {
    width: 100px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 15px;
    cursor: pointer;
    border-radius: 3px;
}

input[type="submit"]:hover {
    background-color:#007bff
}

h3 {
    margin-top: 20px;
    text-align: center;
    color: #333;
}
</style>
</head>
<body>

<h2>Hitung Penghasilan Penjualan Tiket Bioskop</h2>

<form method="post" action="">
    <label for="vip">Jumlah Tiket Kelas VIP:</label>
    <input type="number" name="vip" min="0" max="50" ><br>
    
    <label for="eksekutif">Jumlah Tiket Kelas Eksekutif:</label>
    <input type="number" name="eksekutif" min="0" max="50"><br>
    
    <label for="ekonomi">Jumlah Tiket Kelas Ekonomi:</label>
    <input type="number" name="ekonomi" min="0" max="50"><br><br>
    
    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmlhVip = $_POST['vip'];
    $jmlhEksekutif = $_POST['eksekutif'];
    $jmlhEkonomi = $_POST['ekonomi'];
    
    $hargaVIP = 100000;  // Harga tiket kelas VIP
    $hargaEksekutif = 75000;  // Harga tiket kelas Eksekutif
    $hargaEkonomi = 50000;  // Harga tiket kelas Ekonomi
    
    // Hitung total tiket dan keuntungan per kelas
    $totalTiketVIP = $jmlhVip;
    $totalTiketEksekutif = $jmlhEksekutif;
    $totalTiketEkonomi = $jmlhEkonomi;
    
    $keuntunganVIP = 0;
    $keuntunganEksekutif = 0;
    $keuntunganEkonomi = 0;
    
    if ($jmlhVip >= 35) {
        $keuntunganVIP = $jmlhVip * $hargaVIP * 0.25;
    } elseif ($jmlhVip >= 20) {
        $keuntunganVIP = $jmlhVip * $hargaVIP * 0.15;
    } else {
        $keuntunganVIP = $jmlhVip * $hargaVIP * 0.05;
    }
    
    if ($jmlhEksekutif >= 40) {
        $keuntunganEksekutif = $jmlhEksekutif * $hargaEksekutif * 0.20;
    } elseif ($jmlhEksekutif >= 20) {
        $keuntunganEksekutif = $jmlhEksekutif * $hargaEksekutif * 0.10;
    } else {
        $keuntunganEksekutif = $jmlhEksekutif * $hargaEksekutif * 0.02;
    }
    
    $keuntunganEkonomi = $jmlhEkonomi * $hargaEkonomi * 0.07;
    
    $totalKeuntungan = $keuntunganVIP + $keuntunganEksekutif + $keuntunganEkonomi;
    $totalTiket = $totalTiketVIP + $totalTiketEksekutif + $totalTiketEkonomi;
    
    echo "<h3>Hasil Perhitungan:</h3>";
    echo "Keuntungan Kelas VIP: Rp" . number_format($keuntunganVIP, 2) . "<br>";
    echo "Keuntungan Kelas Eksekutif: Rp" . number_format($keuntunganEksekutif, 2) . "<br>";
    echo "Keuntungan Kelas Ekonomi: Rp" . number_format($keuntunganEkonomi, 2) . "<br>";
    echo "Total Keuntungan: Rp" . number_format($totalKeuntungan, 2) . "<br><br>";
    echo "Jumlah Tiket Kelas VIP: " . $totalTiketVIP . " tiket<br>";
    echo "Jumlah Tiket Kelas Eksekutif: " . $totalTiketEksekutif . " tiket<br>";
    echo "Jumlah Tiket Kelas Ekonomi: " . $totalTiketEkonomi . " tiket<br>";
    echo "Total Tiket Keseluruhan: " . $totalTiket . " tiket<br>";
}
?>

</body>
</html>
