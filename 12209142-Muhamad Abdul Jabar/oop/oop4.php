<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Rental Motor</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Lama waktu Rental (per-Hari)</td>
                    <td>:</td>
                    <td><input name="hari" type="number"></td>
                </tr>
                <tr>
                    <td>Pilih jenis Kendaraan</td>
                    <td>:</td>
                    <td><select name="jenis" id="">
                        <option hidden>~~~pilih~~</option>
                        <option value="motor listrik">Motor listrik </option>
                        <option value="motor vario">Motor vario</option>
                        <option value="motor aerox">Motor Aerok</option>
                    </select></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php
class rental{
    public $pajak = 10000;
    public $member = ["ana","ani", "una"];
}

class beli extends rental{
    public $motorListrik = 150000;
    public $motorVario = 200000;
    public $motorAerox = 240000;

    public function beli($harga,$hari){
        $total = $harga * $hari + $this->pajak;
        $diskon = $harga * $hari * 0.05;

        $namaPembeli = $_POST['nama'];

        if(in_array($namaPembeli, $this->member)){
            echo $namaPembeli." berstatus sebagai Member mendapatkan diskon sebesar 5%";
        } else {
            echo $namaPembeli." berstatus sebagai Non Member mendapatkan diskon sebesar 0%";
            $diskon = 0;
        }

        echo "<br>Jenis motor yang dirental adalah ".$_POST['jenis']." selama $hari hari";
        echo "<br>Harga rental per-harinya : $harga";
        echo "<br>Besar yang harus dibayarkan adalah Rp. ".number_format($total - $diskon, 0, ',', '.');
    }
}




if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $hari = $_POST['hari'];

    $pelanggan = new beli;

    if($jenis == 'motor listrik'){
        $harga = $pelanggan->motorListrik;
    }elseif ($jenis == 'motor vario') {
        $harga = $pelanggan->motorVario;
    }elseif ($jenis == 'motor aerox') {
        $harga = $pelanggan->motorAerox;
    }else{
        $harga = 0;
    }

    echo $pelanggan->beli($harga,$hari);
}

