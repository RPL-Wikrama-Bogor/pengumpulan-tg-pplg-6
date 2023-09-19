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
        $this->pajak = 0.01;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->bmw = $tipe1;
        $this->porsche = $tipe2;
        $this->mclaren = $tipe3;
        $this->lambo = $tipe4;
    }

    public function getHarga() {
        $data["bmw"] = $this->bmw;
        $data["porsche"] = $this->porsche;
        $data["mclaren"] = $this->mclaren;
        $data["lambo"] = $this->lambo;
        return $data;
    }
}

class buy extends cars {
    public function harga() {
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->model];
        $hargaPajak = $hargaBeli * $this->pajak;

        $diskon = 0;
        if (!empty($_POST['nama_member'])) {
            $members = [
                "John" => 7,  
                "Alice" => 7, 
            ];

            $buyerName = $_POST['nama_member'];
            if (isset($members[$buyerName])) {
                $diskon = $members[$buyerName];
            }
        }

        $hargaDiskon = $hargaBeli * ($diskon / 100);
        
        $hargaBayar = $hargaBeli + $hargaPajak - $hargaDiskon;
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
        echo "    <h2>Struk Rental</h2>";
        echo "    <p>Anda merental mobil merk " . $this->model . "</p>";
        echo "    <p>waktu: " . $this->jumlah . " hari</p>";
        echo "    <p>Silahkan lakukan proses pembayaran dengan jumlah Rp. " . number_format($this->harga(), 0, '', '.') . "</p>";
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

select, input[type="number"], input[type="submit"], input[type="text"] {
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
$proses->setHarga(4000000, 1000000, 900000, 600000);
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
            <td>Nama Pembeli (opsional):</td>
            <td>
                <input type="text" name="nama_member" placeholder="Masukkan nama member">
            </td>
        </tr>
        <tr>
            <td>Pilih Tipe atau merk Mobil :</td>
            <td>
                <select name="model" required>
                    <option value="bmw">BMW</option>
                    <option value="porsche">Porsche</option>
                    <option value="mclaren">Mclaren</option>
                    <option value="lambo">Lamborghini</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Berapa lama anda akan merental mobil ini ? (Hari) :</td>
            <td>
                <input type="number" name="mobil" required>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="buy" name="kirim"></td>
        </tr>
        </form>
    </table>
</center>
</body>
</html>
