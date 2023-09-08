<?php

$nama_makanan = 0;
$harga_makanan = 0;
$total_harga_makanan = 0;
$nama_minuman = 0;
$harga_minuman = 0;
$total_harga_minuman = 0;
$total_harga = 0;
$jml_minuman = 0;
$total_diskon_makanan = 0;
$jml_minuman = 0;
$total_diskon_minuman = 0;

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

if (isset($_POST['submit'])) {
    // Makanan
    $makanan                = $_POST['makanan'];
    $jml_makanan            = (int)$_POST['jml_makanan'] ?? 0;
    $nama_makanan           = @$listMakanan[$makanan]["makanan"];
    $harga_makanan          = @$listMakanan[$makanan]["harga"] * $jml_makanan;

    // Minuman
    $minuman                = $_POST['minuman'];
    $jml_minuman            = (int)$_POST['jml_minuman'];
    $nama_minuman           = $listMinuman[$minuman]["minuman"];
    $harga_minuman          = $listMinuman[$minuman]["harga"] * $jml_minuman;

    // Diskon Makanan
    $diskon_makanan         = diskon($jml_makanan);
    $total_diskon_makanan   = $diskon_makanan * $harga_makanan;

    // Diskon Minuman
    $diskon_minuman         = diskon($jml_minuman);
    $total_diskon_minuman   = $diskon_minuman * $harga_minuman;

    // Total
    $total_harga_makanan    = $harga_makanan - $total_diskon_makanan;
    $total_harga_minuman    = $harga_minuman - $total_diskon_minuman;
    $total_harga            = $total_harga_makanan + $total_harga_minuman;
}

function diskon($jumlah)
{
    switch ($jumlah) {
        case $jumlah >= 5:
            return 0.1;
        case $jumlah >= 3:
            return 0.05;
        default:
            return 0;

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KASIR</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
        }

        .menu {
            width: 30rem;
            padding: 20px;
            border: 1px solid black;
            margin-bottom: 2rem;
        }

        .menu__header {
            text-align: center;
            margin-bottom: 25px;
        }

        .menu__list {
            margin-bottom: 25px;
            padding: 0 30px;
            font-weight: normal;
        }

        .form {
            width: 30rem;
            padding: 20px;
            border: 1px solid black;
            margin-bottom: 2rem;
        }

        .form__button {
            margin-top: 20px;
            padding: 3px 20px;
            display: inline-block;
        }

        .pembayaran {
            width: 30rem;
            padding: 20px;
            border: 1px solid black;
            margin-bottom: 2rem;
        }

        .pembayaran__header {
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="menu">
            <h2 class="menu__header">Daftar Menu</h2>
            <ol class="menu__list">
                <li>Menu : Nasi goreng <br>Harga : Rp. 15.000</li>
                <li>Menu : Mie goreng <br> Harga : Rp. 10.000</li>
                <li>Menu : Kwetiau <br> Harga : Rp. 15.000 </li>
                <li>Menu : Es Jeruk <br> Harga : Rp. 5.000</li>
                <li>Menu : Teh Manis <br> Harga : Rp. 5.000</li>
            </ol>
        </div>
        <form method="POST" class="form">
            <table>
                <tr>
                    <td>Pilih Makanan</td>
                    <td>:</td>
                    <td>
                        <select name="makanan" id="">
                            <option hidden>---Pilih---</option>
                            <?php
                            foreach ($listMakanan as $key => $pilihmakan) {
                            ?>
                                <option value="<?= $key ?>"><?= $pilihmakan['makanan'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Jumlah Pembelian Makanan</td>
                    <td>:</td>
                    <td><input type="number" name="jml_makanan"></td>
                </tr>

                <tr>
                    <td>Pilih Minuman</td>
                    <td>:</td>
                    <td>
                        <select name="minuman" id="">
                            <option hidden>---Pilih---</option>
                            <?php
                            foreach ($listMinuman as $key => $pilihminum) {
                            ?>
                                <option value="<?= $key ?>"><?= $pilihminum['minuman'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Jumlah Pembelian Minuman</td>
                    <td>:</td>
                    <td><input type="number" name="jml_minuman"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" class="form__button" value="Beli"></td>
                </tr>
            </table>
        </form>

        <div class="pembayaran">
            <h2 class="pembayaran__header">Bukti Pembelian</h2>
            <table>
                <tr>
                    <td>Makanan</td>
                    <td>:</td>
                    <td><?php echo "Rp. $nama_makanan ($jml_makanan)" ?></td>
                </tr>
                <tr>
                    <td>Harga Makanan</td>
                    <td>:</td>
                    <td><?php echo "Rp. $harga_makanan (disc : Rp. $total_diskon_makanan)" ?></td>
                </tr>
                <tr>
                    <td>Jumlah Harga Makanan</td>
                    <td>:</td>
                    <td><?php echo "Rp. $total_harga_makanan" ?></td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td>:</td>
                    <td><?php echo "Rp. $nama_minuman ($jml_minuman)" ?></td>
                </tr>
                <tr>
                    <td>Harga Minuman</td>
                    <td>:</td>
                    <td><?php echo "Rp. $harga_minuman (disc : Rp. $total_diskon_minuman)" ?></td>
                </tr>
                <tr>
                    <td>Jumlah Harga Minuman</td>
                    <td>:</td>
                    <td><?php echo "Rp. $total_harga_minuman" ?></td>
                </tr>
                <tr>
                    <td>Total Pembayaran</td>
                    <td>:</td>
                    <td><b><?php echo "Rp. $total_harga" ?></b></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>