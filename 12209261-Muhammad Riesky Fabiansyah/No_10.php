<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Siswa</title>
</head>

<body>
  <form method="POST" action="#">
    <tr>
      <label for="NilaiPABP">Nilai PABP</label>
      <input type="text" name="pabp" id="pabp" maxlength="2">
    </tr>
    <tr>
      <label for="NIlaiMTK">Nilai MTK</label>
      <input type="text" name="mtk" id="mtk" maxlength="2">
    </tr>
    <tr>
      <label for="NilaiDPK">Nilai DPK</label>
      <input type="text" name="dpk" id="dpk" maxlength="2">
    </tr>
    <input type="submit" value="Submit" name="submit">
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    // $rata;
    $rata = round(($pabp + $mtk + $dpk) / 3);

    if ($rata <= 100 && $rata >= 80) {
      echo  "<td>". $rata ."</td>"."<th><h4>Grade A</h4></th>";
    } elseif ($rata <= 80 && $rata >= 75) {
      echo "<td>" . $rata . "</td>" . "<th><h4>Grade B</h4></th>";
    } elseif ($rata <= 75 && $rata >= 65) {
      echo "<td>" . $rata . "</td>" . "<th><h4>Grade C</h4></th>";
    } elseif ($rata <= 65 && $rata >= 45) {
      echo "<td>" . $rata . "</td>" . "<th><h4>Grade D</h4></th>";
    } elseif ($rata <= 45 && $rata >= 0) {
      echo "<td>" . $rata . "</td>" . "<th><h4>Grade E</h4></th>";
    } else {
      echo "<h1>Angka tiadk memenuhi persyaratan</h1>";
    }
  }
  ?>
</body>

</html>