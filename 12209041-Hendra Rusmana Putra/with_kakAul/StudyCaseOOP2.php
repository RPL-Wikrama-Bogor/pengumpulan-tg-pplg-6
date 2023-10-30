<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Rental Motor</title>
</head>
<body>
<center>
    <h1>Rental Motor</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input name="nama" type="text   "></td>
            </tr>
            <tr>
                <td>Lama Waktu Rental (per hari)</td>
                <td>:</td>
                <td><input name="waktu" type="number"></td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="motor" id="type">
                        <option value="" disabled selected for="type">-------------PILIH-------------</option>
                        <option value="Scooter">Scooter</option>
                        <option value="Beat">Beat</option>
                        <option value="Vario">Vario</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    class rental{
        public $pjk = 10000;
        public $member = ["ana","antum","anta"];
    }

    class beli extends rental{
        public $beat = 150000;
        public $scooter = 200000;
        public $vario = 240000;

        public function beli($harga,$waktu){
            $total = $harga * $waktu + $this->pjk;
            $diskon = $harga * $waktu * 0.05;

            if(in_array($_POST['nama'], $this->member)){
                echo $_POST['nama']." berstatus sebagai Member mendapatkan diskon sebesar 5%";
            } else {
                echo $_POST['nama']." berstatus sebagai Non Member mendapatkan diskon sebesar 0%";
                $diskon = 0;
            }
            echo "<br>Jenis motor yang dirental ialah ". $_POST['motor']. " selama $waktu hari";
            echo "<br>Harga rental per-harinya : $harga";
            echo "<br>Besar yang harus dibayarkan adalah Rp. ".number_format($total-$diskon,0,',','.');
        }
    }
    



    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jenis = $_POST['motor'];
        $waktu = $_POST['waktu'];

        $pelanggan = new beli;

        if($jenis == 'Scooter'){
            $harga = $pelanggan->scooter;
        }elseif ($jenis == 'Beat') {
            $harga = $pelanggan->beat;
        }elseif ($jenis == 'Vario') {
            $harga = $pelanggan->vario;
        }else{
            $harga = 0;
        }

        echo $pelanggan->beli($harga,$waktu);
    }
    ?>
</center>
</body>
</html>