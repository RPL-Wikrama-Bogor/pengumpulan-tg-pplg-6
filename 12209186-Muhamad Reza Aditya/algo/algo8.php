<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 8</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="bilangan" placeholder="Input bilangan">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $bilangan = $_POST['bilangan'];


    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = floor($bilangan / 100);

    echo $satuan. " satuan ".  $puluhan. " puluhan ".$ratusan. " ratusan ";
}
