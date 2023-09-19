<center>
<?php
class Shell{
    protected $ppn = 10/100,
              $Super = 15420,
              $VPower = 16130,
              $VPowerDiesel = 18310,
              $VPowerNitro = 16510,
              $tipe = "";

    function set($value){
        $this->tipe = $value;
    }

    function getTipe(){
        return $this->tipe;
    }

    function hitungTotal($jumlah){
        global $hasil1;
        if (empty($this->tipe)) {
            echo "Pilih tipe bahan bakar terlebih dahulu.";
            return;
        }
        if ($jumlah <= 0) {
            echo "Masukkan jumlah liter yang valid.";
            return;
        }
        $harga = $this->{$this->tipe};
        $total = $harga * $jumlah * (1 + $this->ppn);
        echo "-------------------------------------------------------<br>";
        echo "Anda membeli bahan bakar minyak tipe " . $this->getTipe() . "<br>";
        echo "dengan jumlah : $jumlah liter<br>";
        echo "total yang harus anda bayar Rp. " . number_format($total, 3, ',', '.') . "<br>";
        echo "-------------------------------------------------------<br>";
    }
}

$hasil1 = new Shell;

if(isset($_POST['jumlah']) && isset($_POST['tipe'])){
    $jumlah = $_POST['jumlah'];
    $tipe = $_POST['tipe'];
    
    $hasil1->set($tipe);
    $hasil1->hitungTotal($jumlah);
}
?>

<html>
    <body>
        <form action="" method="POST">
            <label for="">Masukkan Jumlah Liter : </label>
            <input type="number" name="jumlah"><br>
            <label for="">Pilih Tipe Bahan Bakar : </label>
            <select name="tipe" id="">
                <option value="Super">Shell Super</option><br>
                <option value="VPower">Shell V-Power</option><br>
                <option value="VPowerDiesel">Shell V-Power Diesel</option><br>
                <option value="VPowerNitro">Shell V-Power Nitro</option><br>
            </select><br>
            <button type="submit">Beli</button>
        </form>
    </body>
</html>
</center>