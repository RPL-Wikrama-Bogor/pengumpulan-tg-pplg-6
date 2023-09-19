<?php
class Shell
{
  private $shellsuper,
    $shellvpower,
    $shellvpowerdiesel,
    $shellvpowernitro;
  protected $ppn;
  public $jumlah;
  public $tipe;

  function __construct()
  {
    $this->ppn = 0.1;
  }

  public function setHarga($tipe1, $tipe2, $tipe3, $tipe4)
  {
    $this->shellsuper = $tipe1;
    $this->shellvpower = $tipe2;
    $this->shellvpowerdiesel = $tipe3;
    $this->shellvpowernitro = $tipe4;
  }

  public function getHarga()
  {
    $data["shellsuper"] = $this->shellsuper;
    $data["shellvpower"] = $this->shellvpower;
    $data["shellvpowerdiesel"] = $this->shellvpowerdiesel;
    $data["shellvpowernitro"] = $this->shellvpowernitro;
    return $data;
  }
}

class Beli extends Shell
{
  public function harga()
  {
    $dataHarga = $this->getHarga();
    $hargaBeli = $this->jumlah * $dataHarga[$this->tipe];
    $hargaPPN = $hargaBeli * $this->ppn;
    $hargaBayar = $hargaBeli + $hargaPPN;
    return $hargaBayar;
  }

  public function strukPembelian()
  {
    echo "<html>";
    echo "<head>";
    echo "<style>";
    echo "  .container {";
    echo "    text-align: center;";
    echo "    font-family: Arial, sans-serif;";
    echo "    background-color: #ffff;";
    echo "    padding: 20px;";
    echo "    border-radius: 10px;";
    echo "    width: 25%;";
    echo "    transform: translate(134%, 250%)";
    echo "  }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "  <div class='container'>";
    echo "    <h2>Struk Pembelian</h2>";
    echo "    <p>Anda membeli bahan bakar minyak tipe " . "<b><i>" . $this->tipe . "</b></i>" ."</p>";
    echo "    <p> dengan jumlah: " . $this->jumlah . " liter</p>";
    echo "    <p> Total yang harus anda bayar <b>Rp. " . number_format($this->harga(), 0, '', '.') . "</b></p>";
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
  <title>Bensin</title>
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

  select,
  input[type="number"],
  input[type="submit"] {
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
$proses = new Beli();
$proses->setHarga(15420, 16130, 18310, 16510);
if (isset($_POST['kirim'])) {
  $proses->jumlah = $_POST['Shell'];
  $proses->tipe = $_POST['tipe'];

  $proses->harga();
  $proses->strukPembelian();
}
?>

<body>
  <center>
    <table>
      <form action="" method="post">
        <tr>
          <td>Pilih Tipe Bahan Bakar :</td>
          <td>
            <select name="tipe" required>
              <option value="shellsuper">Shell Super</option>
              <option value="shellvpower">Shell V-Power</option>
              <option value="shellvpowerdiesel">Shell V-Power Diesel</option>
              <option value="shellvpowernitro">Shell V-Power Nitro</option>
            </select>
          </td>
        </tr>
        <tr>
        <tr>
          <td>Masukkan Jumlah Liter :</td>
          <td>
            <input type="number" name="Shell" required>
          </td>
        </tr>
        <td colspan="2"><input type="submit" value="buy" name="kirim"></td>
        </tr>
      </form>
    </table>
  </center>
  
</body>
</html>