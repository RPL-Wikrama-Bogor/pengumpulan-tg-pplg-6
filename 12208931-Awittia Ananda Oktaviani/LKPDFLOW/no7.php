<?php

$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Total Gram</td>
                <td>;</td>
                <td><input type="number" name="totalgram"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$total_gram = $_POST["totalgram"];


echo "harga sebelum :" . $harga_sebelum = (500 * $total_gram);
echo "<br/>";
echo "diskon : " . $diskon = (5 * $harga_sebelum/100);
echo "<br/>";
echo "harga setelah : " . $harga_setelah = ($harga_sebelum - $diskon);
echo "<br/>";
}
?>


