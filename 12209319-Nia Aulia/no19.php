<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<form action="" method="post">
    <center><h2>Penjualan Tiket Bioskop</h2><hr>
    <label for="vip">Tiket VIP</label><br>
    <input type="number" name="vip" id="vip"><br>
    <label for="eksekutif">Tiket Eksekutif</label>
    <input type="number" name="eksekutif" id="eksekutif"><br>
    <label for="ekonomi">Tiket Ekonomi</label>
    <input type="number" name="ekonomi" id="ekonomi"><br><hr>
    <input type="submit" name="submit" class="submit" value="Hitung">
</center>
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

<style>
body {
    background: #DAC0A3;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    width: 300px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #F8F0E5;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    height: 300px;
    margin: 24px;
    box-shadow: -1px -2px 8px 3px rgba(0, 0, 0, 0.23);
    -webkit-box-shadow: -1px -2px 8px 3px rgba(0, 0, 0, 0.23);
    -moz-box-shadow: -1px -2px 8px 3px rgba(0, 0, 0, 0.23);
    border-radius: 10px;
    text-align: left;
    justify-content: center;
}

form h2{
    color:#765827;
    
}
  
htinput {
    display: block;
    border: 2px solid #ccc;
    width: 90%;
    padding: 5px;
    margin: 10px auto;
    border-radius: 5px;
}

label {
    color: #C8AE7D;
    font-size: 18px;
    padding: 15px;
   text-align:center;
}

.submit{
    width:60px;
    border-radius:7px;
    padding:8px 10px;
    float:rig;
    background-color:#DAC0A3;
    color:white;
    border:#DAC0A3;
    
}
  </style>
</body>
</html>