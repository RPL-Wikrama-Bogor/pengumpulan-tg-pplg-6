    <?php
    require 'function.php';

    $data = daftarMenu();
    $hasil = 0;
    if(isset($_POST['submit'])){
        $hasil = proses($_POST);
    }
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Menu</title>
    </head>
    <body>
        <table>
            <tr>
                <?php foreach($data as $daftar): ?>
                    <ul>
                        <li>
                            <?= $daftar['nama']?>
                            <?= $daftar['harga']?>
                        </li>
                    </ul>
                <?php endforeach;?>
            </tr>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Pilih Makanan</td>
                        <td>:</td>
                        <td>
                            <select name="makanan" id="color">
                                <option value="">--- Pilih ---</option>
                                <?php foreach( $data as $key => $daftar):?>
                                    <?php if($daftar['jenis'] === "makanan"):?>
                                        <option value="<?= $key ?>"><?= $daftar['nama']?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Pembelian</td>
                        <td>:</td>
                        <td><input type="number" name="totalMakanan"></td>
                    </tr>
                    <tr>
                        <td>Pilih Minuman</td>
                        <td>:</td>
                        <td>
                            <select name="minuman" >
                                <option value="minuman">--- Pilih ---</option>
                                <?php foreach( $data as $key => $daftar):?>
                                    <?php if($daftar['jenis'] === "minuman"):?>
                                        <option value="<?= $key ?>"><?= $daftar['nama']?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                        <td>Jumlah Pembelian</td>
                        <td>:</td>
                        <td><input type="number" name="totalMinuman" placeholder="min 1"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" name="submit">Beli</button></td>
                    </tr>
                </table>
            </form>

            <?php if($hasil):?>
                <ul>
                    <li>Makanan : <?= $hasil['menu1'];?> (<?= $hasil['jmlhMakanan']?>)</li>
                    <li>Harga Makanan : <?= $hasil['totalMakanan']?> diskon sebesar: <?= $hasil['diskon1']?></li>
                    <li>Jumlah Harga Makanan : <?= $hasil['totalMakanan'] - $hasil['diskon1']?></li>

                    <li>Minuman : <?= $hasil['menu2'];?> (<?= $hasil['jmlhMinuman']?>)</li>
                    <li>Harga Minuman : <?= $hasil['totalMinuman']?> diskon sebesar: <?= $hasil['diskon2']?></li>
                    <li>Jumlah Harga Makanan : <?= $hasil['totalMinuman'] - $hasil['diskon2']?></li>
                </ul>
            <?php endif;?>
        </table>
    </body>
    </html>