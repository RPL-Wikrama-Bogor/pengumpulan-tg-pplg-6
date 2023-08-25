<?php
    $jam;
    $menit;
    $detik;
    $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengkonversi total detik</title>
</head>
<body>
    <form action="#" method = "post">
        <table>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name ="jam"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name ="menit"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="submit" name ="submit"></td>
            </tr>
        </table>
    </form><br>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam = $jam*3600;
        $menit = $menit*60;
        $total = $jam + $menit + $detik;
        echo "Total detiknya adalah : " . $total;
    }
?>