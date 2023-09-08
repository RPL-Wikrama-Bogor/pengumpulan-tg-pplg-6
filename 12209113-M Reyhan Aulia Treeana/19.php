<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngitung tiket</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        input[type="text"] {
            width: 90px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 3px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <form method="post" action="">
        <table>
            <tr>
                <td>Tiket VIP</td>
                <td><input type="text" name="jumlah_tiket_VIP"></td>
                <td>Tiket Eksekutif</td>
                <td><input type="text" name="jumlah_tiket_Eksekutif"></td>
                <td>Tiket Ekonomi</td>
                <td><input type="text" name="jumlah_tiket_Ekonomi"></td>
            </tr>
            <tr>
                <td colspan="6"><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>



<center>

<?php
$total_profit = 0;
$total_tickets = 0;

if (isset($_POST['submit'])) {
    $jumlah_tiket_VIP = $_POST['jumlah_tiket_VIP'];
    $jumlah_tiket_Eksekutif = $_POST['jumlah_tiket_Eksekutif'];
    $jumlah_tiket_Ekonomi = $_POST['jumlah_tiket_Ekonomi'];

    $total_tickets = $jumlah_tiket_VIP + $jumlah_tiket_Eksekutif + $jumlah_tiket_Ekonomi;

    if ($jumlah_tiket_VIP >= 35) {
        $keuntungan_VIP = 0.25 * $jumlah_tiket_VIP;
    } elseif ($jumlah_tiket_VIP >= 20) {
        $keuntungan_VIP = 0.15 * $jumlah_tiket_VIP;
    } else {
        $keuntungan_VIP = 0.05 * $jumlah_tiket_VIP;
    }

    if ($jumlah_tiket_Eksekutif >= 40) {
        $keuntungan_Eksekutif = 0.20 * $jumlah_tiket_Eksekutif;
    } elseif ($jumlah_tiket_Eksekutif >= 20) {
        $keuntungan_Eksekutif = 0.10 * $jumlah_tiket_Eksekutif;
    } else {
        $keuntungan_Eksekutif = 0.02 * $jumlah_tiket_Eksekutif;
    }

    $keuntungan_Ekonomi = 0.07 * $jumlah_tiket_Ekonomi;

    $total_profit = $keuntungan_VIP + $keuntungan_Eksekutif + $keuntungan_Ekonomi;

    echo "Keuntungan VIP: " . $keuntungan_VIP . " (" . round(($keuntungan_VIP / $total_profit) * 100) . "%)</br>";
    echo "Keuntungan Eksekutif: " . $keuntungan_Eksekutif . " (" . round(($keuntungan_Eksekutif / $total_profit) * 100) . "%)</br>";
    echo "Keuntungan Ekonomi: " . $keuntungan_Ekonomi . " (" . round(($keuntungan_Ekonomi / $total_profit) * 100) . "%)</br>";
    echo "Total Keuntungan: " . $total_profit ." (" . round(($total_profit / 3) * 100) . "%)</br>";
    echo "Jumlah Tiket VIP: " . $jumlah_tiket_VIP . "</br>";
    echo "Jumlah Tiket Eksekutif: " . $jumlah_tiket_Eksekutif . "</br>";
    echo "Jumlah Tiket Ekonomi: " . $jumlah_tiket_Ekonomi . "</br>";
    echo "Total Tiket: " . $total_tickets . "</br>";
}
?>

</center>

</body>
</html>