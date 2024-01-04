
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<style>
        body {
            background-color: #F1EFEF;
            font-family: Arial, sans-serif;
        }

        center {
            margin-top: 70px;
        }

        table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 2px #666;
        }

        table td {
            padding: 10px;
        }

        select, input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        select {
            background-color: #191717;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
</style>
<body>
    <center>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama:</td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Durasi Pinjaman(Hari):</td>
                    <td>
                        <input type="number" name="hari" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe Motor: </td>
                    <td>
                        <select name="jenis" required>
                            <option value="Kawasaki H2">Kawasaki H2</option>
                            <option value="Kawasaki ZX-25RR">Kawasaki ZX-25RR</option>
                            <option value="Honda CBR1000">Honda CBR1000</option>
                            <option value="Ducati Panigale">Ducati Panigale</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="buy" name="kirim"></td>
                </tr>
            </form>
        </table>
    </center>

   
<?php
$proses = new buy();
$proses->setHarga(400000, 100000, 900000, 600000);
if (isset($_POST['kirim'])) {
    $proses->jumlah = $_POST['hari'];
    $proses->model = $_POST['jenis'];

    $proses->harga();
    $proses->strukPembelian();
}
?>
<?php
class motor{
    private $h2,
    $zx25,
    $cbr,
    $panigale;
    protected $pajak;
    public $jumlah;
    public $model;

    
    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->h2 = $tipe1;
        $this->zx25 = $tipe2;
        $this->cbr = $tipe3;
        $this->panigale = $tipe4;
    }

    public function getHarga() {
        $data["Kawasaki H2"] = $this->h2;
        $data["Kawasaki ZX-25RR"] = $this->zx25;
        $data["Honda CBR1000"] = $this->cbr;
        $data["Ducati Panigale"] = $this->panigale;
        return $data;
    }
}

class buy extends motor {
   
    private $members = [
        "Asep" => 5,
        "Orang" => 5,
    ];

    public function harga() {
    $dataHarga = $this->getHarga();
    $pajak = $this->pajak;
    $hargaBeli = $this->jumlah * $dataHarga[$this->model];
    $pajak = 10000;

    $diskon = 0;
    if (!empty($_POST['nama'])) {
        $buyerName = $_POST['nama'];
        $this->buyerName = $buyerName; 
        if (isset($this->members[$buyerName])) {
            $diskon = $this->members[$buyerName];
        }
    }

    $hargaDiskon = $hargaBeli * ($diskon / 100);

    $hargaBayar = $hargaBeli + $pajak - $hargaDiskon;
    
  
    return $hargaBayar;
}


    public function strukPembelian() {
        echo "<center>";
        echo "----------------------------------------------" . "<br>";
        if (isset($this->members[$this->buyerName])) {
            $diskon = $this->members[$this->buyerName];
            echo "Bahwa anda " . $this->buyerName . ", merupakan member dan mendapat diskon " . $diskon . "%" . "<br>";
        } else {
            $diskon = 0;
            echo "Bahwa anda " . $this->buyerName . ", merupakan non-member dan mendapat diskon 0%" . "<br>";
        }
        echo "Anda menyewa motor " . $this->model . "<br>";
        echo "Dengan Durasi hari: " . $this->jumlah . " Hari <br>";
        
        echo "Total yang harus anda bayar (Pajak Rp. 10.000) Rp. " . number_format($this->harga(), 0, '', '.') . "<br>";
        echo "----------------------------------------------";
        echo "</center>";
    }
}

?>

</body>
</html>