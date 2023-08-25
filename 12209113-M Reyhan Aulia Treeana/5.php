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
                <td><label for="">Jam</label></td>
                <td><input type="number" name="jam" maxlength="2"></td>
            </tr>
            <tr>
                <td><label for="">Menit</label></td>
                <td><input type="number" name="menit" maxlength="2"></td>
            </tr>
            <tr>
                <td><label for="">Detik</label></td>
                <td><input type="number" name="detik" maxlength="2"></td>
            </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>

<br>

<?php

if(isset($_POST['submit'])){
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

$jam1 = $jam * 3600;
$menit1 = $menit * 60;

$total = $jam1 + $menit1 + $detik;

echo $total;
}

?>
</body>
</html>