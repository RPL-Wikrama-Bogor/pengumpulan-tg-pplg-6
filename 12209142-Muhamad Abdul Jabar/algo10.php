<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 10</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="pabp" placeholder="PABP"><br>
        <input type="number" name="mtk" placeholder="MTK"><br>
        <input type="number" name="dpk" placeholder="DPK"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];

    $rata = ($pabp + $mtk + $dpk) /3;

    if($rata <= 100 && $rata >= 80){
        echo "A";
    }else if($rata <= 80 && $rata >= 75){
        echo "B";
    }else if($rata <= 75 && $rata >= 65){
        echo "C";
    }else if($rata <= 65 && $rata >=45){
        echo "D";
    }else if($rata <= 45 && $rata >= 0){
        echo "E";
    }else{
        echo "angka tidak memenuhi persyaratan";
    }

    
}