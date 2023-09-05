<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi jam</title>
</head>
<body>
     
<form action="" method="post">
        <table>
        <tr>
                <td>Input jam</td>
                <td></td>
                <td><input type="number" name="jam"></td>
        </tr>
        <tr>
                <td>Input menit</td>
                <td></td>
                <td><input type="number" name="menit"></td>
        </tr>
        <tr>
                <td>Input detik</td>
                <td></td>
                <td><input type="number" name="detik"></td>
        </tr>
        
            <td><input type="submit" value="submit" name="submit"></td>
        </table>
    </form>

</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];


    // Menghitung total detik
    $jam = ($jam *3600);
    $menit = ($menit *60);
    $total = $jam + $menit + $detik;
    echo "total detik adalah " . $total;
}
?>