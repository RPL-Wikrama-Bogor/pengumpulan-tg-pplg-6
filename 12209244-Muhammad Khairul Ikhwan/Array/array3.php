<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        h1 {
            text-align: center;
        }

        /* Container styles */
        .menu {
            max-width: 600px;
            margin: 0 auto;
            padding: 10px;
        }

        /* Menu item styles */
        .itemm {
            width: 70%;
            border: 3px solid #000;
            margin: 3px;
            padding: 10px;
            box-sizing: border-box;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
        }

        /* Form styles */
        form {
            text-align: left;
        }

        select, input[type="number"] {
            width: 100%;
            margin: 5px 0;
            padding: 5px;
        }

        .submit {
            width: 100%;
            margin-top: 10px;
            padding: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* List styles */
        ol {
            list-style-type: none;
            padding-left: 0;
        }

        /* Result styles */
        .result {
            background-color: #f5f5f5;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="menu">
        <div class="itemm">
            <h1>Daftar Menu</h1>
            <table>
                <tr>
                    <td>
                        <ol>
                            <li><h3>Makanan :</h3></li>
                            <li>Bakso = Rp.10.000</li>
                            <li>Mie Goreng = Rp.15.000</li>
                            <li>Bakso Mie Ayam = Rp.20.000</li>
                        </ol>
                        <ol>
                            <li><h3>Minuman :</h3></li>
                            <li>Lemon Tea = Rp.10.000</li>
                            <li>Green Tea = Rp.8.000</li>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <?php
                    $daftarMenu = [
                        [
                            "nama" => "Bakso",
                            "jenis" => "Makanan",
                            "harga" => "10000"
                        ],
                        [
                            "nama" => "Mie Goreng",
                            "jenis" => "Makanan",
                            "harga" => "15000"
                        ],
                        [
                            "nama" => "Bakso Mie Ayam",
                            "jenis" => "Makanan",
                            "harga" => "20000"
                        ],
                        [
                            "nama" => "Lemon Tea",
                            "jenis" => "Minuman",
                            "harga" => "10.000"
                        ],
                        [
                            "nama" => "Green Tea",
                            "jenis" => "Minuman",
                            "harga" => "8000"
                        ]
                    ];
                ?>

    <div class="menu">
        <div class="itemm">
            <table>
                <form action="" method="POST">
                    <tr>
                        <td>
                            <h3>Pilih Menu</h3>
                            <label for="mkn">Pilih Jenis Makanan</label>
                            <select name="mkn" id="mkn">
                                <option hidden>Pilih Makanan</option>
                                <?php
                                foreach ($daftarMenu as $key => $menu) {
                                    if ($menu['jenis'] == "Makanan") {
                                        ?>
                                        <option value="<?= $key ?>"><?= $menu['nama'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select><br>
                            Jumlah makanan<input type="number" name="jumlah1"><br><br>
                            <label for="mnm">Pilih Minuman</label>
                            <select name="mnm" id="mnm">
                                <option hidden>Pilih Minuman</option><br>
                                <?php
                                foreach ($daftarMenu as $key => $menu) {
                                    if ($menu['jenis'] == "Minuman") {
                                        ?>
                                        <option value="<?= $key ?>"><?= $menu['nama'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select><br>
                            Jumlah<input type="number" name="jumlah2"><br>
                            <input class="submit" type="submit" name="Pesan" value="Pesan">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
    <?php
                if (isset($_POST['Pesan'])) {
                    $mkn = $_POST['mkn'];
                    $jmlh = $_POST['jumlah1'];
                    $mnm = $_POST['mnm'];
                    $jmlh2 = $_POST['jumlah2'];

                    $tomak = $daftarMenu[$mkn]['harga'] * $jmlh;
                    $tomin = $daftarMenu[$mnm]['harga'] * $jmlh2;

                    if ($jmlh >= 3) {
                        $dis =floor($tomak * 3 / 100);
                        $disc = $tomak - $dis;
                    }elseif ($jmlh >= 5) {
                        $dis =floor($tomak * 5 / 100);
                    }else{
                        $dis = 0;
                        $disc = $tomak;
                    }

                    if ($jmlh2 >= 3) {
                        $dis2 =floor($tomin * 3 / 100);
                        $disc2= $tomin - $dis;
                    }elseif ($jmlh2 >= 5) {
                        $dis2 =floor($tomin * 5 / 100);
                        $disc2= $tomin - $dis;
                    }else{
                        $dis2 = 0;
                        $disc2= $tomin;
                    }
                    ?>
                    
    <div class="result">
        <h1>Bukti Pembelian</h1>
        <table>
            <tr>
                <td>
                    <ol>
                        <li>Makanan: <?= $daftarMenu[$mkn]['nama'] ?>  (<?= $jmlh ?>)</li>
                        <li>Harga Makanan: Rp. <?= $tomak ?> (disc: Rp.<?= $dis ?>)</li>
                        <li>Jumlah Harga Makanan: Rp.<?= $disc ?></li>
                    </ol>
                    <ol>
                        <li>Minuman: <?= $daftarMenu[$mnm]['nama'] ?>  (<?= $jmlh2 ?>)</li>
                        <li>Harga Minuman: Rp. <?= $tomin ?> (disc: Rp.<?= $dis2 ?>)</li>
                        <li>Jumlah Harga Minuman: Rp.<?= $disc2 ?></li>
                    </ol>
                    <b>Total Pembelian: Rp. <?= $disc + $disc2 ?></b>
                </td>
            </tr>
        </table>
    </div>
    <?php
    }
    ?>
</body>
</html>
