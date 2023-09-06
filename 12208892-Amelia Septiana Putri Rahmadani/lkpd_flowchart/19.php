<?php
    $terjual_vip;
    $terjual_eksekutif;
    $terjual_ekonomi;
    $keuntungan_vip;
    $keuntungan_eksekutif;
    $keuntungan_ekonomi;
    $total_keuntungan;
    $totaltiketterjual;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghasilan Penjualan Tiket Bioskop</title>
    <style>
        
        body {
        font-family: Arial, sans-serif;
        background-image: url("https://i.pinimg.com/564x/7a/28/1a/7a281aee99ba56650f767635104d60d6.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
        }

        .container {
        background-color: #ffeadd;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
        margin-top: 50px;
    }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }
        
        input {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
             }
        
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            }

        input[type="submit"]:hover {
            background-color: #0056b3;
            }

    </style>
</head>
<body>
    <div class="container">
        <h1>Penghasilan Penjualan Tiket Bioskop</h1>
        <form action="" method="post">
        <table>
            <tr>
                <td>Jumlah tiket VIP terjual</td>
                <td></td>
                <td><input type="number" name="terjual_vip"></td>
            </tr>
            <tr>
                <td>Jumlah tiket Eksekutif terjual</td>
                <td></td>
                <td><input type="number" name="terjual_eksekutif"></td>
            </tr>
            <tr>
                <td>Jumlah tiket Ekonomi terjual</td>
                <td></td>
                <td><input type="number" name="terjual_ekonomi"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>         
        </table>
    </form>
        
        <?php
         if (isset($_POST["submit"])) {
            $terjual_vip = intval($_POST["terjual_vip"]);
            $terjual_eksekutif = intval($_POST["terjual_eksekutif"]);
            $terjual_ekonomi = intval($_POST["terjual_ekonomi"]);
            
            $keuntungan_vip = 0;
            if ($terjual_vip >= 35) {
                $keuntungan_vip = $terjual_vip * 0.25;
            } elseif ($terjual_vip >= 20 && $terjual_vip < 35) {
                $keuntungan_vip = $terjual_vip * 0.15;
            } else {
                $keuntungan_vip = $terjual_vip * 0.05;
            }
 
            $keuntungan_eksekutif = 0;
            if ($terjual_eksekutif >= 40) {
                $keuntungan_eksekutif = $terjual_eksekutif * 0.20;
            } elseif ($terjual_eksekutif >= 20 && $terjual_eksekutif < 40) {
                $keuntungan_eksekutif = $terjual_eksekutif * 0.10;
            } else {
                $keuntungan_eksekutif = $terjual_eksekutif * 0.02;
            }

            $keuntungan_ekonomi = $terjual_ekonomi * 0.07;

            // Menghitung total keuntungan
            $total_keuntungan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;

            // Menghitung total tiket terjual
            $totaltiketterjual = $terjual_vip + $terjual_eksekutif + $terjual_ekonomi;

            
            echo "<h2>Hasil</h2>";
            echo "Keuntungan dari tiket VIP= $keuntungan_vip<br>";
            echo "Keuntungan dari tiket Eksekutif= $keuntungan_eksekutif<br>";
            echo "Keuntungan dari tiket Ekonomi= <br>";
            echo "Total keuntungan= $total_keuntungan<br>";
            echo "Total tiket terjual dari seluruh kelas= $totaltiketterjual<br>";
        }
        ?>
    </div>
</body>
</html>
