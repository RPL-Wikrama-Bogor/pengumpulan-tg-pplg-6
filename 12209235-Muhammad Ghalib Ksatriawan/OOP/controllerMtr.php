<?php
class Datamtr {
    private $hargaCbr;
    private $hargaR15;
    private $hargaPrimavera;
    private $listVIP = ['ghalib', 'rizki', 'azka', 'restu'];

    public $typeYangDipilih;
    public $lamaSewa;
    public $nama_pengguna;

    function __construct()
    {
        $this->diskon = 0.05;
    }

    protected $totalPembayaran;
    protected $diskon;

    public function setHarga($Cbr, $R15, $Primavera) {
        $this->hargaCbr = $Cbr;
        $this->hargaR15 = $R15;
        $this->hargaPrimavera = $Primavera;
    }

    public function getListVIP() {
        return $this->listVIP;
    }

    public function setListName($nama){
        $this->nama_pengguna = $nama;
    }

    public function getListName(){
        return $this->nama_pengguna;
    }

    public function getHarga() {
        $semuaDataMotor["Cbr"] = $this->hargaCbr;
        $semuaDataMotor["R15"] = $this->hargaR15;
        $semuaDataMotor["Primavera"] = $this->hargaPrimavera;
        return $semuaDataMotor;
    }
}

    class Penyewaan extends Datamtr {
        public function hargaRental()
        {
            $dataHargaMotor = $this->getHarga();
            $hargaRental = $this->lamaSewa * $dataHargaMotor[$this->typeYangDipilih] + 10000;
            return $hargaRental;
        }
    
        public function hargaDiskon()
        {
            $dataHargaMotor = $this->getHarga();
            $hargaRental = $this->lamaSewa * $dataHargaMotor[$this->typeYangDipilih];
            $diskon = $hargaRental * $this->diskon;
            $hargaTotalDiskon = $hargaRental - $diskon + 10000;
            return $hargaTotalDiskon;
        }

        public function cetakBukti() 
        {
            $dataHargaMotor = $this->getHarga();
    
            echo '<div style="border: 1px solid #ccc; padding: 10px; margin: 20px; text-align: center;">';
        echo '<h2>BUKTI PEMbAYARAN</h2>';
        echo '<hr>';

        if (in_array($this->getListName(), $this->getListVIP())){
            echo '<p><strong>' . ucfirst($this->getListName()) . '</strong> Bersatatus sebagai member dan mendapat Diskon sebesar 5% </p>';
            echo '<p>Jenis Motor yang Disewa adalah <strong>' . ucfirst($this->typeYangDipilih) . '</strong> dengan Lama Sewa Selama <strong>' . $this->lamaSewa . '</strong> Hari</p>';
            echo '<p>Harga Sewa per Hari: <strong>Rp ' . number_format($dataHargaMotor[$this->typeYangDipilih], 0, ',', '.') . '</strong></p>';
            echo '<p>Total Bayaran Setelah Diskon : <strong>Rp ' . number_format($this->hargaDiskon(), 0, ',', '.') . '</strong></p>';
        } else {
            echo '<p><strong>' . ucfirst($this->getListName()) . '</strong> Bersatatus  bukan sebagai member dan tidak mendapatkan diskon </p>';
            echo '<p>Jenis Motor yang Disewa adalah <strong>' . ucfirst($this->typeYangDipilih) . '</strong> dengan Lama Sewa Selama <strong>' . $this->lamaSewa . '</strong> Hari</p>';
            echo '<p>Harga Sewa per Hari: <strong>Rp ' . number_format($dataHargaMotor[$this->typeYangDipilih], 0, ',', '.') . '</strong></p>';
            echo '<p>Total Bayaran Setelah Diskon : <strong>Rp ' . number_format($this->hargaDiskon(), 0, ',', '.') . '</strong></p>';
        }

        echo '</div>';
    }
}