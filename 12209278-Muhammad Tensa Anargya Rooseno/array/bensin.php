<?php

class Shell {
    protected $harga;
    protected $jenis;
    protected $ppn = 10;

    public function __construct($harga, $jenis) {
        $this->harga = $harga;
        $this->jenis = $jenis;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function hitungPPN() {
        return ($this->harga * $this->ppn) / 100;
    }
}

class Beli extends Shell {
    private $jumlah;

    public function __construct($harga, $jenis, $jumlah) {
        parent::__construct($harga, $jenis);
        $this->jumlah = $jumlah;
    }

    public function hitungTotal() {
        $totalHarga = $this->harga * $this->jumlah;
        $totalPPN = $this->hitungPPN();
        $totalBelanja = $totalHarga + $totalPPN;
        return [
            'harga' => $this->harga,
            'jenis' => $this->jenis,
            'jumlah' => $this->jumlah,
            'ppn' => $this->hitungPPN(),
            'total' => $totalBelanja
        ];
    }
}

$hargaSuper = 15420;
$hargaVPower = 16130;
$hargaVPowerDiesel = 18310;
$hargaVPowerNitro = 16510;

if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];

    $transaction = null;
    switch ($jenis) {
        case 'Super':
            $transaction = new Beli($hargaSuper, $jenis, $jumlah);
            break;
        case 'V-Power':
            $transaction = new Beli($hargaVPower, $jenis, $jumlah);
            break;
        case 'V-Power Diesel':
            $transaction = new Beli($hargaVPowerDiesel, $jenis, $jumlah);
            break;
        case 'V-Power Nitro':
            $transaction = new Beli($hargaVPowerNitro, $jenis, $jumlah);
            break;
    }

    $transactionDetails = $transaction->hitungTotal();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bensin online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .receipt {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .wakakakak {
            text-align: center;
            margin-top: 20px;
        }
        img {
            max-width: 250px;
            height: auto; 
        }
    </style>
</head>
<body>
    <h1>Bensin Online</h1>
    <div class="container">
        <form method="post">
            <label for="jenis">Choose Gasoline/Diesel Type:</label>
            <select name="jenis" id="jenis">
                <option value="Super">Shell Super</option>
                <option value="V-Power">Shell V-Power</option>
                <option value="V-Power Diesel">Shell V-Power Diesel</option>
                <option value="V-Power Nitro">Shell V-Power Nitro</option>
            </select>
            <label for="jumlah">Enter Quantity (in liters):</label>
            <input type="number" name="jumlah" id="jumlah" required>
            <input type="submit" name="submit" value="Hitung Total">
        </form>

        <?php
        if (isset($transactionDetails)) {
            echo "<div class='receipt'>";
            echo "<h2>Purchase Receipt:</h2>";
            echo "Type: " . $transactionDetails['jenis'] . "<br>";
            echo "Quantity: " . $transactionDetails['jumlah'] . " liters<br>";
            echo "Total Amount: Rp. " . number_format($transactionDetails['total'], 2) . "<br>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="wakakakak">
        <img src="manca.jpg" alt="Funny Meme">
    </div>

</body>
</html>
