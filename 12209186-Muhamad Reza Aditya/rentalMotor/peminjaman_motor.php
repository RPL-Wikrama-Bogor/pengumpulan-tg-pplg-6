<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman motor</title>
</head>
<body>
    <center>
        <h2>Rental Motor</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Waktu (perhari)</td>
                    <td>:</td>
                    <td><input type="number" name="time"></td>
                </tr>
                <tr>
                    <td>Jenis Motor</td>
                    <td>:</td>
                    <td>
                        <select name="pilihan" id="">
                            <option value="" hidden>--------------Pilih---------------</option>
                            <option value="mio">Mio</option>
                            <option value="beat">Beat</option>
                            <option value="ninja">Ninja</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
        
        <?php
            if(isset($_POST['submit'])){

                $hasil = new user();

                $nama = $_POST['name'];
                $jenis = $_POST['pilihan'];
                $hari = $_POST['time'];
            
                switch($jenis) {
                    case "mio" :
                        $harga = $hasil->mio;
                        break;
                    case "beat" : 
                        $harga = $hasil->beat;
                        break;
                    case "ninja" : 
                        $harga = $hasil->ninja;
                        break;
                    default :
                        $harga = 0;
                        break;
                }
                echo $hasil->userMember($harga, $jenis, $hari);
            }
        ?>
    </center>
</body>
</html>


<?php

class data {

    public $user = ['rizlan', 'jabar', 'hendra'];
    
    public      $mio = 200000,
                $beat = 120000,
                $ninja = 400000;

    protected   $pajak = 10000,
                $diskon = 5/100;

}


class user extends data{

    public function userMember($harga, $pilihan, $hari)
    {
        $result = $harga * $hari + $this->pajak;

        if(in_array($_POST['name'], $this->user)){
            $result = $result - ($result  * $this->diskon);
            echo $_POST['name'] . " berstatus sebagai Member mendapat diskon sebesar 5% <br>";
            echo "Jenis motor yang dirental adalah " . $pilihan . " selama $hari hari<br>";
            echo "harga rental per-harinya adalah : Rp. " . number_format($harga, 0, ',', '.') . "<br><br>";
            echo "besar yang harus di bayarkan adalah : Rp. " . number_format($result, 0, ',', '.');
            exit;
        }else{
            echo $_POST['name'] . " berstatus sebagai Non Member mendapat diskon sebesar 0% <br>";
            echo "Jenis motor yang dirental adalah " . $pilihan . " selama $hari hari<br>";
            echo "harga rental per-harinya adalah : Rp. " . number_format($harga, 0, ',', '.'). "<br><br>";
            echo "besar yang harus di bayarkan adalah : Rp. " . number_format($result, 0, ',', '.');
            exit;
        }
    }
}
?>