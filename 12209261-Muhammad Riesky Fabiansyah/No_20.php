<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diskon Tiket</title>
</head>

<body>
  <form method="post" action="#">
    <table>
      <tr>
        <td><label for="vip">Input VIP</label></td>
        <td><input type="text" name="vip"></td>
      </tr>
      <tr>
        <td><label for="eksekutif">Input Eksekutif</label></td>
        <td><input type="text" name="eksekutif"></td>
      </tr>
      <tr>
        <td><label for="tiket">Input Tiket</label></td>
        <td><input type="text" name="tiket"></td>
      </tr>
      <tr>
        <td><label for="ekonomi">Input Ekonomi</label></td>
        <td><input type="text" name="ekonomi"></td>
      </tr>
      <tr>
        <td><label for="kategori_tiket">Kategori:</label></td>
        <td>
          <select id="kategori_tiket" name="kategori_tiket">
            <option value="ekonomi">Ekonomi</option>
            <option value="vip">Vip</option>
            <option value="eksekutif">Eksekutif</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit"></td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $vip = $_POST['vip'];
    $eksekutif = $_POST['eksekutif'];
    $tiket = $_POST['tiket'];
    $ekonomi = $_POST['ekonomi'];
    $kategori_tiket = $_POST['kategori_tiket'];

    $tiket_perkelas = 50;
    $keuntungan_vip = 0;
    $keuntungan_eksekutif = 0;
    $keuntungan_ekonomi = 0;

    if ($kategori_tiket == "vip") {
      $vip = $eksekutif + $tiket;
      if ($vip >= 35) {
        $keuntungan_vip = 25 / 100;
      } else if ($vip < 35 && $vip >= 20) {
        $keuntungan_vip = 15 / 100;
      } else if ($vip < 20) {
        $keuntungan_vip = 5 / 100;
      }
    } else if ($kategori_tiket == "eksekutif") {
      $eksekutif = $eksekutif + $tiket;
      if ($eksekutif >= 40) {
        $keuntungan_eksekutif = 20 / 100;
      } else if ($eksekutif >= 20 && $eksekutif < 40) {
        $keuntungan_eksekutif = 10 / 100;
      } else if ($eksekutif < 20) {
        $keuntungan_eksekutif = 2 / 100;
      }
    } elseif ($kategori_tiket == "ekonomi") {
      $ekonomi = $ekonomi + $tiket;
      $keuntungan_ekonomi = 7 / 100;
    } else {
      echo "Invalid";
    }

    $keuntungan_keseluruhan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;
    $total_tiket = $vip + $eksekutif + $ekonomi;

    echo "Total Tiket : " . $total_tiket . "<br>Keuntungan Vip : " . $keuntungan_vip . "<br>Keuntungan Eksekutif : " . $keuntungan_eksekutif . "<br>Keuntungan Ekonomi : " . $keuntungan_ekonomi;
    echo "<br>Keuntungan Keseluruhan : " . $keuntungan_keseluruhan;
  }
  ?>
</body>

</html>