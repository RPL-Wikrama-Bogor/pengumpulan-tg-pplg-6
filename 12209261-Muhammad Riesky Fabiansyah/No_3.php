<?php
$bilangan_pertama;
$bilangan_kedua;
$bilangan_ketiga;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mencari Bilangan Terbesar</title>
</head>

<body>
  <form method="post" action="#">
    <table>
      <tr>
        <td>
          Bilangan Kesatu
        </td>
        <td>
          <input type="number" name="bilangan_pertama" maxlength="3">
        </td>
      </tr>
      <tr>
        <td>
          Bilangan Kedua
        </td>
        <td>
          <input type="number" name="bilangan_kedua" maxlength="3">
        </td>
      </tr>
      <tr>
        <td>
          Bilangan Ketiga
        </td>
        <td>
          <input type="number" name="bilangan_ketiga" maxlength="3">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="submit" value="Cari">
        </td>
      </tr>
    </table>
  </form>


  <?php
  if (isset($_POST['submit'])) {
    $bilangan_pertama = $_POST['bilangan_pertama'];
    $bilangan_kedua = $_POST['bilangan_kedua'];
    $bilangan_ketiga = $_POST['bilangan_ketiga'];

    if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
      echo $bilangan_pertama . " adalah Bilangan Terbesar ";
    } elseif ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
      echo $bilangan_kedua . " adalah Bilangan Terbesar ";
    } elseif ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
      echo $bilangan_ketiga . " adalah Bilangan Terbesar ";
    }
    else if ($bilangan_pertama == $bilangan_kedua && $bilangan_kedua == $bilangan_pertama && $bilangan_ketiga < $bilangan_pertama && $bilangan_ketiga < $bilangan_kedua){
      echo " Bilangan 1 Dan 2 Sama Besar Dan Nilai Terbesar Adalah ". $bilangan_pertama;
    }
    else {
      echo " Sama Besar ";
    }
  }
  ?>


</body>
</html>