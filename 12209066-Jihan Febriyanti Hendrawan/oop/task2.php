<?php
class rental {
    public $harga;
    public $jenis;
    public $waktu;
    private $member = ['wanda', 'murti', 'nia', 'fania'];

    public function __construct($harga, $jenis, $waktu) {
        $this->harga = $harga;
        $this->jenis = $jenis;
        $this->waktu = $waktu;
    }

    public function pajak() {
        return 10000; 
    }

    public function hitung() {
        $pajak = $this->pajak();
        $total = $this->harga * $this->waktu + $pajak;

        if (in_array(strtolower($this->jenis), $this->member)) {
            $diskon = 0.05 * $total;
            $total -= $diskon;
        }

        return $total;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $waktu = $_POST["waktu"];
    $tipe = $_POST["tipe"];
    $harga_motor = 0;

    switch ($tipe) {
        case "Beat":
            $harga_motor = 40000;
            break;
        case "Retro":
            $harga_motor = 85000;
            break;
        case "Scooter":
            $harga_motor = 65000;
            break;
        case "Dual-Sport":
            $harga_motor = 95000;
            break;
        default:
        
            echo "Tipe motor tidak valid.";
            break;
    }

    
    $rental = new rental($harga_motor, $nama, $waktu);
    $total_biaya = $rental->hitung();

    echo "Total biaya rental untuk $nama dengan jenis motor : ($tipe) selama $waktu hari adalah: Rp. " . number_format($total_biaya, 2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Rental Motor</h1>
    <form method="post">
        <label for="nama">Nama Pelanggan </label>
        <input type="text" name="nama" required><br>
        <label for="waktu">Lama Waktu Rental</label>
        <input type="number" name="waktu" required><br>

        <label for="tipe">Tipe motor:</label>
        <select name="tipe" required>
            <option value="Beat">Beat</option>
            <option value="Retro">Retro</option>
            <option value="Scooter">Scooter</option>
            <option value="Dual-Sport">Dual-Sport</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>