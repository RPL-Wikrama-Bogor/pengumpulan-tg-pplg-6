<!DOCTYPE html>
<html>
<head>
    <title>Form Rental Motor</title>
    <style>
        body{
            font-family: sans-serif;
        }
        .form{
            text-align: center;
        }
        .hasil{
            text-align: center;
            margin-top: 1em;
            width: 500px;
            height: 190px;
            margin-left: 23em;
            padding: 5px;
            outline: auto;
        }

    </style>
</head>
<body>
    <div class="form">
    <h1>Rental Motor</h1>
    <form method="post" action="">
        <label for="nama">Nama Pelanggan</label>
        <td>:</td>
        <input type="text" name="nama" required><br><br>

        <label for="hari">Lama Waktu (per hari)</label>
        <td>:</td>
        <input type="number" name="hari" required><br><br>

        <label for="jenis_motor">Jenis Motor</label>
        <td>:</td>
        <select name="jenis_motor">
            <option value="beat">Motor Beat</option>
            <option value="vario">Motor Vario</option>
            <option value="scopy">Motor Scopy</option>
        </select><br><br>

        <input type="submit" name="hitung" value="submit">
    </form>
</body>
</html>
</div>

<div class= "hasil">
<?php
class Pelanggan {
    private $nama;
    private $memberList;
    private $hari;
    private $jenis_motor;
    private $harga_motor;

    public function __construct($nama, $memberList, $hari, $jenis_motor) {
        $this->nama = $nama;
        $this->memberList = $memberList;
        $this->hari = $hari;
        $this->jenis_motor = $jenis_motor;

        // Set harga motor berdasarkan jenis motor
        $this->setHargaMotor();
    }

    private function setHargaMotor() {
        switch ($this->jenis_motor) {
            case "beat":
                $this->harga_motor = 50000; // Harga Motor Beat per hari
                break;
            case "vario":
                $this->harga_motor = 60000; // Harga Motor Vario per hari
                break;
            case "scopy":
                $this->harga_motor = 70000; // Harga Motor Scopy per hari
                break;
            default:
                $this->harga_motor = 0; // Harga default jika jenis motor tidak ditemukan
        }
    }

    public function isMember() {
        return in_array($this->nama, $this->memberList);
    }

    public function hitungDiskon() {
        if ($this->isMember()) {
            return $this->harga_motor * $this->hari * 0.05;
        } else {
            return 0;
        }
    }

    public function hitungTotalHarga() {
        $diskon = $this->hitungDiskon();
        $total_harga = ($this->harga_motor * $this->hari) - $diskon;
        $pajak = 10000;
        $total_harga = $total_harga + $pajak;


        return $total_harga;
    }

    public function cetakStruk() {
        $ismember = $this->isMember() ? 'Member' : 'Non-Member';
        $diskon = $this->isMember() ? '5%' : '0%';
        

        echo "<h2>Hasil Transaksi</h2>";
        echo $this->nama . " berstatus sebagai " . $ismember .  " mendapatkan diskon sebesar " . $diskon ."<br>";
        echo "Jenis motor yang di rental adalah " . $this->jenis_motor . " selama " . $this->hari . " hari " . "<br>";
        echo "Harga Rental Per-harinya adalah " . $this->harga_motor . "<br>";
        echo "<br>";
        echo "Besar yang harus dibayarkan: " . number_format($this->hitungTotalHarga(), 0, ',', '.') . " Rupiah<br>";
    }
}

// Daftar nama pelanggan yang merupakan member
$memberList = ["Awit", "Jihan", "Celly"];

if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $hari = $_POST['hari'];
    $jenis_motor = $_POST['jenis_motor'];

    $pelanggan = new Pelanggan($nama, $memberList, $hari, $jenis_motor);
    $pelanggan->cetakStruk();
}
?>
</div>