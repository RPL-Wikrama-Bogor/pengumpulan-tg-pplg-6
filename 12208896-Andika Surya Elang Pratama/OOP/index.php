<?php
$proses = new buy();
$proses->setHarga(15420, 16130, 18310, 16510);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar Shell</title>
</head>
<style>
        body {
            background-color: #F1EFEF;
            font-family: Arial, sans-serif;
        }

        center {
            margin-top: 70px;
        }

        table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 2px #666;
        }

        table td {
            padding: 10px;
        }

        select, input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        select {
            background-color: #191717;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
</style>
<body>
    <center>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Masukkan Jumlah Liter:</td>
                    <td>
                        <input type="number" name="bensin" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe bensin: </td>
                    <td>
                        <select name="jenis" required>
                            <option value="Shell Super">Shell Super</option>
                            <option value="Shell V-Power">Shell V-Power</option>
                            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="buy" name="kirim"></td>
                </tr>
            </form>
        </table>
    </center>

    <?php

if (isset($_POST['kirim'])) {
    $proses->jumlah = $_POST['bensin'];
    $proses->jenis = $_POST['jenis'];

    $proses->harga();
    $proses->strukPembelian();
}
class cars
{
    protected $pajak;
    private $super,
    $vpower,
    $diesel,
        $nitro;
    public $jumlah;
    public $jenis;

    public function __construct()
    {
        $this->pajak = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4)
    {
        $this->super = $tipe1;
        $this->vpower = $tipe2;
        $this->diesel = $tipe3;
        $this->nitro = $tipe4;
    }

    public function getHarga()
    {
        $data["Shell Super"] = $this->super;
        $data["Shell V-Power"] = $this->vpower;
        $data["Shell V-Power Diesel"] = $this->diesel;
        $data["Shell V-Power Nitro"] = $this->nitro;
        return $data;
    }
}

class buy extends cars
{
    public function harga()
    {
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->pajak;
        $hargaBayar = $hargaBeli + $hargaPPN;
        return $hargaBayar;
    }

    public function strukPembelian()
    {
        echo "<center>";
        echo "----------------------------------------------" . "<br>";
        echo "Anda membeli bensin " . $this->jenis . "<br>";
        echo "Dengan jumlah liter: " . $this->jumlah . " buah <br>";
        echo "Total yang harus anda bayar Rp. " . number_format($this->harga(), 0, '', '.') . "<br>";
        echo "----------------------------------------------";
        echo "</center>";
    }
}
?>
</body>
</html>