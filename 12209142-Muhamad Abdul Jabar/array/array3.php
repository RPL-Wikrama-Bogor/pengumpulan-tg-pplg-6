<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <style>
       .menu{
        padding: 10px;
        max-width: 600px;
        margin-top: -15px;
        margin-bottom: 10px;
        margin-left: 30px;
    }

    .itemm{
        width: 70%;
        height: 400%;
        border-style: solid;
        border-width: 3px;
        overflow: hidden;
        margin: 3px;
        box-sizing: border-box;
        flex-grow:1; 
        flex-shrink: 1;
        padding-right: 5px;
    }

    .submit {
        width: 400%;
        margin: 10px 0px;
    }
    </style>
</head>
<body>
    <center>
        <div class="menu">
            <div class="itemm">
                <table>
                <h1>Daftar Menu</h1>
                    <tr>
                        <td>
                            <ol>
                                <h3>Makanan :</h3>
                                <li>Baso = Rp.10.000</li>
                                <li>Mie Ayam = Rp.12.000</li>
                                <li>Soto = Rp.15.000</li>
                            </ol>
                            <ol>
                                <h3>Minuman :</h3>
                                <li>Es Teh = Rp.5000</li>
                                <li>Es Jeruk = Rp.7000</li>
                            </ol>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

                <?php
                    $daftarMenu = [
                        [
                            "nama" => "Baso",
                            "jenis" => "Makanan",
                            "harga" => "10000"
                        ],
                        [
                            "nama" => "Mie Ayam",
                            "jenis" => "Makanan",
                            "harga" => "12000"
                        ],
                        [
                            "nama" => "Soto",
                            "jenis" => "Makanan",
                            "harga" => "15000"
                        ],
                        [
                            "nama" => "Es Teh",
                            "jenis" => "Minuman",
                            "harga" => "5000"
                        ],
                        [
                            "nama" => "Es Jeruk",
                            "jenis" => "Minuman",
                            "harga" => "7000"
                        ]
                    ];
                ?>
        <div class="menu">
            <div class="itemm">
                <table>
                <form action="" method="POST">  
                    <label for="menu">Pilih Menu:</label>
                    <tr>
                        <td>Makanan </td>
                        <td><select name="mkn" id="mkn">
                            <option hidden>--Pilih Makanan--</option>
                            <?php
                            foreach ($daftarMenu as $key => $menu) {
                                if ($menu['jenis'] == "Makanan") {
                                    ?>
                                    <option value="<?= $key ?>"><?php echo $menu['nama'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        </td>
                    </tr>
                <tr>    
                    <td> Jumlah</td>
                    <td><input type="number" name="jumlah1"></td>
                </tr> 
                <tr>  
                    <td>Minuman</td>
                    <td><select name="mnm" id="mnm">
                        <option hidden>--Pilih Minuman--</option><br>
                        <?php
                        foreach ($daftarMenu as $key => $menu) {
                            if ($menu['jenis'] == "Minuman") {
                                ?>
                                <option value="<?= $key ?>"><?= $menu['nama']?></option>
                                <?php
                            }
                        }
                        ?>
                    </select></td>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="number" name="jumlah2"></td>
                </tr>
                <tr>
                    <td><input class="submit" type="submit" name="Pesan" value="Pesan"></td>
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

                    if ($jmlh >= 3 && $jmlh<= 4) {
                        $dis =floor($tomak * 5 / 100);
                        $disc = $tomak - $dis;
                    }elseif ($jmlh >= 5) {
                        $dis =floor($tomak * 10 / 100);
                        $disc = $tomak - $dis;
                    }else{
                        $dis = 0;
                        $disc = $tomak;
                    }

                    if ($jmlh2 >= 3 && $jmlh2 <=4) {
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
         <div class="menu">
            <div class="itemm">
                <table>
                        <h1>Bukti Pembelian</h1>
                        <tr>
                            <td>
                                <ul>
                                <li>Makanan: <?= $daftarMenu[$mkn]['nama'] ?>  (<?= $jmlh ?>)</li>
                                <li>Harga Makanan: Rp. <?= $tomak ?> (disc: Rp.<?= $dis?>)</li>
                                <li>Jumlah Harga Makanan: Rp.<?=$disc?></li>
                                </ul>
                                <ul>
                                <li>Minuman: <?= $daftarMenu[$mnm]['nama'] ?>  (<?= $jmlh2 ?>)</li>
                                <li>Harga Minuman: Rp. <?= $tomin ?> (disc: Rp.<?= $dis2?>)</li>
                                <li>Jumlah Harga Minuman: Rp.<?=$disc2?></li>
                                </ul>
                                <b>Total Pembelian: Rp. <?= $disc + $disc2 ?></b>
                            
                            </td>
                        </tr>
                </table>
            </div>
        </div>
                    <?php
                }
                ?>
        
    </center>
</body>
</html>
