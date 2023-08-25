<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suhu</title>
</head>
<body>
  <form method="post" action="#">
    <tr>
      <label for="suhu fahreinheit">Input Suhu Fahrenheit</label>
      <input type="text" name="suhufahrenheit" id="suhufahrenheit">
      <input type="submit" value="Submit" name="submit">
    </tr>
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $suhufahrenheit = $_POST['suhufahrenheit'];
    $suhucelcius;

    $suhucelcius = $suhufahrenheit / 33.8;

    if($suhucelcius > 30){
      echo "panas";
    }
    elseif($suhucelcius > 25){
      echo "Normal";
    }
    else{
      echo "dingin";
    }
  }

  ?>
</body>
</html>