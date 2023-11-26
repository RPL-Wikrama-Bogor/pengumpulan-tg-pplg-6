<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.10</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="pabp" placeholder="PABP"><br>
        <input type="number" name="mtk" placeholder="MTK"><br>
        <input type="number" name="dpk" placeholder="DPK"><br>
        <button type="submit" name="submit">submit</button>
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
        echo "Grade : A";
    }else if($rata <= 80 && $rata >= 75){
        echo "Grade : B";
    }else if($rata <= 75 && $rata >= 65){
        echo "Grade : C";
    }else if($rata <= 65 && $rata >=45){
        echo "Grade : D";
    }else if($rata <= 45 && $rata >= 0){
        echo "Grade : E";
    }else{
        echo "angka tidak memenuhi persyaratan";
    }
}