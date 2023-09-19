<?php
class RentalMotor {
    public $jenisMotor;
    public $harga;
    public $pajak;
    public $durasi;
    public $namaPeminjam;

    public function __construct($jenisMotor, $harga, $pajak) {
        $this->jenisMotor = $jenisMotor;
        $this->harga = $harga;
        $this->pajak = $pajak;
    }

    public function setDurasi($durasi) {
        $this->durasi = $durasi;
    }

    public function setNamaPeminjam($namaPeminjam) {
        $this->namaPeminjam = $namaPeminjam;
    }

    public function hitungHargaTotal() {
        $subtotal = (int)$this->durasi * $this->harga;
        $total = $subtotal + $this->pajak;

        $diskon = 0;
        if (in_array($this->namaPeminjam, ["Khai", "Ken"])) {
            // Memberikan diskon 5% jika pelanggan adalah member
            $diskon = $subtotal * 0.05;
            $total -= $diskon;
        }

        return [
            "diskon" => $diskon,
            "jenisMotor" => $this->jenisMotor,
            "durasi" => $this->durasi,
            "hargaPerHari" => $this->harga,
            "totalBayar" => $total,
        ];
    }

    public function getOutputMessage() {
        $hasilPerhitungan = $this->hitungHargaTotal();

        $output_message = "<=================================================> <br> {$this->namaPeminjam} merental motor dengan tipe {$hasilPerhitungan['jenisMotor']} <br> Dengan durasi peminjaman selama {$hasilPerhitungan['durasi']} hari. <br> Harga rental per hari adalah Rp. " . number_format($hasilPerhitungan['hargaPerHari'], 0, ',', '.') . "<br>";

        if ($hasilPerhitungan['diskon'] > 0) {
            $output_message .= "Anda adalah member dan mendapatkan diskon sebesar Rp. " . number_format($hasilPerhitungan['diskon'], 0, ',', '.') . "<br>";
        }

        $output_message .= "Total yang harus dibayar adalah Rp. " . number_format($hasilPerhitungan['totalBayar'], 0, ',', '.') . "<br> Pajak yang harus dibayar adalah Rp. " . number_format($this->pajak, 0, ',', '.') . "<br> <=================================================> ";

        return $output_message;
    }
}

$output_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['durasi']) && isset($_POST['tipe_jenis_motor']) && isset($_POST['nama'])) {
        $tipe_jenis_motor = $_POST['tipe_jenis_motor'];
        $durasi = $_POST['durasi'];
        $nama_peminjam = $_POST['nama'];

        // Ganti harga sesuai dengan jenis motor yang dipilih
        $harga_motor = 0;
        switch ($tipe_jenis_motor) {
            case "Motor Touring":
                $harga_motor = 50000; // Ganti dengan harga per hari untuk Motor Touring
                break;
            case "Motor Sport":
                $harga_motor = 60000; // Ganti dengan harga per hari untuk Motor Sport
                break;
            case "Motor Sport Touring":
                $harga_motor = 70000; // Ganti dengan harga per hari untuk Motor Sport Touring
                break;
            case "Motor Balap":
                $harga_motor = 80000; // Ganti dengan harga per hari untuk Motor Balap
                break;
        }

        $rental_motor = new RentalMotor($tipe_jenis_motor, $harga_motor, 10000);
        $rental_motor->setDurasi($durasi);
        $rental_motor->setNamaPeminjam($nama_peminjam);

        $output_message = $rental_motor->getOutputMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('arrow-down.png') no-repeat right center;
            background-size: 24px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        p {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rental Motor</h1>
        <form method="post">
            <label for="nama">Nama Peminjam:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="durasi">Durasi Hari Peminjaman:</label>
            <input type="number" name="durasi" id="durasi" required>

            <label for="tipe_jenis_motor">Pilih Tipe Motor:</label>
            <select name="tipe_jenis_motor" id="tipe_jenis_motor" required>
                <option value="Motor Touring">Motor Touring</option>
                <option value="Motor Sport">Motor Sport</option>
                <option value="Motor Sport Touring">Motor Sport Touring</option>
                <option value="Motor Balap">Motor Balap</option>
            </select>

            <input type="submit" value="Kirim Data">
        </form>

        <?php
        if (!empty($output_message)) {
            echo "<p>$output_message</p>";
        }
        ?>
    </div>
</body>
</html>
