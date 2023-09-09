<!DOCTYPE html>
<html>
<head>
    <title>Daftar Menu</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        input[type="number"] {
            width: 40px;
            padding: 5px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        h2 {
            color: #333;
        }
    </style>
<body>
    <center>
    <h1>Daftar Menu</h1>
    
        <ul>1. Menu: Nasi Goreng
            <br>
            Harga: 15000
        </ul>
        <ul>2. Menu: Ayam Goreng
            <br>
            Harga: 20000
        </ul>
        <ul>3. Menu: Biawak Goreng
            <br>
            Harga: 45000
        </ul>
        <ul>4. Menu: Es Teh Manis
            <br>
            Harga: 5000
        </ul>
        <ul>5. Menu: Es Jeruk
            <br>
            Harga: 7000
        </ul>


    <?php
    // Array menu
    $menu = [
        [
            "nama" => "Nasi Goreng",
            "harga" => 15000,
            "tipe" => "makanan"
        ],
        [
            "nama" => "Ayam Goreng",
            "harga" => 20000,
            "tipe" => "makanan"
        ],
        [
            "nama" => "Biawak Goreng",
            "harga" => 45000,
            "tipe" => "makanan"
        ],
        [
            "nama" => "Es Teh",
            "harga" => 5000,
            "tipe" => "minuman"
        ],
        [
            "nama" => "Es Jeruk",
            "harga" => 7000,
            "tipe" => "minuman"
        ]
        ];

    // Inisialisasi variabel pembelian dan diskon
    $totalPembelian = 0;
    $diskon = 0;

    // Mengecek apakah ada data yang dikirimkan
    if (isset($_POST['menu'])) {
        $pilihanMenu = $_POST['menu'];

        // Menghitung total pembelian
        foreach ($pilihanMenu as $key => $value) {
            $totalPembelian += $menu[$key]['harga'] * $value;
        }

        // Menghitung diskon
        if ($totalPembelian >= 50000) {
            $diskon = 0.1; // 10% diskon
        } elseif ($totalPembelian >= 30000) {
            $diskon = 0.05; // 5% diskon
        }
    }
    ?>

    <form method="POST">
        <table border="1">
            <tr>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Tipe Menu</th>
                <th>Jumlah</th>
            </tr>
            <?php
            foreach ($menu as $key => $item) {
                echo "<tr>";
                echo "<td>{$item['nama']}</td>";
                echo "<td>{$item['harga']}</td>";
                echo "<td>{$item['tipe']}</td>";
                echo "<td><input type='number' name='menu[$key]' value='0'></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <input type="submit" value="Hitung Total">
    </form>

    <h2>Total Pembelian: Rp <?php echo number_format($totalPembelian, 2); ?></h2>
    <h2>Diskon: <?php echo ($diskon * 100) . "%"; ?></h2>
    <h2>Total Setelah Diskon: Rp <?php echo number_format($totalPembelian - ($totalPembelian * $diskon), 2); ?></h2>
    </center>
</body>
</html>