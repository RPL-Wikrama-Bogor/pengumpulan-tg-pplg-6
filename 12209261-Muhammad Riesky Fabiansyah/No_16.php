<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ganjil Genao</title>
</head>
<body>
  <?php
  $i = 1;
  while ($i <= 50) {
    $i++;
    if ($i % 2 == 1) {
      echo $i. "Adalah Bilangin Ganjil <br>";
    } else {
      echo $i. "Adalah Bilangin Genap <br>";
    }
  }
  ?>
</body>
</html>