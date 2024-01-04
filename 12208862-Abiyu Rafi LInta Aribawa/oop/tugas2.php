<?php
class Pelanggan
{
    public $nama;
    protected $waktu;
    protected $jenisMotor;
    private $diskon = 0;
    private $pajak = 10000;
    private $hargaMotor = [
        'Vario' => 150000,
        'Vesmet' => 700000,
        'PCX' => 250000,
        'Aerox' => 300000,
        'Beat' => 500000
    ];

    public function __construct($nama, $waktu, $jenisMotor)
    {
        $this->nama = $nama;
        $this->waktu = $waktu;
        $this->jenisMotor = $jenisMotor;
    }

    protected function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    private function hitungBiayaRental()
    {
        $hargaPerHari = $this->hargaMotor[$this->jenisMotor] ?? 100000;

        $totalBiaya = $this->waktu * $hargaPerHari;
        $totalBiayaSetelahDiskon = $totalBiaya * (1 - $this->diskon / 100);
        $totalBiayaSetelahPajak = $totalBiayaSetelahDiskon + $this->pajak;

        return $totalBiayaSetelahPajak;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getWaktu()
    {
        return $this->waktu;
    }

    public function getJenisMotor()
    {
        return $this->jenisMotor;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function tampilkanBiayaRental()
    {
        if ($this->diskon > 0) {
            echo "{$this->nama} Berstatus Member <br>";
            echo " Mendapatkan Diskon Sebesar : {$this->diskon}% <br>";
            echo " Jenis Motor Yang Dipilih Adalah : {$this->jenisMotor} <br>";
            echo " Harga Motor per Hari: Rp. {$this->hargaMotor[$this->jenisMotor]} <br>";
            echo " Lama Waktu Rental : {$this->waktu} hari <br>";
            $biayaRental = $this->hitungBiayaRental();
            $total = number_format($biayaRental, 0, ',', '.');
            echo " Biaya Keseluruhan Adalah: Rp. {$total}";
        } else {
            echo "{$this->nama} Berstatus NonMember <br>";
            echo "Tidak Mendapat Diskon <br>";
            echo "Jenis Motor Yang Dipilih Adalah: {$this->jenisMotor} <br>";
            echo "Harga Motor per Hari: Rp. {$this->hargaMotor[$this->jenisMotor]} <br>";
            echo "Lama Waktu Rental : {$this->waktu} hari <br>";
            $biayaRental = $this->hitungBiayaRental();
            $total = number_format($biayaRental, 0, ',', '.');
            echo "Biaya Keseluruhan Adalah: Rp. {$total}";
        }
    }
}

class PelangganMember extends Pelanggan
{
    public function __construct($nama, $waktu, $jenisMotor)
    {
        parent::__construct($nama, $waktu, $jenisMotor);
        $namaMember = ['abi', 'rafi', 'linta', 'aribawa'];

        if (in_array(strtolower($this->getNama()), $namaMember)) {
            $this->setDiskon(5);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>

<body>
    <center>
        <h2>Rental Motor</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Lama Waktu Rental (Hari)</td>
                    <td><input type="text" name="waktu"></td>
                </tr>
                <tr>
                    <td>Jenis Motor</td>
                    <td>
                        <select name="pilih" id="pilih">
                            <option value="Vario">Vario</option>
                            <option value="Vesmet">Vesmet</option>
                            <option value="PCX">PCX</option>
                            <option value="Aerox">Aerox</option>
                            <option value="Beat">Beat</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form><br>
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $waktu = $_POST['waktu'];
            $jenisMotor = $_POST['pilih'];

            $pelanggan = new PelangganMember($nama, $waktu, $jenisMotor);
            $pelanggan->tampilkanBiayaRental();
        }
        ?>
    </center>
</body>
