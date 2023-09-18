<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasir</title>
</head>
<body>
<center>
    <div class="menu" style="border: 1px solid #000; width: 50%; height: auto; margin:5px; ">
       <h2 style="text-align: center;">Daftar Menu</h2>
        <ol style="text-align: left">
            <li>Menu : Mie Goreng <br> Harga : 15000</br></li>
            <li>Menu : Nasi Goreng <br> Harga : 10000</br></li>
            <li>Menu : Kwetiaw <br> Harga : 15000</br></li>
            <li>Menu : Es Jeruk <br> Harga : 5000</br></li>
            <li>Menu : Es Teh <br> Harga : 5000</br></li>
        </ol>
    </div>


    <?php
    $listmakan = [
        [
            "nama" => "Nasi goreng",
            "harga" => 15000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Mie goreng",
            "harga" => 10000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Kwetiaw",
            "harga" => 15000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Es jeruk",
            "harga" => 5000,
            "jenis" => "minuman"
        ],
        [
            "nama" => "Es teh",
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
        } elseif (($makanan_qty + $minuman_qty) <=3) {
            echo "Akan diskon jika pembelian nya lebih dari 3";
        }
    }
    ?>

    
        <form action="" method="post" style="border: 1px solid #000; width: 50%; height: auto; margin:5px;">
            <table>
                <tr>
                    <td>Makanan</td>
                    <td>
                        <select name="makanan">
                            <option hidden>-- Pilih Makanan --</option>
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
                    <td>Jumlah</td>
                    <td><input type="number" name="makanan_qty" ></td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td>
                        <select name="minuman">
                            <option hidden>-- Pilih Minuman --</option>
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
                    <td>Jumlah</td>
                    <td><input type="number" name="minuman_qty" ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="Pesan"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['simpan'])) {
        ?>
         
            <table style="border: 1px solid #000; width: 50%; height: auto; margin:10px; ">
 
                <tr>
                <h2>Nota Pembelian </h2>
                    <td>Makanan/Minuman</td>
                    <td>Jumlah</td>
                    <td>Harga</td>
                </tr>
                
                <tr>
                    <td><?= $listmakan[$makanan_index]['nama'] ?></td>
                    <td><?= $makanan_qty ?></td>
                    <td>Rp <?= number_format($listmakan[$makanan_index]['harga'] * $makanan_qty, 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td><?= $listmakan[$minuman_index]['nama'] ?></td>
                    <td><?= $minuman_qty ?></td>
                    <td>Rp <?= number_format($listmakan[$minuman_index]['harga'] * $minuman_qty, 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td colspan="2">Total Harga</td>
                    <td>Rp <?= number_format($total_harga, 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td colspan="2">Diskon</td>
                    <td>Rp <?= number_format($diskon, 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td colspan="2">Total Bayar</td>
                    <td>Rp <?= number_format($total_harga - $diskon, 2, ',', '.') ?></td>
                </tr>
            </table>
        <?php
        }
        ?>
    </center>

</body>
</html>