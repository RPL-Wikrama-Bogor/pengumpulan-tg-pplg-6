<?php
$listmenu = [
    [
        "menu"=>"Nasi Goreng",
        "kategori"=>"Makanan",
        "harga"=>"15000"
    ],
    [
        "menu"=>"Mie Goreng",
        "kategori"=>"Makanan",
        "harga"=>"10000"
    ],
    [
        "menu"=>"Kwetiau",
        "kategori"=>"Makanan",
        "harga"=>"15000"
    ],
    [
        "menu"=>"Es Jeruk",
        "kategori"=>"Minuman",
        "harga"=>"5000"
    ],
    [
        "menu"=>"Teh Manis",
        "kategori"=>"Minuman",
        "harga"=>"5000"
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
body{
    padding: 0;
    margin: 0;
}
.menu{
    padding: 10px;
    max-width: 600px;
    margin-top: 120px;
    margin-bottom: 30px;
    margin-left: 30px;
}

.itemm{
    width: 30%;
    height: 140%;
    border-style: solid;
    border-width: 3px;
    overflow: hidden;
    margin: 3px;
    box-sizing: border-box;
    flex-grow:1; 
    flex-shrink: 1;
    padding: 0 10px 10px;
}
</style>
</head>
<body>
<center>
    <div class="Menu">        
        <div class="itemm"> 
            <h1>Daftar Menu</h1>
            <table>
                <tr>
                    <td>
                       <ol>
                        <?php foreach($listmenu as $a):?>
                            <li>Menu : <?= $a ["menu"]; ?> <br> Harga : <?= $a ["harga"]; ?></li>
                        <?php endforeach ?>
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
                        <td>
                            <select name="makanan" id="">
                            <option hidden>--pilih menu--</option>
                                <?php foreach($listmenu as $key => $menu): ?>
                                    <?php if ($menu["kategori"] === "Makanan"): ?>
                                        <option value="<?= $key?>"><?=$menu["menu"]?></option>
                                    <?php endif; ?>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Input Jumlah Makanan</td>
                        <td><input type="number" name="jum-makanan" id=""></td>
                    </tr>
                    <tr>
                        <td>Pilih Minuman:</td>
                        <td>
                            <select name="minuman" id="">
                            <option hidden>--pilih menu--</option>
                                <?php foreach($listmenu as $key => $menu): ?>
                                    <?php if ($menu["kategori"] === "Minuman"): ?>
                                        <option value="<?= $key?>"><?=$menu["menu"]?></option>
                                    <?php endif; ?>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Input Jumlah Minuman</td>
                        <td><input type="number" name="jum-minuman" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
        </div>
        
        <br>  
        
        <div class="itemm"> 
            <table>
                <h1>Bukti Pembelian</h1>
                <tr>
                    <td>
                        <?php 
                            if (isset($_POST['submit'])) {
                                $id_minuman = $_POST['minuman'];
                                $id_makanan = $_POST['makanan'];
                                $jum_mkn = $_POST['jum-makanan'];
                                $jum_mnm = $_POST['jum-minuman'];
                            
                            
                                if ($jum_mkn >= 5) {
                                    $diskon = 0.1; // Diskon 10%
                                } elseif ($jum_mkn >= 3) {
                                    $diskon = 0.05; // Diskon 5%
                                } else {
                                    $diskon = 0; // Tidak ada diskon
                                }

                                if ($jum_mnm >= 5) {
                                    $diskon2 = 0.1; // Diskon 10%
                                } elseif ($jum_mnm >= 3) {
                                    $diskon2 = 0.05; // Diskon 5%
                                } else {
                                    $diskon2 = 0; // Tidak ada diskon
                                }
                            
                                $makanan = $listmenu[$id_makanan]["menu"];
                                $minuman = $listmenu[$id_minuman]["menu"];
                                $harga_makanan = $listmenu[$id_makanan]["harga"] * $jum_mkn;
                                $harga_minuman = $listmenu[$id_minuman]["harga"] * $jum_mnm;
                                $diskon_makanan = $diskon * $harga_makanan ;
                                $diskon_minuman = $diskon2 * $harga_minuman ;

                                
                                echo "Makanan: $makanan ($jum_mkn) <br>";
                                echo "Harga Makanan: Rp. ".number_format($harga_makanan, 0, ",", ".")." (disc: Rp. ".number_format($diskon_makanan, 0, ",", ".").") <br>";
                                echo "Jumlah Harga Makanan: Rp. ". number_format($harga_akhir_makanan = $harga_makanan-$diskon_makanan, 0, ",", ".");
                                echo "<br>Minuman:  $minuman ($jum_mnm)";
                                echo "<br>Harga Minuman: Rp. ".number_format($harga_minuman, 0, ",", ".")." (disc: Rp. ".number_format($diskon_minuman, 0, ",", ".").")";
                                echo "<br>Jumlah Harga Minuman: Rp. ". number_format($harga_akhir_minuman = $harga_minuman-$diskon_minuman, 0, ",", ".");
                                echo "<br>Total Pembayaran <b>Rp.". number_format($harga_akhir_minuman + $harga_akhir_makanan, 0, ",", ".") ."</b><br>";
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
</center>
</body>
</html>