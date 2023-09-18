<?php
class cars{
    private $bmw,
                $porsche,
                $mclaren,
                $lambo;
    protected $pajak;
    public $jumlah;
    public $model;

    function __construct() {
        $this->pajak = 0.1;
    }

    public function nyetiHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->bmw = $tipe1;
        $this->porsche= $tipe2;
        $this->mclaren = $tipe3;
        $this->lambo = $tipe4;
    }

    public function cekHarga() {
        $data["bmw"] = $this->bmw;
        $data["porsche"] = $this->porsche;
        $data["mclaren"] = $this->mclaren;
        $data["lambo"] = $this->lambo;
        return $data;
    }
}

class buy extends cars {
    public function harga() {
        $dataHarga = $this->cekHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->model];
        $hargaPajak = $hargaBeli * $this->pajak;
        $hargaBayar = $hargaBeli + $hargaPajak;
        return $hargaBayar;
    }

    public function strukPembelian() {
        echo "<html>";
        echo "<head>";
        echo "<style>";
        echo "  .container {";
        echo "    text-align: center;";
        echo "    font-family: Arial, sans-serif;";
        echo "    background-color: #ffff;";
        echo "    padding: 20px;";
        echo "    border-radius: 10px;";
        echo "  }";
        echo "</style>";
        echo "</head>";
        echo "<body>";
        echo "  <div class='container'>";
        echo "    <h2>Struk Pembelian</h2>";
        echo "    <p>Anda membeli  dengan mobil Merk " . $this->model . "</p>";
        echo "    <p> jumlah: " . $this->jumlah . " buah</p>";
        echo "    <p> Silahkan lakukan prosen pembayaran dengan jumlah Rp. " . number_format($this->harga(), 0, '', '.') . "</p>";
        echo "  </div>";
        echo "</body>";
        echo "</html>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ Showroom</title>
</head>
<style>
            body {
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif;
        }

        center {
            margin-top: 50px;
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
            background-color: #ccc;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #007bff; 
            color: #fff; 
            cursor: pointer;
        }
</style>
<?php
$proses = new buy();
$proses->nyetiHarga(4000000000, 10000000000, 9000000000, 6000000000);
if (isset($_POST['kirim'])) {
    $proses->jumlah = $_POST['mobil'];
    $proses->model = $_POST['model'];

    $proses->harga();
    $proses->strukPembelian();
}
?>
<body>
    <center>
        <table>
            <form action="" method="post">
            <tr>
                    <td>Pilih Tipe atau merk Mobil :</td>
                    <td>
                        <select name="model" required>
                            <option value="bmw">BMW</option>
                            <option value="porchse">Porsche</option>
                            <option value="mclaren">Mclaren</option>
                            <option value="lambo">Lamborghini</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Masukkan Jumlah mobil yang akan dibeli :</td>
                    <td>
                        <input type="number" name="mobil" required>
                    </td>
                </tr>
                    <td colspan="2"><input type="submit" value="buy" name="kirim"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>