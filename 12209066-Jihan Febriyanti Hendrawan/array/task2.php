<!DOCTYPE html>
<html>
<head>
    <title>studikasus</title>
    <style>
   

    .hasilpembelian {
        text-align: center;
        background-color: white;
        padding: 20px;
        border: 1px solid #ccc;
        margin: 20px auto;
        width: 80%;
    }

    .hasilpembelian h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .hasilpembelian ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        text-align: left;
        border: 1px solid #ccc; /* Tambahkan garis kotak di sini */
        padding: 10px; /* Tambahkan ruang di sekitar daftar */
    }

    .hasilpembelian li {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .hasilpembelian li strong {
        font-weight: bold;
    }
</style>
   

</head>
<body>
        <center>
      <div class="menu" style="border: 1px solid #000; width: 50%; height: auto;">
        <h2 style="text-align: center;">Daftar Menu</h2>
            <ol style="text-align: left">
                <li>Menu : Nasi Goreng <br> Harga : 15000</br></li>
                <li>Menu : Mie Goreng <br> Harga : 15000</br></li>
                <li>Menu : Kwetiaw <br> Harga : 15000</br</li>
                <li>Menu : Es Jeruk <br> Harga : 5000</br</li>
                <li>Menu : Es Teh <br> Harga : 5000</br</li>
            </ol>
        </div>
        </center>

    <?php
    $listmakan = [
        [
            "nama" => "Nasi Goreng",
            "harga" => 15000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Mie Goreng",
            "harga" => 15000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Kwetiaw",
            "harga" => 15000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Es Jeruk",
            "harga" => 5000,
            "jenis" => "minuman"
        ],
        [
            "nama" => "Es Teh",
            "harga" => 5000,
            "jenis" => "minuman"
        ]
    ];

    if (isset($_POST['simpan'])) {
        $makanan_index = $_POST['makanan'];
        $makanan_qty = $_POST['makanan_qty'];
        $minuman_index = $_POST['minuman'];
        $minuman_qty = $_POST['minuman_qty'];

        $total_harga = ($listmakan[$makanan_index]['harga'] * $makanan_qty) + ($listmakan[$minuman_index]['harga'] * $minuman_qty);

        $diskon = 0;
        if (($makanan_qty + $minuman_qty) >= 5) {
            $diskon = $total_harga * 0.10;
        } elseif (($makanan_qty + $minuman_qty) >= 3) {
            $diskon = $total_harga * 0.05;
        } elseif (($makanan_qty + $minuman_qty) <= 3) {

        }
    }
    ?>

    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Makanan</td>
                    <td>
                        <select name="makanan">
                            <option hidden>pilih makanan</option>
                            <?php
                            foreach ($listmakan as $key => $makan) {
                                if ($makan['jenis'] == 'makanan') {
                            ?>
                                    <option value="<?= $key ?>"><?= $makan['nama'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        </td>
                </tr>

                <tr>
                <td>Jumlah</td>
                    <td><input type="number" name="makanan_qty" min="1" value="1"></td>
                </tr>

                <tr>
                    <td>Minuman</td>
                    <td>
                        <select name="minuman">
                            <option hidden>pilih minuman</option>
                            <?php
                            foreach ($listmakan as $key => $minum) {
                                if ($minum['jenis'] == 'minuman') {
                            ?>
                                    <option value="<?= $key ?>"><?= $minum['nama'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                <tr>

                <tr>
                <td>Jumlah Minuman</td>
                    <td><input type="number" name="minuman_qty" min="1" value="1"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['simpan'])) {
        ?>

            <div class="hasilpembelian">
            <h2>Nota Pembelian</h2>
            <ul>
                <li><strong>Makanan:</strong> <?= $listmakan[$makanan_index]['nama'] ?></li>
                <li><strong>Jumlah:</strong> <?= $makanan_qty ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($listmakan[$makanan_index]['harga'] * $makanan_qty, 2, ',', '.') ?></li>
            </ul>
            <ul>
                <li><strong><?= $listmakan[$minuman_index]['nama'] ?></strong></li>
                <li><strong>Jumlah:</strong> <?= $minuman_qty ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($listmakan[$minuman_index]['harga'] * $minuman_qty, 2, ',', '.') ?></li>
            </ul>
            <ul>
                <li><strong>Total Harga:</strong> Rp <?= number_format($total_harga, 2, ',', '.') ?></li>
                <li><strong>Diskon:</strong> Rp <?= number_format($diskon, 2, ',', '.') ?></li>
                <li><strong>Total Bayar:</strong> Rp <?= number_format($total_harga - $diskon, 2, ',', '.') ?></li>
            </ul>
        </div>
  

        <?php
        }
        ?>
   
   </center>
</body>

</html>