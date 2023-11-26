<?php

$nilai_pabp;
$nilai_mtk;
$nilai_dpk;
$rata_rata;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 10</title>
</head>
<body>
    <form action= "" method = "post">
        Nilai pabp<br> <input type = "number" name = "nilaipabp"></input> <br><br>
        Nilai mtk<br> <input type = "number" name = "nilaimtk"></input> <br><br>
        Nilai dpk<br> <input type = "number" name = "nilaidpk"></input> <br><br>
        <input type = "submit" value = "submit" name="submit">
  </form>

  <?php
  if(isset($_POST['submit'])){
    $nilai_pabp= $_POST['nilaipabp'];
    $nilai_mtk= $_POST['nilaimtk'];
    $nilai_dpk= $_POST['nilaidpk'];
    $rata_rata;


$rata_rata = ($nilai_pabp + $nilai_mtk + $nilai_dpk) / 3;
 
if($rata_rata <= 100 && $rata_rata >= 80){
    echo "Grade A";
}
elseif($rata_rata <=80 && $rata_rata >= 75){
    echo "Grade B";
}
elseif($rata_rata <=75 && $rata_rata >= 65){
    echo "Grade C";
}
elseif($rata_rata <=65 && $rata_rata >= 45){
    echo "Grade D";
}
elseif($rata_rata <=45 && $rata_rata >= 0){
    echo "Grade E";
}
else{
    echo "Angka tidak memenuhi persyaratan";
}
}

  ?>
</body>
</html>


