<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
        }

        .card {
            text-align: center;
            width: 300px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-top: 10px;
        }

        h2 {
            text-align: center;
        }

        ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        li {
            margin-bottom: 10px;
        }

        .output {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: left;
            margin-bottom: 20px;
            background-color: #f0f0f0;
        }

        table {
            margin: 0 auto;
        }

        form {
            margin-top: 15px;
        }

        select,
        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            display: block;
            margin: 0 auto;
            background-color: #283618;
            color: #fff;
            border: none;
            padding: 10px 80px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            background-color: #31572c;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Daftar Menu</h2>
            <ul>
                <li>1. Menu : Indomie Goreng</li>
                <li>Harga : Rp. 10,000</li>
                <li>2. Menu : Kwetiau</li>
                <li>Harga : Rp. 12,000</li>
                <li>3. Menu : Ayam goreng</li>
                <li>Harga : Rp. 15,000</li>
                <li>4. Menu : Bebek goreng</li>
                <li>Harga : Rp. 20,000</li>
                <li>5. Menu : Es Kelapa</li>
                <li>Harga : Rp. 5,000</li>
                <li>6. Menu : Extrajoss Susu</li>
                <li>Harga : Rp. 10,000</li>
                <li>7. Menu : Cappunino Cincau</li>
                <li>Harga : Rp. 8,000</li>
            </ul>
        </div>

        <?php
        $data = [
            [
                "menu" => "Indomie Goreng",
                "kategori" => "makanan",
                "harga" => 10000
            ],
            [
                "menu" => "Kwetiau",
                "kategori" => "makanan",
                "harga" => 12000
            ],
            [
                "menu" => "Ayam Goreng",
                "kategori" => "makanan",
                "harga" => 15000
            ],
            [
                "menu" => "Bebek Goreng",
                "kategori" => "makanan",
                "harga" => 20000
            ],
            [
                "menu" => "Es Kelapa",
                "kategori" => "minuman",
                "harga" => 5000
            ],
            [
                "menu" => "Extrajoss Susu",
                "kategori" => "minuman",
                "harga" => 10000
            ],
            [
                "menu" => "Cappucino Cincau",
                "kategori" => "minuman",
                "harga" => 8000
            ]
        ];
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Pilih Menu Makanan :</td>
                    <td>
                        <select name="menu1">
                            <option hidden>Pilih makanan</option>
                            <?php foreach ($data as $key => $item) {
                                if ($item['kategori'] == "makanan") { ?>
                                    <option value="<?= $key ?>"><?= $item['menu'] ?></option>
                            <?php }
                            } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Makanan :</td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td>Pilih Menu Minuman :</td>
                    <td>
                        <select name="menu2">
                            <option hidden>Pilih minuman</option>
                            <?php foreach ($data as $key => $item) {
                                if ($item['kategori'] == "minuman") { ?>
                                    <option value="<?= $key ?>"><?= $item['menu'] ?></option>
                            <?php }
                            } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Minuman :</td>
                    <td><input type="text" name="jumlah2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Pesan"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $menu1 = $_POST['menu1'];
            $jumlah = (int)$_POST['jumlah'];
            $menu2 = $_POST['menu2'];
            $jumlah2 = (int)$_POST['jumlah2'];

            $namaMakanan = $data[$menu1]['menu'];
            $hargaMakanan = $data[$menu1]['harga'];
            $totalMakanan = $hargaMakanan * $jumlah;

            $namaMinuman = $data[$menu2]['menu'];
            $hargaMinuman = $data[$menu2]['harga'];
            $totalMinuman = $hargaMinuman * $jumlah2;

            $diskonMakanan = 0;
            if ($jumlah >= 3) {
                $diskonMakanan = 5;
            }
            if ($jumlah >= 5) {
                $diskonMakanan = 10;
            }

            $diskonMinuman = 0;
            if ($jumlah2 >= 3) {
                $diskonMinuman = 5;
            }
            if ($jumlah2 >= 5) {
                $diskonMinuman = 10;
            }
            $totalMakananSet = $totalMakanan - ($totalMakanan * $diskonMakanan / 100);
            $totalMinumanSet = $totalMinuman - ($totalMinuman * $diskonMinuman / 100);
            $totalSetelahDiskon = $totalMakananSet + $totalMinumanSet;
            echo "<div class='output'>";
            echo "<h2>Bukti Pembelian</h2>";
            echo "Makanan : $namaMakanan ($jumlah)";
            echo "<br>";
            echo "Harga Makanan : Rp " . number_format($hargaMakanan, 0, ',', '.');
            if ($diskonMakanan > 0) {
                echo " (disc : " . number_format(($hargaMakanan * $diskonMakanan) / 100, 0, ',', '.') . ")";
            }
            echo "<br>";
            echo "Jumlah Harga Makanan : Rp " . number_format($totalMakananSet, 0, ',', '.');
            echo "<br>";
            echo "<br>";
            echo "Minuman : $namaMinuman ($jumlah2)";
            echo "<br>";
            echo "Harga Minuman : Rp " . number_format($hargaMinuman, 0, ',', '.');
            if ($diskonMinuman > 0) {
                echo " (disc : " . number_format(($hargaMinuman * $diskonMinuman) / 100, 0, ',', '.') . ")";
            }
            echo "<br>";
            echo "Jumlah Harga Minuman : Rp " . number_format($totalMinumanSet, 0, ',', '.');
            echo "<br>";
            echo "<br>";
            echo "Total Pembayaran : <b>Rp " . number_format($totalSetelahDiskon, 0, ',', '.') . "</b>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>