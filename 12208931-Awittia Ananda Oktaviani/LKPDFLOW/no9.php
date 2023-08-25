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
                <td>Temperatur suhu</td>
                <td>;</td>
                <td><input type="number" name="suhu" id="suhu"></td>
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
    $suhu = $_POST['suhu'];
    $suhuf;

    $suhuf = $suhu / 33.8;

    if($suhu >= 300){
      echo "panas";
    }
    elseif($suhu > 250){
      echo "normal";
    }
    else{
      echo "dingin";
    }
  }
  ?>
</body>
</html>