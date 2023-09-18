<!DOCTYPE html>
<html>
<head>
    <title>Hitung Penghasilan Penjualan Tiket Bioskop</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h2 {
            color: #4287f5;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4287f5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2553a5;
        }

        h3 {
            color: #4287f5;
        }

        .result {
            text-align: left;
            margin-top: 20px;
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
