    <?php
    $listmenu = [
        [
            "Nama" => "Nasi Goreng",
            "Kategori" => "Makanan",
            "Harga" => 15000
        ],
        [
            "Nama" => "Mie Goreng",
            "Kategori" => "Makanan",
            "Harga" => 10000
        ],
        [
            "Nama" => "Kwetiaw",
            "Kategori" => "Makanan",
            "Harga" => 15000
        ],
        [
            "Nama" => "Es Jeruk",
            "Kategori" => "Minuman",
            "Harga" => 5000
        ],
        [
            "Nama" => "Teh Manis",
            "Kategori" => "Minuman",
            "Harga" => 5000
        ]
    ];
    ?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jualan</title>
        <style>
            .menu {
                padding: 10px;
                max-width: 600px;
                margin-top: 120px;
                margin-bottom: 30px;
                margin-left: 30px;
            }

            .itemm {
                width: 30%;
                height: 140%;
                border-style: solid;
                border-width: 3px;
                overflow: hidden;
                margin: 3px;
                box-sizing: border-box;
                flex-grow: 1;
                flex-shrink: 1;
                padding-right: 5px;
            }

            .itemmm {
                width: 30%;
                height: 200%;
                border-style: solid;
                border-width: 3px;
                overflow: hidden;
                margin: 3px;
                box-sizing: border-box;
                flex-grow: 1;
                flex-shrink: 1;
                padding-right: 5px;
            }

            h1 {
                margin-bottom: -5%;
            }

            .submit {
                width: 220%;
            }
        </style>
    </head>

    <body>
        <center>


            <div class="Menu">
                <div class="itemm">
                    <h1>Daftar Menu</h1>
                    <br>
                    <table>
                        <tr>
                            <td>
                                <ol>
                                    <b>Makanan</b>
                                    <li>Menu : Nasi Goreng <br> Harga : 15000 </li>
                                    <li>Menu : Mie Goreng <br> Harga : 10000 </li>
                                    <li>Menu : Kwetiaw <br> Harga : 15000 </li>
                                </ol>
                                <ol>
                                    <b>Minuman</b>
                                    <li>Menu : Es Jeruk <br> Harga : 5000 </li>
                                    <li>Menu : Teh Manis <br> Harga : 5000 </li>
                                </ol>
                            </td>
                        </tr>
                    </table>
                </div>

                <br>

                <div class="itemm">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>Pilih Makanan:</td>
                                <td><select name="Namamak" id="">
                                        <option hidden value="">Pilih Jenis Makanan</option>
                                        <?php
                                        foreach ($listmenu as $key => $menu) {
                                            if ($menu['Kategori'] === 'Makanan') {
                                                ?>
                                                <option value="<?= $key ?>"><?= $menu['Nama'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Input Jumlah Makanan</td>
                                <td><input type="number" name="jummak" id=""></td>
                            </tr>
                            <tr>
                                <td>Pilih Minuman</td>
                                <td><select name="Namamin" id="">
                                        <option hidden value="">Pilih Jenis Minuman</option>
                                        <?php
                                        foreach ($listmenu as $key => $menu) {
                                            if ($menu['Kategori'] === 'Minuman') {
                                                ?>
                                                <option value="<?= $key ?>"><?= $menu['Nama'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Input Jumlah Minuman</td>
                                <td><input type="number" name="jummin" id=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="submit" type="submit" name="Beli" value="Beli">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <br>
                <?php
                if (isset($_POST['Beli'])) {
                    ?>
                <div class="itemmm">
                    <table>
                        <tr>
                            <td>
                                <?php
                              
                                    $jenismakan = $_POST['Namamak'];
                                    $jenisminum = $_POST['Namamin'];
                                    $jummak = $_POST['jummak'];
                                    $jummin = $_POST['jummin'];
                                
                                    $total_harga_makanan = 0;
                                    $total_harga_minuman = 0;
                                
                                    if (!empty($jenismakan) && $jummak >= 0) {
                                        $total_harga_makanan = $listmenu[$jenismakan]['Harga'] * $jummak;
                                    }
                                
                                    if (!empty($jenisminum) && $jummin >= 0) {
                                        $total_harga_minuman = $listmenu[$jenisminum]['Harga'] * $jummin;
                                    }
                                
                                    $diskon = 0;
                                    $total_item = $jummak + $jummin;
                                
                                    if ($jummak >= 3 && $jummak < 5) {
                                        $diskonmak = 5;
                                    } elseif ($jummak >= 5) {
                                        $diskonmak = 10;
                                    }
                                
                                    if ($jummin >= 3 && $jummin < 5) {
                                        $diskonmin = 5;
                                    } elseif ($jummin >= 5) {
                                        $diskonmin = 10;
                                    }
                                
                                    if ($total_harga_makanan >= 0) {
                                        $selected_makan = $listmenu[$jenismakan]['Nama'];
                                        $selected_harga_makanan = $listmenu[$jenismakan]['Harga'] * $jummak;
                                        $diskon_amount_makanan = ($selected_harga_makanan * $diskonmak) / 100;
                                        $total_harga_setelah_diskon_makanan = $selected_harga_makanan - $diskon_amount_makanan;
                                
                                        echo "<p>Makanan: $selected_makan ($jummak)</p>";
                                        echo "<p>Harga Makanan: Rp. " . number_format($selected_harga_makanan, 0, ',', '.') . " (disc: Rp. " . number_format($diskon_amount_makanan, 0, ',', '.') . ")</p>";
                                        echo "<p>Jumlah Harga Makanan: Rp. " . number_format($total_harga_setelah_diskon_makanan, 0, ',', '.') . "</p>";
                                    }
                                
                                    if ($total_harga_minuman >= 0) {
                                        $selected_minum = $listmenu[$jenisminum]['Nama'];
                                        $selected_harga_minuman = $listmenu[$jenisminum]['Harga'] * $jummin;
                                        $diskon_amount_minuman = ($selected_harga_minuman * $diskonmin) / 100;
                                        $total_harga_setelah_diskon_minuman = $selected_harga_minuman - $diskon_amount_minuman;
                                
                                        echo "<p>Minuman: $selected_minum ($jummin)</p>";
                                        echo "<p>Harga Minuman: Rp. " . number_format($selected_harga_minuman, 0, ',', '.') . " (disc: Rp. " . number_format($diskon_amount_minuman, 0, ',', '.') . ")</p>";
                                        echo "<p>Jumlah Harga Minuman: Rp. " . number_format($total_harga_setelah_diskon_minuman, 0, ',', '.') . "</p>";
                                    }
                                
                                    $total_pembayaran = $total_harga_setelah_diskon_makanan + $total_harga_setelah_diskon_minuman;
                                    echo "<p>Total Pembayaran: <b> Rp. " . number_format($total_pembayaran, 0, ',', '.') . " </b> </p>";
                                
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php
                }

                ?>  
        </center>
    </body>

    </html>