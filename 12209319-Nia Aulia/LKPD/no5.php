<?php

$jam;
$menit;
$detik;
$total;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 5</title>
</head>
<body>
    
    <form action= "" method = "post">
        Jam<br> <input type = "number" name = "jam"></input> <br><br>
        Menit<br> <input type = "number" name = "menit"></input> <br><br>
        Detik<br> <input type = "number" name = "detik"></input> <br><br>  
        <input type = "submit" value = "submit" name="submit">
  </form>

<?php
  if(isset($_POST['submit'])){
    $jam= $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

$jam = $jam * 3600;
$menit = $menit * 60;
$total = $jam + $menit + $detik;
echo "Total = ". $total;
  }
  ?>
</body>
</html>






 
