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
    <title>Bahan Bakar</title>
</head>
<body>
<center>
    <h1>Bahan Bakar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Masukkan jumlah Liter</td>
                <td>:</td>
                <td><input name="liter" type="number"></td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="bahanbakar" id="type">
                        <option value="" disabled selected>-------------PILIH-------------</option>
                        <option value="Shell Super">Shell Super</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
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
class shell {
    public $V_Power_Nitro = 16510;
    public $Diesel = 18310;
    public $V_Power = 16130;
    public $super = 15420;
    public $ppn = 0.1;
}

class beli extends shell{
    public function hitung($harga, $jumlah){
        $total = $harga * $jumlah + ($harga * $jumlah * $this->ppn );
        echo "Anda membeli bahan bakar minyak tipe ". $_POST['bahanbakar'];
        echo "<br>Dengan jumlah ". $_POST['liter']." Liter";
        echo "<br>Total yang harus anda bayar Rp. ". number_format($total,0,',','.');
    }
}

if (isset($_POST['submit']) && isset($_POST['bahanbakar']) ) {
    $jumlah = $_POST['liter'];
    $tipe = $_POST['bahanbakar'];

    $shell = new beli;

    if ($tipe == 'Shell Super') {
        $harga = $shell->super;
    }
    elseif ($tipe == 'Shell V-Power') {
        $harga = $shell->V_Power;
    }
    elseif ($tipe == 'Shell V-Power Diesel') {
        $harga = $shell->Diesel;
    }
    elseif ($tipe == 'Shell V-Power Nitro') {
        $harga = $shell->V_Power_Nitro;
    }else{
        $harga = 0;
    }

    echo $shell->hitung($harga,$jumlah);
}
?>
</center>
</body>

</body>
</html>





