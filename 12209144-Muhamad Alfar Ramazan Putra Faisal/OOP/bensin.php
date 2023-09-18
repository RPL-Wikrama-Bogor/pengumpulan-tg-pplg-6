<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Tagihan Bahan Bakar</title>
</head>
<body>
    <h1>Kalkulator Tagihan Bahan Bakar</h1>
    <?php
    class FuelCalculator {
        private $data = [
            'Pertalite' => 10000,
            'Pertamax' => 13000,
            'Dex' => 16500,
            'Turbo' => 15700,
        ];

        public function calculateTotalBill($selectedFuel, $quantity) {
            if (array_key_exists($selectedFuel, $this->data)) {
                $hargaperlt = $this->data[$selectedFuel];
                $total = ($hargaperlt * $quantity) + ($hargaperlt * $quantity * 0.1);
                return [
                    'jenis' => $selectedFuel,
                    'jumlah' => $quantity,
                    'total_tagihan' => $total,
                ];
            } else {
                return false;
            }
        }
    }

    if (isset($_POST['hitung'])) {
        $selectedFuel = $_POST['jenis'];
        $quantity = floatval($_POST['jumlah']);

        $calculator = new FuelCalculator();
        $result = $calculator->calculateTotalBill($selectedFuel, $quantity);

        if ($result) {
            echo "1. Jenis yang Anda pilih  " . $result['jenis'] . "<br>";
            echo "2. Dengan jumlah " . $result['jumlah'] . " liter<br>";
            echo "3. Jumlah yang di Bayar Sebesar Rp " . number_format($result['total_tagihan'], 2);
        } else {
            echo "Jenis bahan bakar tidak valid.";
        }
    }
    ?>
    <form action="" method="POST">
        <label for="jenis">Jenis Bahan Bakar:</label>
        <select name="jenis" id="jenis">
            <option value="Pertalite">Pertalite</option>
            <option value="Pertamax">Pertamax</option>
            <option value="Dex">Dex</option>
            <option value="Turbo">Turbo</option>
        </select><br><br>

        <label for="jumlah">Jumlah (Liter):</label>
        <input type="number" name="jumlah" id="jumlah" required><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>
</body>
</html>