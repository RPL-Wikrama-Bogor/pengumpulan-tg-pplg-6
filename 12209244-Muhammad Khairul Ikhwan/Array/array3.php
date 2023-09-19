<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }

        table {
            max-width: 50%;
            border-collapse: collapse;
            border: 1px solid #dddddd;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .daftar {
            margin-bottom: 50px;
        }

        hr {
            margin-bottom: 50px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="daftar">
        <center>
            <h2 style="margin: 70px 0px 50px 0px;">Harga Menu Makanan & Minuman</h2>
            <table>
                <tr>
                    <th>Bakso</th>
                    <td>Rp. 15.000</td>
                </tr>
                <tr>
                    <th>Mie Ayam</th>
                    <td>Rp. 15.000</td>
                </tr>
                <tr>
                    <th>Mie Ayam Bakso</th>
                    <td>Rp. 20.000</td>
                </tr>
                <tr>
                    <th>Es Jeruk</th>
                    <td>Rp. 5.000</td>
                </tr>
                <tr>
                    <th>Es Teh Manis</th>
                    <td>Rp. 5.000</td>
                </tr>
            </table>
        </center>
    </div>

    <hr>

    <center>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menu = [
        "Makanan" => [
            ["nama" => "Bakso", "harga" => 15000],
            ["nama" => "Mie Ayam", "harga" => 15000],
            ["nama" => "Mie Ayam Bakso", "harga" => 20000]
        ],
        "Minuman" => [
            ["nama" => "Es Jeruk", "harga" => 5000],
            ["nama" => "Es Teh Manis", "harga" => 5000]
        ]
    ];

    $makanan = $_POST["makan"];
    $jumlahMakanan = (int)$_POST["jumlMkn"];
    $minuman = $_POST["minum"];
    $jumlahMinuman = (int)$_POST["jumlMin"];

    $totalMakanan = 0;
    $totalMinuman = 0;

    // Menghitung total harga makanan
    foreach ($menu["Makanan"] as $item) {
        if ($item["nama"] == $makanan) {
            $totalMakanan = $item["harga"] * $jumlahMakanan;
            break;
        }
    }

    // Menghitung total harga minuman
    foreach ($menu["Minuman"] as $item) {
        if ($item["nama"] == $minuman) {
            $totalMinuman = $item["harga"] * $jumlahMinuman;
            break;
        }
    }

    $diskonMakanan = 0;
    $diskonMinuman = 0;

    if ($jumlahMakanan >= 3) {
        $diskonMakanan = $totalMakanan * 0.05;
    }
    if ($jumlahMakanan >= 5) {
        $diskonMakanan = $totalMakanan * 0.10;
    }

    if ($jumlahMinuman >= 3) {
        $diskonMinuman = $totalMinuman * 0.05;
    }
    if ($jumlahMinuman >= 5) {
        $diskonMinuman = $totalMinuman * 0.10;
    }

    $setelahDiskonMakanan = $totalMakanan - $diskonMakanan;
    $setelahDiskonMinuman = $totalMinuman - $diskonMinuman;
    $totalBayar = $setelahDiskonMakanan + $setelahDiskonMinuman;

    $orderDetails = [
        "Menu Makanan" => $makanan,
        "Jumlah Makanan" => $jumlahMakanan,
        "Total Harga Makanan" => $totalMakanan,
        "Setelah Diskon Makanan" => $setelahDiskonMakanan,
        "Menu Minuman" => $minuman,
        "Jumlah Minuman" => $jumlahMinuman,
        "Total Harga Minuman" => $totalMinuman,
        "Setelah Diskon Minuman" => $setelahDiskonMinuman,
        "Total Bayar" => $totalBayar,
    ];

    echo "<h2>Bukti Pembelian</h2>";
    echo "<table border='1' style='margin-bottom: 50px;'>";
    foreach ($orderDetails as $key => $value) {
        echo "<tr>";
        echo "<th>$key</th>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
        <form method="post">
            <table>
                <tr>
                    <td>Makanan</td>
                    <td>
                        <select name="makan" required>
                            <option hidden>--Pilih Makan--</option>
                            <option value="Bakso">Bakso</option>
                            <option value="Mie Ayam">Mie Ayam</option>
                            <option value="Mie Ayam Bakso">Mie Ayam Bakso</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Makanan</td>
                    <td><input type="number" name="jumlMkn" required></td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td>
                        <select name="minum" required>
                            <option hidden>--Pilih Minuman--</option>
                            <option value="Es Jeruk">Es Jeruk</option>
                            <option value="Es Teh Manis">Es Teh Manis</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Minuman</td>
                    <td><input type="number" name="jumlMin" required></td>
                </tr>
                <tr>
                    <td>Pesan</td>
                    <td><input type="submit" name="submit" value="Pesan"></td>
                </tr>
            </table>
        </form>
    </center>

    <hr>
</body>
</html>
