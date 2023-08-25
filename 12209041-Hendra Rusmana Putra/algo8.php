<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Ribuan Puluhan Satuan</title>
</head>
<body>
    <h1>Menentukan Ribuan Puluhan Satuan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bil"></td>
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
$bilangan;
$satuan;
$puluhan;
$ratusan;

if (isset($_POST['submit'])) {
    $bilangan = $_POST ['bil'];

    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = floor($bilangan / 100);
    
    echo $ratusan. " ini adalah ratusan <br>";
    echo $puluhan. " ini adalah puluhan <br>";
    echo $satuan. " ini adalah satuan";
}
?>