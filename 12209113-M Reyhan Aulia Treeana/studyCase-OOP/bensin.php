<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Bensin</title>
    <link rel="shortcut icon" href="shell.png">
</head>
<body>
    <center>
    <img src="shell3.png" alt="Shell" style="width: 150px; margin-top: 140px;">
    <p>-------------------------------------</p>
    <?php

    class Shell
    {
        public $shellSuper = 15000,
                    $shellVPower = 16000,
                    $shellVPowerDiesel = 18000,
                    $shellVPowerNitro = 16500,
                    $ppn = 0.1;

    }

    class Beli extends Shell
    {
        public function harga($harga, $liter){
            $total = $harga * $liter + ($harga * $liter * $this->ppn);
            echo "Anda membeli bahan bakar tipe : " . $_POST['bakar'] . "<br>";
            echo "Dengan jumlah liter : " . $liter . " Liter <br>";
            echo "Total yang harus dibayar : Rp. " . $total . " (Termasuk PPN 10%)<br>";
        }        
    }

    if(isset($_POST['submit']))
    {
        $bensin = new Beli();

        $tipe = $_POST['bakar'];
        $liter = $_POST['liter'];
        
        if($tipe == "Shell Super"){
            $harga = $bensin->shellSuper;
        }else if($tipe == "Shell V-Power"){
            $harga = $bensin->shellVPower;
        }else if($tipe == "Shell V-Power Diesel"){
            $harga = $bensin->shellVPowerDiesel;
        }else if($tipe == "Shell V-Power Nitro"){
            $harga = $bensin->shellVPowerNitro;
        }

        $bensin->harga($harga, $liter);
    }

    ?>
    <p>-------------------------------------</p>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="liter">Jumlah Liter</label></td>
                <td><input type="number" name="liter" id="liter" required></td>
            </tr>
            <tr>
                <td><label for="">Pilih Tipe Bahan Bakar</label></td>
                <td><select name="bakar" required>
                    <option hidden>Pilih Jenis</option>
                    <option value="Shell Super">Shell Super</option>
                    <option value="Shell V-Power">Shell V-Power</option>
                    <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                    <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>  
                </select></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Beli</button></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>