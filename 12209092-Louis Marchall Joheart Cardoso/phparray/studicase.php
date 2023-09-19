<?php
class Shell {
    public $bensin;
    public $harga;
    public $ppn;

    public function __construct($bensin, $harga, $ppn) {
        $this->bensin = $bensin;
        $this->harga = $harga;
        $this->ppn = $ppn;
    }
}

class hitung extends Shell {
    public $jumlah;

    public function __construct($bensin, $harga, $ppn, $jumlah) {
        parent::__construct($bensin, $harga, $ppn);
        $this->jumlah = $jumlah;
    }

    public function hitungharga() {
        $subtotal = $this->jumlah * $this->harga;
        $total = $subtotal + ($subtotal * $this->ppn);
        return $total;
    }
}

$Shellsuper = new Shell("Shell Super", 15420, 0.10);
$Shellvpower = new Shell("Shell V-Power", 16130, 0.10);
$Shellvdiesel = new Shell("Shell V-Power Diesel", 18310, 0.10);
$Shellvnitro = new Shell("Shell V-Power Nitro", 16510, 0.10);

$hitungan = [
    new hitung($Shellsuper->bensin, $Shellsuper->harga, $Shellsuper->ppn, 0),
    new hitung($Shellvpower->bensin, $Shellvpower->harga, $Shellvpower->ppn, 0),
    new hitung($Shellvdiesel->bensin, $Shellvdiesel->harga, $Shellvdiesel->ppn, 0),
    new hitung($Shellvnitro->bensin, $Shellvnitro->harga, $Shellvnitro->ppn, 0),
];


if (isset($_POST['jumlah']) && isset($_POST['tipe_bahan_bakar'])) {
    $jumlah = $_POST['jumlah'];
    $tipe_bahan_bakar = $_POST['tipe_bahan_bakar'];

    // Find the selected bahan bakar
    $selected_bahan_bakar = null;
    foreach ($hitungan as $bahan_bakar) {
        if ($bahan_bakar->bensin === $tipe_bahan_bakar) {
            $selected_bahan_bakar = $bahan_bakar;
            break;
        }
    }

    if ($selected_bahan_bakar) {
        $selected_bahan_bakar->jumlah = $jumlah;
        $total = $selected_bahan_bakar->hitungharga();
        $output_message = "Anda Membeli bahan bakar minyak tipe $tipe_bahan_bakar <br> Dengan Jumlah Sebanyak: $jumlah liter. <br> Total yang harus dibayar Rp. " . number_format($total, 0, ',', '.');
    } else {
        $output_message = "Tipe bahan bakar tidak valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Cabin', sans-serif;
    }


</style>
<body>
    <center>
        <h1>Bahan Bakar</h1>
        <h5>Input Jumlah Liter dan Tipe Bahan Bakar</h5>

        <form method="post">
            <table>
                <tr>
                    <td><label for="jumlah">Masukkan Jumlah Liter</label></td>
                    <td><input type="number" name="jumlah" id="jumlah"></td>
                </tr>
                <tr>
                    <td><label for="tipe_bahan_bakar">Pilih Tipe Bahan Bakar</label></td>
                    <td>
                        <select name="tipe_bahan_bakar" id="tipe_bahan_bakar">
                            <option value="Shell Super">Shell Super</option>
                            <option value="Shell V-Power">Shell V-Power</option>
                            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Hitung Total"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($output_message)) {
            echo "<p>$output_message</p>";
        }
        ?>
    </center>
</body>
</html>
