<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
<div class="form-beli">
    <h2>Pembelian Bahan Bakar</h2>
    <form action="" method="POST">
        <label for="liter">Jumlah Liter: </label><br>
        <input type="number" id="liter" name="liter">
        <br>
        <br>
        <label for="dropdown">Pilih Tipe Bahan Bakar:</label><br>
        <select id="dropdown" name="dropdown">
            <?php 
                $s = new Shell(); 
                echo $s->option(); 
            ?>
        </select><br><br>
        <input type="submit" value="Bayar" name="bayar">
    </form>
</div>

<?php
if (isset($_POST['bayar'])) {
    $banyak = $_POST['liter'];
    $pilihan = $_POST['dropdown'];
    $bayar = new Beli($banyak, $pilihan);
    $total = $bayar->totalBensin();
    $bayar->printNota();
}
?>

<?php
class Shell{
    public $Shell = [
        [
            'nama' => 'Shell Super',
            'harga' => 15.420
        ],
        [
            'nama' => 'Shell V-Power',
            'harga' => 16.130
        ],
        [
            'nama' => 'Shell V-Power Diesel',
            'harga' => 18.310
        ],
        [
            'nama' => 'Shell V-Power Nitro',
            'harga' => 16.510
        ]
    ];

    public function option(){
        $options = '';
            foreach ($this->Shell as $station) {
                $options .= '<option value="' . $station['nama'] . '">' . $station['nama'] . '</option>';
            }
        return $options;
    }
}

class Beli extends Shell {
    public $liter;
    public $tipe;
    public $total;

    public function __construct($liter, $tipe) {
        $this->tipe = $tipe;
        $this->liter = $liter;
    }

    public function totalBensin() {
        foreach ($this->Shell as $station) {
            if ($station['nama'] === $this->tipe) {
                $this->total = $station['harga'] * $this->liter;
                return $this->total;
            }
        }
    }

    public function printNota() {
        echo "<br>";
        echo "Anda membeli bahan bakar dengan tipe: " . $this->tipe;
        echo "<br>";
        echo "Dengan Jumlah: " . $this->liter . " Liter";
        echo "<br>";
        echo "Total yang harus dibayar: " . "Rp. " . $this->total * 1.1;
        echo "<br>";
    }
}
?>
</body>
</html>