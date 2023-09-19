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
        return "Anda Membeli Bahan Bakar Minyak Tipe: " . $this->tipe . "\n"
             . "Dengan Jumlah: " . $this->jumlah . "\n"
             . "Total Yang harus Anda Bayar Ialah: Rp. " . number_format($total, 2, ',', '.') . "\n";
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
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }

        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            white-space: pre-wrap;
        }
    </style>
<body>
    <h1>Form Input Transaksi</h1>
    <form method="post">
        <label for="tipe">Tipe Bahan Bakar:</label>
        <select name="tipe" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>

        <label for="jumlah">Masukan Jumlah Liter </label>
        <input type="number" name="jumlah" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    echo "<center>";
    if (isset($bukti)) {
        echo "<h2>Bukti Transaksi:</h2>";
        echo "<pre>$bukti</pre>";
        echo "</center>";
    }
    ?>
</body>
</html>
