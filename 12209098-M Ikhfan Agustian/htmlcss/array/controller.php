<?php
class DataMotor {
    private $hargabeat;
    private $hargaAerox;
    private $hargaVario;
    private $listVIP = ['fan', 'ikhfan', 'agustian', 'muhammad'];

    public $jenisYangDipilih;
    public $lamaWaktu;
    public $nama_pengguna;

    function __construct()
    {
        $this->diskon = 0.05;
    }

    protected $totalPembayaran;
    protected $diskon;

    public function setHarga($beat, $Aerox, $Vario) {
        $this->hargabeat = $beat;
        $this->hargaAerox = $Aerox;
        $this->hargaVario = $Vario;
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
        $semuaDataMotor["beat"] = $this->hargabeat;
        $semuaDataMotor["Aerox"] = $this->hargaAerox;
        $semuaDataMotor["Vario"] = $this->hargaVario;
        return $semuaDataMotor;
    }
}

    class Pembelian extends DataMotor {
        public function hargaRental()
        {
            $dataHargaMotor = $this->getHarga();
            $hargaRental = $this->lamaWaktu * $dataHargaMotor[$this->jenisYangDipilih] + 10000;
            return $hargaRental;
        }
    
        public function hargaDiskon()
        {
            $dataHargaMotor = $this->getHarga();
            $hargaRental = $this->lamaWaktu * $dataHargaMotor[$this->jenisYangDipilih];
            $diskon = $hargaRental * $this->diskon;
            $hargaTotalDiskon = $hargaRental - $diskon + 10000;
            return $hargaTotalDiskon;
        }

        public function cetakBukti() 
        {
            $dataHargaMotor = $this->getHarga();
    
            echo '<div style="border: 1px solid #ccc; padding: 10px; margin: 20px; text-align: center;">';
        echo '<h2>BUKTI PEMBELIAN</h2>';
        echo '<hr>';

        if (in_array($this->getListName(), $this->getListVIP())){
            echo '<p> Penyewa: <strong>' . ucfirst($this->getListName()) . '</strong></p>';
            echo '<p> Motor yang Disewa: <strong>' . ucfirst($this->jenisYangDipilih) . '</strong></p>';
            echo '<p>Harga Motor per Hari: <strong>Rp ' . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . '</strong></p>';
            echo '<p>Lama Peminjaman (Hari): <strong>' . $this->lamaWaktu . '</strong></p>';
            echo '<p>Mendapatkan Diskon Sebesar: <strong>5%</strong></p>';
            echo '<p> pajak : 10.000</p>';
            echo '<p>Total Bayaran Setelah Diskon: <strong>Rp. ' . number_format($this->hargaDiskon(), 0, ',', '.') . '</strong></p>';
           
        } else {
            echo '<p>Nama Pengguna: <strong>' . ucfirst($this->getListName()) . '</strong></p>';
            echo '<p>Jenis Motor: <strong>' . ucfirst($this->jenisYangDipilih) . '</strong></p>';
            echo '<p>Harga Motor per Hari: <strong>Rp ' . number_format($dataHargaMotor[$this->jenisYangDipilih], 0, ',', '.') . '</strong></p>';
            echo '<p>Lama Peminjaman (Hari): <strong>' . $this->lamaWaktu . '</strong></p>';
            echo '<p>Anda Tidak Mendapatkan Diskon Karena Bukan Membership</p>';
            echo '<p> pajak : 10.000</p>';
            echo '<p>Total Bayaran: <strong>Rp. ' . number_format($this->hargaRental(), 0, ',', '.') . '</strong></p>';
            
        }

        echo '</div>';
    }
}