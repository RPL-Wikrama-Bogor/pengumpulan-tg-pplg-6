<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Bilangan Ganjil Genap</title>
</head>
<body>
    
</body>
</html>

<?php
  for($i=1; $i<=50; $i++){
    if($i % 2 == 1 ){
        echo $i . " adalah bilangan ganjil"; 
        echo "<br>";
    } else {
        echo $i. " adalah bilangan genap"  ;
        echo"<br>";
    }
  }

  ?>
  