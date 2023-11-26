<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
   <form action="#" method="post">
        <table>
            <tr>
                <td>Masukan Jumlah Liter</td>
                <td>:</td>
                <td><input type="number" name="jliter"></td>
            </tr>
            <tr>
                <td>Pilih Type Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="type" >
                        <option hidden value="">->pilih opsi<-</option>
                        <option value="Shell Super">Shell Super</option>
                        <option value="Shell V-power">Shell V-power</option>
                        <option value="Shell V-power diesel">Shell V-power diesel</option>
                        <option value="Shell V-power Nitro">Shell V-power Nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
   </form>
   <p>=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</p>
</body>
</html>

<?php
class Shell{
    public $Super = 15420,
           $Power = 16130,
           $PowerDiesel = 18310,
           $PowerNitro = 16510;
    public $ppn = 10/100;
}
class beli extends Shell{
    public function Hitung($liter, $harga){
        
    $total = $liter * $harga;
    $total_ppn = $total + ($total * $this->ppn);

    echo "Anda memilih Bahan Bakar Minyak tipe " . $_POST['type']. "<br>";
    echo "dengan jumlah: $liter liter.<br>";
    echo "Total yang harus Anda bayar Rp. " . number_format($total_ppn, 0, ',', '.');
    }
}

if (isset($_POST['submit'])) {
    $liter = $_POST['jliter'];
    $type = $_POST['type'];

    $beli = new beli();

    switch ($type) {
        case 'Shell Super':
            $harga = $beli->Super;
            break;
        case 'Shell V-power':
            $harga = $beli->Power;
            break;
        case 'Shell V-power diesel':
            $harga = $beli->PowerDiesel;
            break;
        case 'Shell V-power Nitro':
            $harga = $beli->PowerNitro;
            break;
        default:
            echo "Pilih jenis bahan bakar yang valid.";
            break;
    }
    echo $beli->hitung($liter,$harga);
}
?>
