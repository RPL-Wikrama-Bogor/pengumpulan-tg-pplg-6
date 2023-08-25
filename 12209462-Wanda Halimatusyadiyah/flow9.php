<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="post">
    <table>
    <tr>
      <label for="suhu">input suhu</label>
      <input type="text" name="suhu" id="suhu">
      <br>
      <input type="submit" value="hitung" name="submit">
    </tr>
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $suhu = $_POST['suhu'];
    $suhuv;

    $suhuv = $suhu / 33.8;

    if($suhu >= 300){
      echo "panas";
    }
    elseif($suhu >= 250){
      echo "normal";
    }
    else{
      echo "dingin";
    }
  }

  ?>
  </table>
  </form>
</body>
</html>