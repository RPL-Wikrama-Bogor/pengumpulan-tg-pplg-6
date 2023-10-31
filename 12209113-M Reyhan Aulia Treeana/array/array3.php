<?php
$menu = [
    [
        "makan" => "Bakso",
        "harga" => 15000,
    ],
    [
        "makan" => "Mie Ayam",
        "harga" => 15000,
    ],
    [
        "makan" => "Mie Ayam Bakso",
        "harga" => 20000,
    ],
    [
        "minum" => "Es Jeruk",
        "harga" => 5000,
    ],
    [
        "minum" => "Es Teh Manis",
        "harga" => 5000,
    ],
];

$makananMenu = array_filter($menu, function ($item) {
    return isset($item['makan']);
});

$minumanMenu = array_filter($menu, function ($item) {
    return isset($item['minum']);
});

?>

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
        body{
            font-family: 'Raleway', sans-serif;
        }
  table {
    max-width: 50%; /* Lebar maksimal tabel (ubah sesuai dengan keinginan Anda) */
    border-collapse: collapse; /* Menggabungkan garis border yang berdekatan */
    border: 1px solid #dddddd; /* Ketebalan dan warna garis pada tabel */
  }

  th, td {
    border: 1px solid #dddddd; /* Ketebalan dan warna garis pada sel header dan data */
    text-align: left; /* Aligment isi sel */
    padding: 8px; /* Ruang dalam sel */
  }

  tr:nth-child(even) {
    background-color: #f2f2f2; /* Memberikan warna latar belakang pada baris genap */
  }
</style>

</head>
<body>
    <div class="daftar" style="margin-bottom: 50px;">
        <center>
    <h2 style="margin: 70px 0px 50px 0px;">Harga Menu Bakso</h2>

    <table >
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

    <hr style="margin-bottom: 50px;">

    <center>
        <form action="" method="post">
        <table>
            <tr>
                <td>Makanan</td>
                <td>
                    <select name="makan" required>
                        <option hidden>--Pilih Makan--</option>
                        <?php
                        foreach ($makananMenu as $key => $makan) {
                        ?>
                            <option value="<?= $key ?>"><?= $makan['makan'] ?></option>
                        <?php
                        }
                        ?>
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
                        <?php
                        foreach ($minumanMenu as $key => $minum) {
                        ?>
                            <option value="<?= $key ?>"><?= $minum['minum'] ?></option>
                        <?php
                        }
                        ?>
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

    <hr style="margin-top: 50px;">

    <?php

    if(isset($_POST['submit'])){
        $jmlMkn = $_POST['jumlMkn'];
        $jmlMnm = $_POST['jumlMin'];
        $makanan = $_POST['makan'];
        $minuman = $_POST['minum'];


        $menuMkn = $menu[$makanan]['makan'];
        $menuMnm = $menu[$minuman]['minum'];
        $hargaMkn = $menu[$makanan]['harga']; 
        $hargaMnm = $menu[$minuman]['harga']; 

        $totalMkn = $hargaMkn * $jmlMkn;
        $totalMnm = $hargaMnm * $jmlMnm;

        if ($jmlMkn >= 3) {
            $diskonMkn = $hargaMkn * 0.05;
        }
        if ($jmlMkn >= 5) {
            $diskonMkn = $hargaMkn * 0.10;
        } else{
            $diskonMkn = 0;
        }

        if ($jmlMnm >= 3) {
            $diskonMnm = $hargaMnm * 0.05;
        }
        if ($jmlMnm >= 5) {
            $diskonMnm = $hargaMnm * 0.10;
        } else{
            $diskonMnm = 0;
        }
        
        $stlhDsknMkn = $totalMkn + $diskonMkn;
        $stlhDsknMnm = $totalMnm + $diskonMnm;


?>

<center>
    <h2>Bukti Pembelian</h2>
    <table border="1" style="margin-bottom: 50px;">
        <tr>
            <th>Menu Makanan</th>
            <th>Jumlah Makanan</th>
            <th>Total Harga Makanan</th>
            <th>Setelah Diskon</th>
        </tr>
        <tr>
            <td><?= $menuMkn; ?></td>
            <td><?= $jmlMkn; ?></td>
            <td>Rp. <?= $totalMkn; ?> (Diskon: Rp. <?= $diskonMkn ?>)</td>
            <td>Rp. <?= $totalMkn - $diskonMkn ?></td>
        </tr>
        <tr>
            <th>Menu Minuman</th>
            <th>Jumlah Minuman</th>
            <th>Total Harga Minuman</th>
            <th>Setelah Diskon</th>
            <th>Total Bayar</th>
        </tr>
        <tr>
            <td><?= $menuMnm; ?></td>
            <td><?= $jmlMnm; ?></td>
            <td>Rp. <?= $totalMnm; ?> (Diskon: Rp. <?= $diskonMnm ?>)</td>
            <td>Rp. <?= $totalMnm - $diskonMnm ?></td>
            <td>Rp. <?= $stlhDsknMkn + $stlhDsknMnm ?></td>
        </tr>
    </table>
</center>




<?php } ?>

</body>
</html>