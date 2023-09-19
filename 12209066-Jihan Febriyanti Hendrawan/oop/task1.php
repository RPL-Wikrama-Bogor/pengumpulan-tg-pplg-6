<?php
class Shell {
    const PPN = 0.10; 

    protected $harga;
    protected $jumlah;
    protected $tipe;

    public function __construct($harga, $jumlah, $tipe) {
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->tipe = $tipe;
    }

    public function hitungtotal() {
        $total = $this->harga * $this->jumlah;
        $ppn = $total * self::PPN;
        $total = $total + $ppn;
        return $total;
    }
}

class Beli extends Shell {
    public function __construct($harga, $jumlah, $tipe) {
        parent::__construct($harga, $jumlah, $tipe);
    }

    public function buktitransaksi() {
        $total = $this->hitungtotal();
        return "-----------------------------------------------". "<br>".
               "Anda Membeli Bahan Bakar Minyak Tipe: " . $this->tipe . "\n".
               "Dengan Jumlah: " . $this->jumlah . "\n" .
               "Total Yang harus Anda Bayar Ialah: Rp. " . number_format($total, 2, ',', '.') . "\n".
               "-----------------------------------------------" ;

    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipe = $_POST['tipe'];
    $jumlah = intval($_POST['jumlah']);

    $hargabahanbakar = [
        "Shell Super" => 15000,
        "Shell V-Power" => 16000,
        "Shell V-Power Diesel" => 18000,
        "Shell V-Power Nitro" => 20000
    ];

    if (array_key_exists($tipe, $hargabahanbakar)) {
        $harga = $hargabahanbakar[$tipe];
        $transaksi = new Beli($harga, $jumlah, $tipe);

        $bukti = $transaksi->buktiTransaksi();
    } else {
        $bukti = "Tipe bahan bakar tidak valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Transaksi</title>
</head>
<body>
    <h1>Form Input Transaksi</h1>
    <form method="post">

        <label for="jumlah">Masukan Jumlah Liter </label>
        <input type="number" name="jumlah" required><br>
       
        <label for="tipe">Tipe Bahan Bakar </label>
        <select name="tipe" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>

        <input type="submit" value="Submit">

    </form>

    <?php
    if (isset($bukti)) {
        echo "<h2>Bukti Transaksi:</h2>";
        echo "<pre>$bukti</pre>";
    }
    ?>
</body>
</html>