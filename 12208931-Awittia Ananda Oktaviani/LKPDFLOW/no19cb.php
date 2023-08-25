<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Penghasilan Penjualan Tiket Bioskop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
            font-size: 1.2rem;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Penghitungan Penghasilan Penjualan Tiket Bioskop</h1>
    <form method="post" action="">
        <label for="vip">Jumlah Tiket Kelas VIP:</label>
        <input type="number" name="vip" required>

        <label for="executive">Jumlah Tiket Kelas Eksekutif:</label>
        <input type="number" name="executive" required>

        <label for="economy">Jumlah Tiket Kelas Ekonomi:</label>
        <input type="number" name="economy" required>

        <input type="submit" value="Hitung">
    </form>

    <div class="hasil">
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vipTickets = $_POST["vip"];
        $executiveTickets = $_POST["executive"];
        $economyTickets = $_POST["economy"];

        $vipProfit = calculateProfit("VIP", $vipTickets);
        $executiveProfit = calculateProfit("Eksekutif", $executiveTickets);
        $economyProfit = calculateProfit("Ekonomi", $economyTickets);

        $totalProfit = $vipProfit + $executiveProfit + $economyProfit;
        $totalTickets = $vipTickets + $executiveTickets + $economyTickets;

        echo "<h2>Keuntungan per Kelas Tiket:</h2>";
        echo "Kelas VIP: $vipProfit <br>";
        echo "Kelas Eksekutif: $executiveProfit <br>";
        echo "Kelas Ekonomi: $economyProfit <br>";

        echo "<h2>Keuntungan Keseluruhan:</h2>";
        echo "Total Keuntungan: $totalProfit <br>";

        echo "<h2>Jumlah Tiket per Kelas dan Total Tiket:</h2>";
        echo "Kelas VIP: $vipTickets tiket <br>";
        echo "Kelas Eksekutif: $executiveTickets tiket <br>";
        echo "Kelas Ekonomi: $economyTickets tiket <br>";
        echo "Total Tiket: $totalTickets tiket <br>";
    }

    function calculateProfit($class, $tickets) {
        if ($class == "VIP") {
            if ($tickets >= 35) {
                return 0.25 * $tickets;
            } elseif ($tickets >= 20) {
                return 0.15 * $tickets;
            } else {
                return 0.05 * $tickets;
            }
        } elseif ($class == "Eksekutif") {
            if ($tickets >= 40) {
                return 0.20 * $tickets;
            } elseif ($tickets >= 20) {
                return 0.10 * $tickets;
            } else {
                return 0.02 * $tickets;
            }
        } else {
            return 0.07 * $tickets; // Kelas Ekonomi
        }
    }
    ?>
    <style>
        .hasil{
            max-width: 400px;
            margin: 0 auto;
            margin-top: 10px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</body>
</html>
</div>
