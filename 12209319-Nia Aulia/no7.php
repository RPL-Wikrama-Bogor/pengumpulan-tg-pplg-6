<?php

$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 7</title>
</head>
<body>
    <form action= "" method = "post">
        Total gram<br> <input type = "number" name = "totalgram"></input> <br><br>
        <input type = "submit" value = "submit" name="submit">
  </form>

  <?php
  if(isset($_POST['submit'])){
    $total_gram= $_POST['totalgram'];
   
$harga_sebelum = 500 * $total_gram;
$diskon = 5 * $harga_sebelum / 100;
$harga_setelah = $harga_sebelum - $diskon;
echo "Harga Sebelum = " . $harga_sebelum ;
echo "<br>Diskon = ". $diskon ;
echo "<br>Harga Setelah = ".$harga_setelah ;

  }
  ?>
</body>
</html>

