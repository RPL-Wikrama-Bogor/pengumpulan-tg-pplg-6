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
    background-color: #0056b3;
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
    <input type="number" name="vip"><br>
    
    <label for="eksekutif">Jumlah Tiket Kelas Eksekutif:</label>
    <input type="number" name="eksekutif"><br>
    
    <label for="ekonomi">Jumlah Tiket Kelas Ekonomi:</label>
    <input type="number" name="ekonomi"><br><br>
    
    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlahVIP = $_POST['vip'];
    $jumlahEksekutif = $_POST['eksekutif'];
    $jumlahEkonomi = $_POST['ekonomi'];
    
    $hargaVIP = 100;  // Harga tiket kelas VIP
    $hargaEksekutif = 75;  // Harga tiket kelas Eksekutif
    $hargaEkonomi = 50;  // Harga tiket kelas Ekonomi
    
    // Hitung total tiket dan keuntungan per kelas
    $totalTiketVIP = $jumlahVIP;
    $totalTiketEksekutif = $jumlahEksekutif;
    $totalTiketEkonomi = $jumlahEkonomi;
    
    $keuntunganVIP = 0;
    $keuntunganEksekutif = 0;
    $keuntunganEkonomi = 0;
    
    if ($jumlahVIP >= 35) {
        $keuntunganVIP = $jumlahVIP * $hargaVIP * 0.25;
    } elseif ($jumlahVIP >= 20) {
        $keuntunganVIP = $jumlahVIP * $hargaVIP * 0.15;
    } else {
        $keuntunganVIP = $jumlahVIP * $hargaVIP * 0.05;
    }
    
    if ($jumlahEksekutif >= 40) {
        $keuntunganEksekutif = $jumlahEksekutif * $hargaEksekutif * 0.20;
    } elseif ($jumlahEksekutif >= 20) {
        $keuntunganEksekutif = $jumlahEksekutif * $hargaEksekutif * 0.10;
    } else {
        $keuntunganEksekutif = $jumlahEksekutif * $hargaEksekutif * 0.02;
    }
    
    $keuntunganEkonomi = $jumlahEkonomi * $hargaEkonomi * 0.07;
    
    $totalKeuntungan = $keuntunganVIP + $keuntunganEksekutif + $keuntunganEkonomi;
    $totalTiket = $totalTiketVIP + $totalTiketEksekutif + $totalTiketEkonomi;
    
    echo "<h3>Hasil Perhitungan:</h3>";
    echo "Keuntungan Kelas VIP: $" . number_format($keuntunganVIP, 2) . "<br>";
    echo "Keuntungan Kelas Eksekutif: $" . number_format($keuntunganEksekutif, 2) . "<br>";
    echo "Keuntungan Kelas Ekonomi: $" . number_format($keuntunganEkonomi, 2) . "<br>";
    echo "Total Keuntungan: $" . number_format($totalKeuntungan, 2) . "<br><br>";
    echo "Jumlah Tiket Kelas VIP: " . $totalTiketVIP . " tiket<br>";
    echo "Jumlah Tiket Kelas Eksekutif: " . $totalTiketEksekutif . " tiket<br>";
    echo "Jumlah Tiket Kelas Ekonomi: " . $totalTiketEkonomi . " tiket<br>";
    echo "Total Tiket Keseluruhan: " . $totalTiket . " tiket<br>";
}
?>

</body>
</html>
