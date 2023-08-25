<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung jumlah belanja</title>
</head>
<body>

<form action="" method=post>
    <tr>
        <td>Total gram</td>
        <td><input type="number" name="berat"></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" value= "cari" name="submit"></td>
    </tr>
</form>

<?php

$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah;

if(isset($_POST['submit'])){
    $total_gram= $_POST['berat'];

    $harga_sebelum= 500 * $total_gram;
    $diskon= 5 * $harga_sebelum / 100;
    $harga_setelah= $harga_sebelum - $diskon;

    echo "Total gram :". $total_gram . "</br>";
    echo "Harga sebelum diskon :". $harga_sebelum . "</br>";
    echo "Diskon :". $diskon . "</br>";
    echo "Harga setelah diskon :". $harga_setelah. "</br>";
}

?>
    
</body>
</html>