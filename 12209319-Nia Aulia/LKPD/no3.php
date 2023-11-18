<?php
$bil1;
$bil2;
$bil3;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 3</title>
</head>
<body>
    <center> Bilangan terbesar</center>
    <form action= "" method = "post">
        bilangan 1<br> <input type = "number" name = "bil1"></input> <br><br>
        bilangan 2<br> <input type = "number" name = "bil2"></input> <br><br>
        bilangan 3<br> <input type = "number" name = "bil3"></input> <br><br>  
        <input type = "submit" value = "sumbit" name="submit">
  </form>

  <?php
  if(isset($_POST['submit'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $bil3 = $_POST['bil3'];

  if ($bil1 > $bil2 && $bil1 > $bil3)
    echo $bil1 . " terbesar";
  else if ($bil2 > $bil2 && $bil2 > $bil3)
    echo $bil2 . " terbesar";
  else if ($bil3 > $bil1 && $bil3 > $bil2)
    echo $bil3 . " terbesar";
  else
    echo "sama besar";


  }
  ?>
</body>
</html>





