<?php
    $daftarMenu = 
    [
        [
            "nama" => "Bakso",
            "jenis" => "makanan",
            "harga" => 10000
        ],
        [
            "nama" => "Mie Ayam",
            "jenis" => "makanan",
            "harga" => 14000
        ],
        [
            "nama" => "Soto Ayam",
            "jenis" => "makanan",
            "harga" => 16000
        ],
        [
            "nama" => "Es Teh",
            "jenis" => "minuman",
            "harga" => 5000
        ],
        [
            "nama" => "Es Jeruk",
            "jenis" => "minuman",
            "harga" => 7000
        ]

    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
</head>
<body>
    <center>
        <div class="container">
            <div class="container-item">
                <h1>Daftar Menu</h1>
                <br><br>
                <table>
                    <tr>
                        <td>
                            <ol>
                                <h3>Makanan</h3>
                                <li>Menu: Bakso <br> Harga: 10000</li>
                                <li>Menu: Mie Ayam <br> Harga: 14000</li>
                                <li>Menu: Soto Ayam <br> Harga: 16000</li>
                            </ol>
                            <ol>
                                <h3>Minuman</h3>
                                <li>Menu: Es Teh <br> Harga: 5000</li>
                                <li>Menu: Es Jeruk <br> Harga: 7000</li>
                            </ol>
                        </td>
                    </tr>
                </table>
            </div>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Pilih Menu Makanan:</td>
                        <td>
                            <select name="Food" id="">
                                <option hidden value="">Pilih Jenis Makanan</option>
                                <?php
                                foreach($daftarMenu as $key => $menu)
                                {
                                    if($menu['jenis']==='makanan')
                                    {
                                        ?>
                                        <option value="<?= $key ?>"><?=$menu['nama']?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Makanan yang Diinginkan:</td>
                        <td>
                            <input type="number" name="totalMakanan" id="">
                        </td>
                    </tr>
                        <td>Pilih Menu Minuman</td>
                        <td>
                            <select name="Drink" id="">
                                <option hidden value="">Pilih Jenis Minuman</option>
                                <?php
                                 foreach($daftarMenu as $key => $menu)
                                 {
                                     if($menu['jenis'] === 'minuman')
                                     {
                                         ?>
                                         <option value="<?= $key ?>"><?=$menu['nama']?></option>
                                         <?php
                                     }
                                 }
                                 ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Minuman yang Diinginkan:</td>
                        <td>
                            <input type="number" name="totalMinuman" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="submit" name="beli" value="beli">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        if (isset($_POST['beli']))
        {
            ?>
            <table>
                <tr>
                    <td>
                        <?php
                        $jenisMakanan = $_POST["Food"];
                        $jenisMinuman = $_POST["Drink"];
                        $totalMakanan = $_POST["totalMakanan"];
                        $totalMinuman = $_POST["totalMinuman"];
                        $totalHargaMakanan = 0;
                        $totalHargaMinuman= 0;

                        if(!empty($jenisMakanan) && $totalMakanan >= 0)
                        {
                            $totalHargaMakanan = $daftarMenu[$jenisMakanan]['harga'] * $totalMakanan;
                        }
                        if(!empty($jenisMinuman) && $totalMinuman >= 0)
                        {
                            $totalHargaMinuman = $daftarMenu[$jenisMinuman]['harga'] * $totalMinuman;
                        }
                        $totalItem = $totalMakanan + $totalMinuman;
                        $discount = 0;

                        if($totalMakanan >= 3 && $totalMakanan < 5)
                        {
                            $discountMakanan = 5;
                        } elseif($totalMakanan >= 5)
                        {
                            $discountMakanan = 10;
                        }
                        if($totalMinuman >= 3 && $totalMinuman < 5) 
                        {
                            $discountMinuman = 5;
                        } elseif ($totalMinuman >= 5)
                        {
                            $discountMinuman = 10;
                        }
                        
                        if ($totalHargaMakanan >= 0)
                        {
                            $pilihMakanan = $daftarMenu[$jenisMakanan]['nama'];
                            $pilihHargaMakanan = $daftarMenu[$jenisMakanan]['harga'] * $totalMakanan;
                            $jumlahDiskonMakanan = ($pilihHargaMakanan*$discountMakanan)/100;
                            $totalSetelahDiskonMan = $pilihHargaMakanan - $jumlahDiskonMakanan;
                            echo "<h3>Makanan: $pilihMakanan($totalMakanan)</h3>";
                            echo "<h3>Harga Makanan: Rp. " . number_format($pilihHargaMakanan, 0, ',', '.') . "(discount: Rp. " . number_format($jumlahDiskonMakanan, 0, ',', '.'). ")</h3>"; 
                            echo "<h3>Jumlah Harga: Rp. " .  number_format($totalSetelahDiskonMan, 0, ',', '.') . "</h3>";
                        }
                        
                        if ($totalHargaMinuman >= 0)
                        {
                            $pilihMinuman = $daftarMenu[$jenisMinuman]['nama'];
                            $pilihHargaMinuman = $daftarMenu[$jenisMinuman]['harga'];
                            $jumlahDiskonMinuman = ($pilihHargaMinuman * $discountMinuman) /100;
                            $totalSetelahDiskonMin = $pilihHargaMinuman - $jumlahDiskonMinuman;

                            echo "<h3>Minuman : $pilihMinuman($totalMinuman)</h3>";
                            echo "<h3>Harga Minuman: Rp." . number_format($pilihHargaMinuman, 0, ',', '.') . "(discount: Rp. " . number_format($jumlahDiskonMinuman, 0, ',', '.'). ")</h3>"; 
                            echo "<h3>Jumlah Harga: Rp. " .  number_format($totalSetelahDiskonMin, 0, ',', '.') . "</h3>";
                        }

                        $totalBayar = $totalSetelahDiskonMan + $totalSetelahDiskonMin;
                        echo "<h3>Total Yang Anda Harus Bayar: Rp. " . number_format($totalBayar, 0, ',', '.') . "</h3>";

        }  
                        ?>
                    </td>
                </tr>
            </table>
    </center>
</body>
</html>