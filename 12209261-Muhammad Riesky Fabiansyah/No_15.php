<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Genap Saja</title>
</head>
<body>
  <?php
    $i = 1;
    while ($i <= 50) {
      if ($i % 2 == 0) {
        echo $i . "<br>";
      }
      $i++;
    }
  ?>
</body>
</html>