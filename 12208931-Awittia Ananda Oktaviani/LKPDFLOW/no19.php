<!DOCTYPE html>
<html>
<head>
    <title>Hitung Penghasilan Penjualan Tiket Bioskop</title>
</head>
<body>
    <h1>Penghitungan Penghasilan Penjualan Tiket Bioskop</h1>
    <form method="post" action="">
        <label for="vip">Jumlah Tiket Kelas VIP: </label>
        <input type="number" name="vip" required><br>

        <label for="executive">Jumlah Tiket Kelas Eksekutif: </label>
        <input type="number" name="executive" required><br>

        <label for="economy">Jumlah Tiket Kelas Ekonomi: </label>
        <input type="number" name="economy" required><br>

        <input type="submit" value="Hitung">
    </form>

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
</body>
</html>
