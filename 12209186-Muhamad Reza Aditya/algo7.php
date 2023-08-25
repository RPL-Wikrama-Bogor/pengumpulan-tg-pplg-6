<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 7</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="harga" placeholder="Total gram">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $totalGram = $_POST['harga'];


    $hargaSebelumDiskon = 500 * $totalGram;
    $diskon = 5 * $hargaSebelumDiskon / 100;
    $hargaSetelah = $hargaSebelumDiskon - $diskon;


    echo "Harga sebelum diskon : ". $hargaSebelumDiskon."<br>";
    echo "Diskon : " . $diskon. "<br>" ;
    echo "Harga setelah diskon : " . $hargaSetelah . "<br>";
}