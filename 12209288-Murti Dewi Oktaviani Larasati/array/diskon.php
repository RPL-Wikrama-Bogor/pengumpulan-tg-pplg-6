<!DOCTYPE html>
<html>
<head>
    <title>studikasus</title>
</head>
<style>
    body {
    background-color: #AEC3AE;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'sans-serif';
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

label {
    display: block;
    margin-bottom: 15px;
    border-radius: 30px;
    font-weight: bold;
}

table {
    width: 100%;
    margin: 0 auto;
    border-collapse: collapse;
    background-color: white; /* Ubah latar belakang tabel menjadi putih */
}

table, th, td {
    border: 3px solid black;
}

th, td {
    padding: 10px;
    text-align: left;
}


    

</style>
<body>

    <?php
    $listmakan = [
        [
            "nama" => "Nasi Goreng",
            "harga" => 20000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Mie Goreng",
            "harga" => 20000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Kwetiaw",
            "harga" => 15000,
            "jenis" => "makanan"
        ],
        [
            "nama" => "Es Jeruk",
            "harga" => 10000,
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
                <td>Jumlah</td>
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
            <h2>Nota Pembelian</h2>
            <table>
               
                <tr>
                    <td>Makanan</td>
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