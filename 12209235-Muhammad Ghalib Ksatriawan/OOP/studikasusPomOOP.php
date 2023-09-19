<!DOCTYPE html>
<html>
<head>
    <title>Hitung Pembelian Pertamina</title>
</head>
<body>
<center>
    <h1>Hitung Pembelian Pertamina</h1>
    <?php
    class FuelCalculator {
        private $data = [
            'Pertalite' => 10000,
            'Pertamax' => 13300,
            'Dex' => 16900,
            'Turbo' => 15900
        ];

        public function hitungTotalBill($jenis, $jumlah) {
            if (array_key_exists($jenis, $this->data)) {
                $pricePerLiter = $this->data[$jenis];
                $sebelumPpn =  ($pricePerLiter * $jumlah);
                $total_tagihan = ($pricePerLiter * $jumlah) + ($pricePerLiter * $jumlah * 0.1);
                return [
                    'jenis' => $jenis,
                    'jumlah' => $jumlah,
                    'belumPpn' => $sebelumPpn,
                    'total_tagihan' => $total_tagihan
                ];
            } else {
                return false; // Jenis bahan bakar tidak valid
            }
        }
    }

    if (isset($_POST['hitung'])) {
        $jenis = $_POST['jenis'];
        $jumlah = floatval($_POST['jumlah']);

        $calculator = new FuelCalculator();
        $result = $calculator->hitungTotalBill($jenis, $jumlah);

        if ($result) {
            echo "Jenis BBM yang anda pilih adalah " . $result['jenis'] . "<br>";
            echo "Dengan jumlah = " . $result['jumlah'] . " Liter<br>";
            echo "Total Sebelum PPN 10% = Rp" . number_format($result['belumPpn'], 2 ) . "<br>";
            echo "Total tagihan = Rp" . number_format($result['total_tagihan'],2);
        } else {
            echo "Jenis bahan bakar tidak valid.";
        }
    }
    ?>
    <P>=============================================</P> <br>
    <form action="" method="POST">
        <label for="jenis">Jenis Bahan Bakar:</label>
        <select name="jenis" id="jenis">
            <option value="Pertalite">Pertalite</option>
            <option value="Pertamax">Pertamax</option>
            <option value="Dex">Dex</option>
            <option value="Turbo">Turbo</option>
        </select><br><br>

        <label for="jumlah">Jumlah (Liter):</label>
        <input type="text" name="jumlah" id="jumlah" required><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <P>=============================================</P> <br>

    
</body>
</html>
