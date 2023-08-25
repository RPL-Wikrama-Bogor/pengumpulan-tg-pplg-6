<?php
$tunj;
$pajak;
$gaji_bersih;
$gaji_pokok;
$nama;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 4</title>
</head>
<body>
    <form action= "" method = "post">
        Nama<br> <input type = "text" name = "nama"></input> <br><br>
        Gaji pokok<br> <input type = "number" name = "gajipokok"></input> <br><br>
        <input type = "submit" value = "sumbit" name="submit">
  </form>

  <?php
  if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $gaji_pokok = $_POST['gajipokok'];
    
$tunj = (20 * $gaji_pokok / 100);
$pajak = (15* ($gaji_pokok + $tunj) / 100);
$gaji_bersih = $gaji_pokok + $tunj - $pajak;
echo "Nama = " . $nama ;
echo "<br>Tunjangan = ". $tunj ;
echo "<br>Pajak = ".$pajak ;
echo "<br>Gaji Bersih = ". $gaji_bersih ;


  }
  ?>
</body>
</html>





