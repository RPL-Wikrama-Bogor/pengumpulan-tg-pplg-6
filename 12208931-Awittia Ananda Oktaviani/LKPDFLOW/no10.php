<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Nilai PABP</td>
                <td>;</td>
                <td><input type="text" name="pabp" id="pabp"></td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td>;</td>
                <td><input type="text" name="mtk" id="mtk"></td>
            </tr>
            <tr>
                <td>Nilai DPK</td>
                <td>;</td>
                <td><input type="text" name="dpk" id="dpk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
</body>
</html>

  <?php

  if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $rata;
    $rata = ($pabp + $mtk + $dpk) / 3;

    if($rata <= 100 && $rata >= 80){
      echo "<h3>Grade A</h3>";
    }
    elseif($rata <= 80 && $rata >= 75){
      echo "<h3>Grade B</h3>";
    }
    elseif($rata <= 75 && $rata >= 65){
      echo "<h3>Grade C</h3>";
    }
    elseif($rata <= 65 && $rata >= 45){
      echo "<h3>Grade D</h3>";
    }
    elseif($rata <= 45 && $rata >= 0){
      echo "<h3>Grade E</h3>";
    }
    else{
      echo "<h3>Angka tidak memenuhi persyaratan</h3>";
    }
  }
  ?>
</body>
</html>