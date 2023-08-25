<?php

$bilangan;
$ratusan;
$puluhan;
$satuan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 8</title>
</head>
<body>
    <form action= "" method = "post">
        Bilangan<br> <input type = "number" name = "bilangan"></input> <br><br>
        <input type = "submit" value = "cek" name="submit">
  </form>

  <?php
  if(isset($_POST['submit'])){
    $bilangan= $_POST['bilangan'];
   

$ratusan = (($bilangan / 100)% 10);
$puluhan =(($bilangan / 10) % 10);
$satuan = $bilangan % 10;
echo "Ratusan = ". $ratusan ;
echo "<br>Puluhan = ". $puluhan ;
echo "<br>Satuan = " . $satuan ;

  }
  ?>
</body>
</html>

