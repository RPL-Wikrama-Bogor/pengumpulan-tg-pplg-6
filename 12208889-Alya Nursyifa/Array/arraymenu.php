<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu, .membeli, .pembelian{
            outline: auto;
            width: 550px;
            margin: 8px auto;
            padding: 20px;
            border-radius: 15px
        }

    </style>
</head>
<body>
    <?php
        $listMakanan = [
        [
            "makanan" => "Nasi Goreng",
            "harga" => 15000
        ],
        [
            "makanan" => "Mie goreng",
            "harga" => 10000
        ],
        [
            "makanan" => "Kwetiau",
            "harga" => 15000
        ],
        ];

        $listMinuman = [
        [
            "minuman" => "Es Jeruk",
            "harga" => 5000
        ],
        [
            "minuman" => "Teh Manis",
            "harga" => 5000
        ]
        ];
        ?>

    <div class="menu">
    <center><h1>Daftar menu</h1></center>
    <ol>
        <?php
        foreach ($listMakanan as $makan) {
            echo "<li>Menu : " . $makan['makanan'] . "<br>Harga : Rp. " . $makan['harga'] . "</li>";
        }

        foreach ($listMinuman as $minum) {
            echo "<li>Menu : " . $minum['minuman'] . "<br>Harga : Rp. " . $minum['harga'] . "</li>";
        }
        ?>
    </ol>
    </div><br>

    <div class="membeli">
    <form action="" method="post">
        <table>
            <tr>
                <td>Pilih Makanan</td>
                <td>:</td>
                <td><select name="makanan" id="">
                <option hidden>---Pilih---</option>
                <?php
                foreach ($listMakanan as $key => $makan) {
                ?>
                    <option value="<?= $key ?>"><?= $makan['makanan'] ?></option>
                <?php
                }
                ?>
                </select></td>
            </tr>

            <tr>
                <td>Jumlah Pembelian Makanan</td>
                <td>:</td>
                <td><input type="number" name="jmlhmakan"></td>
            </tr>

            <tr>
                <td>Pilih Minuman</td>
                <td>:</td>
                <td><select name="minuman" id="">
                <option hidden>---Pilih---</option>
                <?php
                foreach ($listMinuman as $key => $minum) {
                ?>
                    <option value="<?= $key ?>"><?= $minum['minuman'] ?></option>
                <?php
                }
                ?>
                </select></td>
            </tr>

            <tr>
                <td>Jumlah Pembelian Minuman</td>
                <td>:</td>
                <td><input type="number" name="jmlhminum"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Beli"></td>
            </tr>
        </table>
        </div>

        <div class="pembelian">
        <?php
        if(isset($_POST['submit'])){
            $jmlhmakanan = isset($_POST['jmlhmakan']) ? $_POST['jmlhmakan'] : 0;
            $makan = isset($_POST['makanan']) ? $_POST['makanan'] : 0;
            $jmlhminuman = isset($_POST['jmlhminum']) ? $_POST['jmlhminum'] : 0;
            $minum = isset($_POST['minuman']) ? $_POST['minuman'] : 0;
        
            $hargaMakanan = $listMakanan[$makan]['harga'];
            $hargaMinuman = $listMinuman[$minum]['harga'];
        
            $totalHargaMakanan = $jmlhmakanan * $hargaMakanan;
            $totalHargaMinuman = $jmlhminuman * $hargaMinuman;
        
            $diskonMakanan = 0;
            $diskonMinuman = 0;
        
            if ($jmlhmakanan >= 3) {
                $diskonMakanan = $totalHargaMakanan * 0.05;
            }
            if ($jmlhmakanan >= 5) {
                $diskonMakanan = $totalHargaMakanan * 0.10;
            }
            if ($jmlhminuman >= 3) {
                $diskonMinuman = $totalHargaMinuman * 0.05;
            }
            if ($jmlhminuman >= 5) {
                $diskonMinuman = $totalHargaMinuman * 0.10;
            }
        
            $setDiskonMakan = $totalHargaMakanan - $diskonMakanan;
            $setDiskonMinum = $totalHargaMinuman - $diskonMinuman;
            $totalPembayaran = $setDiskonMakan + $setDiskonMinum;
        
            echo "<center><h1>Bukti Pembelian</h1></center>";
            echo "Makanan: {$listMakanan[$makan]['makanan']} ({$jmlhmakanan}) <br>";
            echo "Harga Makanan: Rp. " . number_format($totalHargaMakanan, 0, ',', '.') .
                 " (disc: Rp. " . number_format($diskonMakanan, 0, ',', '.') . ")<br>";
            echo "Jumlah Harga Makanan: Rp. " . number_format($setDiskonMakan, 0, ',', '.') . "<br><br>";

            echo "Minuman: {$listMinuman[$minum]['minuman']} ({$jmlhminuman})<br>";
            echo "Harga Minuman: Rp. " . number_format($totalHargaMinuman, 0, ',', '.') .
                 " (disc: Rp. " . number_format($diskonMinuman, 0, ',', '.') . ")<br>";
            echo "Jumlah Harga Minuman: Rp. " . number_format($setDiskonMinum, 0, ',', '.') . "<br>";
            echo "Total Pembayaran: <b> Rp. " . number_format($totalPembayaran, 0, ',', '.') . "</b>";
        }
        ?>
        </div>
    </form>
</body>
</html>