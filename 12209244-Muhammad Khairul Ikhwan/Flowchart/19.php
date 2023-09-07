<!DOCTYPE html>
<html>
<head>
    <title>No 19</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        
        h2 {
            color: #333;
        }
        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        
        h3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <h2>Penghitungan Keuntungan Bioskop</h2>
    <form method="post" action="">
        <label for="vip">Jumlah Tiket VIP Terjual:</label>
        <input type="number" id="vip" name="vip" required><br><br>
        
        <label for="eksekutif">Jumlah Tiket Eksekutif Terjual:</label>
        <input type="number" id="eksekutif" name="eksekutif" required><br><br>
        
        <label for="ekonomi">Jumlah Tiket Ekonomi Terjual:</label>
        <input type="number" id="ekonomi" name="ekonomi" required><br><br>
        
        <input type="submit" name="submit" value="Hitung Keuntungan">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $vipSold = $_POST['vip'];
        $eksekutifSold = $_POST['eksekutif'];
        $ekonomiSold = $_POST['ekonomi'];
        
        $vipProfit = 0;
        $eksekutifProfit = 0;
        $ekonomiProfit = 0;
        
        if ($vipSold >= 35) {
            $vipProfit = $vipSold * 50 * 0.25;
        } elseif ($vipSold >= 20 && $vipSold < 35) {
            $vipProfit = $vipSold * 50 * 0.15;
        } else {
            $vipProfit = $vipSold * 50 * 0.05;
        }
        
        if ($eksekutifSold >= 40) {
            $eksekutifProfit = $eksekutifSold * 50 * 0.20;
        } elseif ($eksekutifSold >= 20 && $eksekutifSold < 40) {
            $eksekutifProfit = $eksekutifSold * 50 * 0.10;
        } else {
            $eksekutifProfit = $eksekutifSold * 50 * 0.02;
        }
        
        $ekonomiProfit = $ekonomiSold * 50 * 0.07;
        
        $totalProfit = $vipProfit + $eksekutifProfit + $ekonomiProfit;
        $totalTickets = ($vipSold + $eksekutifSold + $ekonomiSold) * 50;

        echo "<h3>Keuntungan Per Kelas:</h3>";
        echo "VIP: $vipProfit<br>";
        echo "Eksekutif: $eksekutifProfit<br>";
        echo "Ekonomi: $ekonomiProfit<br><br>";
        
        echo "Keuntungan Keseluruhan: $totalProfit<br>";
        echo "Jumlah Tiket VIP Terjual: " . ($vipSold * 50) . "<br>";
        echo "Jumlah Tiket Eksekutif Terjual: " . ($eksekutifSold * 50) . "<br>";
        echo "Jumlah Tiket Ekonomi Terjual: " . ($ekonomiSold * 50) . "<br>";
        echo "Total Tiket Terjual: $totalTickets";
    }
    ?>
</body>
</html>
 