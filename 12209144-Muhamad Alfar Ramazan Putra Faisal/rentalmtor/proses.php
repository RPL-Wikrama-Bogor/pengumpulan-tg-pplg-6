<?php
class datamotor {
    protected $diskon;

    private $scoopy,
            $beat,
            $vario,
            $aerox;
    private $vip = ['alfar', 'ikhfan', 'restu', 'ghalib', 'azka', 'daman'];

    public $lama;
    public $jenis;
    public $pengguna;

    function __construct() {
        $this->diskon = 0.05;
    }

    public function getlistvip(){
        return $this->vip;
    }

    public function setlistname($nama){
        $this->pengguna = $nama;
    }

    public function getlistname(){
        return $this->pengguna;
    }

    public function setHarga($scoopy, $beat, $vario, $aerox) {
        $this->scoopy = $scoopy;
        $this->beat = $beat;
        $this->vario = $vario;
        $this->aerox = $aerox;
    }

    public function getHarga() {
        $data["scoopy"] = $this->scoopy;
        $data["beat"] = $this->beat;
        $data["vario"] = $this->vario;
        $data["aerox"] = $this->aerox;
        return $data;
    }
}

class sewa extends datamotor {
    public function hargasewa() {
        $dataHarga = $this->getHarga();
        $hargasewa = $this->lama * $dataHarga[$this->jenis];
        $hargaBayar = $hargasewa + 10000;
        return $hargaBayar;
    }

    public function hargadiskon(){
        $dataHarga = $this->getHarga();
        $hargasewa = $this->lama * $dataHarga[$this->jenis];
        $diskon = $hargasewa * $this->diskon;
        $setelahdiskon = $hargasewa - $diskon + 10000;
        return $setelahdiskon;

    }

    public function cetakPembelian() {

        $dataHarga = $this->getharga();

        echo '<div style="border: 1px solid #ccc; padding: 10px; margin: 20px; text-align: center;">';
        echo '<h2>BUKTI PEMBELIAN</h2>';
        echo '<hr>';

        if (in_array($this->getlistname(), $this->getlistvip())){
            echo "<center>";
            echo "----------------------------------------------" . "<br>";
            echo "Nama penyewa : " . ucfirst($this->getlistname()) . "<br>";
            echo "Jenis Motor yang di sewa adalah " . $this->jenis . "<br>";
            echo "Dengan harga rental perharinya: Rp. " . number_format($dataHarga[$this->jenis], 0, ',', '.') . "<br><br><br>";
            echo "Anda Mendapatkan Diskon 5% Karena Membership, Total yang harus anda bayar setelah diskon Rp. " . number_format($this->hargadiskon(), 0, '', '.') . "<br>";
            echo "----------------------------------------------";
            echo "</center>";
        } else {
            echo "<center>";
            echo "----------------------------------------------" . "<br>";
            echo "Nama penyewa : " . ucfirst($this->getListname()) . "<br>";
            echo "Jenis Motor yang di sewa adalah " . $this->jenis . "<br>";
            echo "Dengan harga rental perharinya: Rp. " . number_format($dataHarga[$this->jenis], 0, ',', '.') . "<br><br><br>";
            echo "Anda Tidak Mendapatkan Diskon Karena Bukan Membership, Total yang harus anda bayar Rp. " . number_format($this->hargasewa(), 0, '', '.') . "<br>";
            echo "----------------------------------------------";
            echo "</center>";
        }
        
    }
}
?>