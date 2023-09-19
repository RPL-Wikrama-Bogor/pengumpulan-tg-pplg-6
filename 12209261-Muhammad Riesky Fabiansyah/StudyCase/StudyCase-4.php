<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Motor</title>
</head>

<body>
  <center>
    <table>
      <form action="" method="post">
        <tr>
          <td>Nama Pelanggan : </td>
          <td><input type="text" name="member" required></td>
        </tr>
        <tr>
          <td>Jenis Motor :</td>
          <td>
            <select name="tipe" required>
              <option value="Beat">Beat</option>
              <option value="Honda">Honda</option>
              <option value="Yamaha">Yamaha</option>
              <option value="Nmax">Nmax</option>
            </select>
          </td>
        </tr>
        <tr>
        <tr>
          <td>Lama Waktu Rental</td>
          <td>
            <input type="number" name="waktu" required>
          </td>
        </tr>
        <td colspan="2"><input type="submit" value="submit" name="submit"></td>
        </tr>
      </form>
    </table>
  </center>
</body>

</html>


<?php
class Rental
{
  public $pelanggan;
  public $beat, $honda, $yamaha, $nmax;
  public $diskon;
  protected $member = ['Riesky', 'Reyhan', 'Tensa', 'Louis'];

  public $waktu;
  protected $pajak;
  public $tipe;

  public function __construct()
  {
    if (isset($_POST['submit'])){
    if (in_array($_POST['member'], $this->member)) {
      $this->diskon = 0.05;
      $this->pajak = 10000;
    } else {
      $this->diskon = 0;
      $this->pajak = 10000;
    }
  }
  }

  public function IsMember() {
    if (in_array($_POST['member'], $this->member)) {
      return 'member';
  } else {
      return 'Bukan Member';
  }
  }
  public function setHarga()
  {
    $this->beat = 90000;
    $this->honda = 75000;
    $this->yamaha = 80000;
    $this->nmax = 95000;

    
  }

  public function getHarga()
  {
    $data['Beat'] = $this->beat;
    $data['Honda'] = $this->honda;
    $data['Yamaha'] = $this->yamaha;
    $data['Nmax'] = $this->nmax;
    return $data;
  }
}

class buy extends Rental
{
  public function harga()
  {
    
    $dataHarga = $this->getHarga();
    $hargarental = $this->waktu * $dataHarga[$this->tipe];
    $hargadiskon = $hargarental * $this->diskon;
    $hargaBayar = $hargarental - $hargadiskon + $this->pajak;
    return $hargaBayar;
  }

  public function hargaawal() {
    if ($_POST['tipe'] == 'Beat') {
      $hargaawal = $this->beat;
      return $hargaawal;
    } else if ($_POST['tipe'] == 'Honda') {
      $hargaawal = $this->honda;
      return $hargaawal;
    } else if ($_POST['tipe'] == 'Yamaha') {
      $hargaawal = $this->yamaha;
      return $hargaawal;
    } else if ($_POST['tipe'] == 'Nmax') {
      $hargaawal = $this->nmax;
      return $hargaawal;
    }
    else {
      echo " Stock Habis ";
    }
  }

  public function Pembelian()
  {
    echo "  <div class='container'>";
    echo "    <h2>Struk Pembelian</h2>";
    echo "    <p>". $_POST['member'] ." Berstatus sebagai " . $this->IsMember() . " Mendapat Diskon Sebesar " . $this->diskon . "% <br>";
    echo "    <p>Jenis Motor Yang Dirental Adalah : " . "<b>" . $this->tipe . "</b>" ." Selama " . $this->waktu . " Hari </p>";
    echo "    <p>Harga Rental Perharinya : " . number_format($this->hargaawal(), 0, '', '.') . " </p>";
    echo "    <p>Pajak : " . number_format($this->pajak, 0, '', '.') . " </p>";
    echo "    <p> Total yang harus anda bayar <b>Rp. " . number_format($this->harga(), 0, '', '.') . "</b></p>";
    echo "  </div>";
  }
}
?>

<?php
$proses = new buy();
$proses->setHarga();
if (isset($_POST['submit'])) {
  $proses->waktu = $_POST['waktu'];
  $proses->tipe = $_POST['tipe'];

  $proses->harga();
  $proses->Pembelian();
}
?>