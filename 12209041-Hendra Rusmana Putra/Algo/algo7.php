<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Harga</title>
</head>
<body>
<h1>Menghitung Harga</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Total Gram</td>
                <td>:</td>
                <td><input type="number" name="total"></td>
            </tr>
            <tr>
                <td></td>
                <td>:</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>     
    </form>
</body>
</html>
<?php
$tot_gram;
$harga_sebelum;
$diskon;
$harga_setelah;
if (isset($_POST['submit'])) {
    $tot_gram = $_POST ['total'];

    $harga_sebelum = 500 * $tot_gram;
    $diskon = 5 * $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    echo "Ini adalah harga sebelum dikenai diskon ". $harga_sebelum;
    echo "<br>Ini adalah harga diskon ". $diskon;
    echo "<br>Ini adalah harga sesudah dikenai diskon ". $harga_setelah;
}

?>