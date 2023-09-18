<?php
class Shell {
    // Properti untuk harga, jenis, dan PPN
    public $harga;
    public $jenis;
    public $ppn;

    // Konstruktor untuk inisialisasi harga dan jenis
    public function __construct($harga, $jenis) {
        $this->harga = $harga;
        $this->jenis = $jenis;
        $this->ppn = 0.10; // PPN sebesar 10%
    }

    // Metode untuk menghitung total harga setelah menambahkan PPN
    public function hitungTotal($jumlah) {
        $total = $this->harga * $jumlah;
        $total += $total * $this->ppn;
        return $total;
    }
}

class Beli extends Shell {
    // Properti untuk jumlah pembelian
    public $jumlah;

    // Konstruktor untuk inisialisasi harga, jenis, PPN, dan jumlah
    public function __construct($harga, $jenis, $jumlah) {
        parent::__construct($harga, $jenis);
        $this->jumlah = $jumlah;
    }

    // Metode untuk menghasilkan bukti transaksi
    public function buktiTransaksi() {
        $total = $this->hitungTotal($this->jumlah);
        return "Jumlah {$this->jumlah} {$this->jenis}: Rp. " . number_format($total, 2);
    }
}

// Definisikan class Shell dan class Beli seperti sebelumnya

// Daftar harga Shell
$hargaShellSuper = 15420;
$hargaShellVPower = 16130;
$hargaShellVPowerDiesel = 18310;
$hargaShellVPowerNitro = 16510;

// Fungsi untuk menghitung total harga
function hitungTotalHarga($harga, $jumlah) {
    $total = $harga * $jumlah;
    $total += $total * 0.10; // Tambahkan PPN 10%
    return $total;
}

// Inisialisasi variabel
$jenisBahanBakar = "";
$jumlahLiter = "";
$totalHarga = "";

// Handle saat formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenisBahanBakar = $_POST["jenis_bahan_bakar"];
    $jumlahLiter = $_POST["jumlah_liter"];
    
    switch ($jenisBahanBakar) {
        case "Shell Super":
            $totalHarga = hitungTotalHarga($hargaShellSuper, $jumlahLiter);
            break;
        case "Shell V-Power":
            $totalHarga = hitungTotalHarga($hargaShellVPower, $jumlahLiter);
            break;
        case "Shell V-Power Diesel":
            $totalHarga = hitungTotalHarga($hargaShellVPowerDiesel, $jumlahLiter);
            break;
        case "Shell V-Power Nitro":
            $totalHarga = hitungTotalHarga($hargaShellVPowerNitro, $jumlahLiter);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Beli Bahan Bakar</title>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>------------------------------------------</p>";
        echo "<p>Anda Membeli Bahan Bakar Minyak Tipe $jenisBahanBakar</p>";
        echo "<p>Dengan Jumlah : $jumlahLiter  liter</p>";
        echo "<p>Total Yang Harus Anda Dibayar : Rp. " . number_format($totalHarga, 2) . "</p>";
        echo "<p>------------------------------------------</p>";
    }
    ?>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="jenis_bahan_bakar">Pilih Tipe Bahan Bakar:</label>
        <select id="jenis_bahan_bakar" name="jenis_bahan_bakar" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select>

        <br><br>

        <label for="jumlah_liter">Masukkan Jumlah Liter:</label>
        <input type="number" id="jumlah_liter" name="jumlah_liter" required>

        <br><br>

        <input type="submit" value="Beli">
    </form>

    <br>
</body>
</html>
