<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suhu</title>
</head>
<body>
  <form  action="#" method="post">
    <table>
        <tr>
            <td>Input suhu</td>
            <td>:</td>
            <td><input type="number" name="suhu"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
  </form><br>

<?php

  if (isset($_POST['submit'])) {
    $suhu = $_POST['suhu'];
    $suhuf;

    $suhuf = $suhu / 33.8;

    if($suhu > 300){
      echo "Suhu panas";
    }
    elseif($suhu > 250){
      echo "Suhu dingin";
    }
    else{
      echo "Suhu normal";
    }
  }

?>

</body>
</html>