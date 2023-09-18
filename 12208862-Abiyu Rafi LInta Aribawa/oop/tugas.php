<?php

class Shell
{
    public $jenis;
    public $harga;
    public $ppn;

    public function __construct($jenis, $harga, $ppn)
    {
        $this->jenis = $jenis;
        $this->harga = $harga;
        $this->ppn = $ppn;  
    }
}

class Beli extends Shell
{
    public $jumlah;

    public function __construct($jenis, $harga, $ppn, $jumlah)
    {
        parent::__construct($jenis, $harga, $ppn);
        $this->jumlah = $jumlah;
    }

    public function hitungTotalHarga()
    {
        $subtotal = $this->harga * $this->jumlah;
        $total = $subtotal + ($subtotal * $this->ppn);
        return $total;
    }
}

$shellSuper = new Shell("Shell Super", 15420, 0.10);
$shellVPower = new Shell("Shell V-Power", 16130, 0.10);
$shellVPowerDiesel = new Shell("Shell V-Power Diesel", 18310, 0.10);
$shellVPowerNitro = new Shell("Shell V-Power Nitro", 16510, 0.10);

$transaksi = array(
    new Beli($shellSuper->jenis, $shellSuper->harga, $shellSuper->ppn, 0),
    new Beli($shellVPower->jenis, $shellVPower->harga, $shellVPower->ppn, 0),
    new Beli($shellVPowerDiesel->jenis, $shellVPowerDiesel->harga, $shellVPowerDiesel->ppn, 0),
    new Beli($shellVPowerNitro->jenis, $shellVPowerNitro->harga, $shellVPowerNitro->ppn, 0),
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["pilih"];
    $quantity = $_POST["quantity"];

    foreach ($transaksi as $item) {
        if ($item->jenis === $type) {
            $item->jumlah = $quantity;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pengisian Bahan Bakar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Pilih Bahan Bakar</td>
                <td><select id="pilih" name="pilih">
                        <?php
                        foreach ($transaksi as $item) {
                            echo "<option value='{$item->jenis}'>{$item->jenis}</option>";
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>Jumlah Liter</td>
                <td><input type="number" id="quantity" name="quantity" value="0" min="0"></td>
            </tr>
            <td> <input type="submit" value="Submit"></td>
        </table>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $type = $_POST["pilih"];
        foreach ($transaksi as $item) {
            if ($item->jenis === $type) {
                echo "Anda membeli bahan bakar dengan tipe {$item->jenis}<br>";
                echo "Harga: Rp. " . number_format($item->harga, 0, ',', '.') . "<br>";
                echo "Jumlah Liter: {$item->jumlah}<br>";
                $totalHarga = $item->hitungTotalHarga();
                echo "Total Harga: Rp. " . number_format($totalHarga, 0, ',', '.') . "<br>";
            }
        }
    }
    ?>
</body>

</html>