<!DOCTYPE html>
<html>
<head>
    <title>Hitung Penghasilan Penjualan Tiket Bioskop</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h3 {
            margin-top: 20px;
            color: #333;
        }

        h3 + p {
            margin-top: 10px;
        }

        p {
            color: #333;
        }
    </style>
<body>
    <h2>Hitung Penghasilan Penjualan Tiket Bioskop</h2>
    <form method="post" action="">
        <label for="vip">Jumlah Tiket VIP Terjual:</label>
        <input type="number" id="vip" name="vip" min="0"><br><br>
        
        <label for="executive">Jumlah Tiket Eksekutif Terjual:</label>
        <input type="number" id="executive" name="executive" min="0"><br><br>
        
        <label for="economy">Jumlah Tiket Ekonomi Terjual:</label>
        <input type="number" id="economy" name="economy" min="0"><br><br>
        
        <input type="submit" name="submit" value="Hitung">
    </form>
    
    <?php
    if(isset($_POST['submit'])) {
        $terjualVIP = $_POST['vip'];
        $terjualEksekutif = $_POST['executive'];
        $terjualEkonomi = $_POST['economy'];
        
        $hargaTiketVIP = 100; // Harga tiket VIP
        $hargaTiketEksekutif = 75; // Harga tiket Eksekutif
        $hargaTiketEkonomi = 50; // Harga tiket Ekonomi
        
        $keuntunganVIP = 0;
        $keuntunganEksekutif = 0;
        $keuntunganEkonomi = 0;
        
        // Menghitung keuntungan per kelas
        if ($terjualVIP >= 35) {
            $keuntunganVIP = $terjualVIP * $hargaTiketVIP * 0.25;
        } elseif ($terjualVIP >= 20 && $terjualVIP < 35) {
            $keuntunganVIP = $terjualVIP * $hargaTiketVIP * 0.15;
        } else {
            $keuntunganVIP = $terjualVIP * $hargaTiketVIP * 0.05;
        }
        
        if ($terjualEksekutif >= 40) {
            $keuntunganEksekutif = $terjualEksekutif * $hargaTiketEksekutif * 0.20;
        } elseif ($terjualEksekutif >= 20 && $terjualEksekutif < 40) {
            $keuntunganEksekutif = $terjualEksekutif * $hargaTiketEksekutif * 0.10;
        } else {
            $keuntunganEksekutif = $terjualEksekutif * $hargaTiketEksekutif * 0.02;
        }
        
        $keuntunganEkonomi = $terjualEkonomi * $hargaTiketEkonomi * 0.07;
        
        // Menghitung total keuntungan dan tiket terjual
        $totalKeuntungan = $keuntunganVIP + $keuntunganEksekutif + $keuntunganEkonomi;
        $totalTiketTerjual = $terjualVIP + $terjualEksekutif + $terjualEkonomi;
        
        // Menampilkan hasil
        echo "<h3>Keuntungan per Kelas Tiket:</h3>";
        echo "VIP: $keuntunganVIP<br>";
        echo "Eksekutif: $keuntunganEksekutif<br>";
        echo "Ekonomi: $keuntunganEkonomi<br><br>";
        
        echo "<h3>Keuntungan Keseluruhan:</h3>";
        echo "Total Keuntungan: $totalKeuntungan<br><br>";
        
        echo "<h3>Jumlah Tiket Terjual per Kelas:</h3>";
        echo "VIP: $terjualVIP<br>";
        echo "Eksekutif: $terjualEksekutif<br>";
        echo "Ekonomi: $terjualEkonomi<br><br>";
        
        echo "<h3>Total Tiket Terjual dari Seluruh Kelas:</h3>";
        echo "Total Tiket Terjual: $totalTiketTerjual<br>";
    }
    ?>
</body>
</html>
