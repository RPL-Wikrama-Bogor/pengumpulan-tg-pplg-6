<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link rel="shortcut icon" href="img/lsc2.webp">
</head>
<body>
    <center>

    <img src="img/lsc.webp" alt="" width="250px" style="margin-top: 20px;">

    <p>---------------------------------------------</p>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama Pelanggan</label></td>
                <td><Input type="text" name="nama" id="nama"></Input></td>
            </tr>
            <tr>
                <td><label for="lama">Lama Waktu (Per-Hari)</label></td>
                <td><Input type="number" name="lama" id="lama"></Input></td>
            </tr>
            <tr>
                <td><label for="">Pilih Tipe Motor</label></td>
                <td><select name="motor" required>
                    <option hidden>Pilih Jenis</option>
                    <option value="Scooter">Scooter</option>
                    <option value="Sport">Sport</option>
                    <option value="Trail">Trail</option>
                    <option value="Touring">Touring</option>  
                </select></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Pinjam</button></td>
            </tr>
        </table>
    </form>
    <p>---------------------------------------------</p>



<?php

class Rental
{
    public $scooter = 80000,
            $sport = 120000,
            $trail = 150000,
            $touring = 170000,
            $diskon,
            $nama,
            $hari,
            $pajak = 10000,
            $member = ["Wilson", "Byrice", "Bif", "Rusty", "Bo", "Sheldon", "Wade", "Norton"];

}

class Pinjam extends Rental
{
    public function total($harga, $lama)
    {
        if(in_array($_POST['nama'], $this->member)){
            $this->diskon = 0.05;
            echo $_POST['nama'] . " Berstatus sebagai member dan berhak mendapat Diskon 5%" . "<br>";
        } else{
            $this->diskon = 0;
            echo $_POST['nama'] . " Tidak berstatus sebagai member, Diskon 0% <br>";
        }

        $total = ($harga * $lama) - (($harga * $lama) * $this->diskon) + (($harga * $lama) * $this->diskon * $this->pajak);
        echo "Jenis Motor yang dirental: " . $_POST['motor'] . ", Selama " . $lama . " Hari <br>";
        echo "Harga rental per hari: " . $harga . "<br>";
        echo "<br>";
        echo "Total yang harus dibayar adalah Rp. " . $total . " (Sudah termasuk pajak & diskon)";
    }
}


if(isset($_POST['submit']))
    {
        $rental = new Pinjam();

        $tipe = $_POST['motor'];
        $hari = $_POST['lama'];
        
        if($tipe == "Scooter"){
            $harga = $rental->scooter;
            $gambar = "img/faggio.jpg";
        }else if($tipe == "Sport"){
            $harga = $rental->sport;
            $gambar = "img/pcj.webp";
        }else if($tipe == "Trail"){
            $harga = $rental->trail;
            $gambar = "img/sanchez.jpg";
        }else if($tipe == "Touring"){
            $harga = $rental->touring;
            $gambar = "img/wayfarer.jpg";
        }

        echo $rental->total($harga, $hari);
        echo "<br>";
    }

// if(in_array($nama, $member)){
//     $diskon = 0.05;
// }else{
//     $diskon = 0;
// }

?>

<img src="<?= $gambar ?>" alt="" width="250px" style="margin-top: 20px">

</center>
</body>
</html>