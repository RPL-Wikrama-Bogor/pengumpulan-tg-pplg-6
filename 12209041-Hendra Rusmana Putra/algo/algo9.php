<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Ribuan Puluhan Satuan</title>
</head>
<body>
    <h1>Mencari suhu celcius</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td>:</td>
                <td><input type="number" name="fahrenheit"></td>
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
$suhu_fahrenheit;
$suhu_celcius;

if (isset($_POST ['submit'])) {
    $suhu_fahrenheit = $_POST ['fahrenheit'];

    $suhu_celcius = ($suhu_fahrenheit - 32) * 5/6;

    if ($suhu_celcius > 30) {
        echo "Panas";
    }elseif($suhu_celcius > 25){
        echo "Dingin";
    }
    else{
        echo "Normal";
    }
}

?>