<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 5</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>jam</td>
                <td></td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td></td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td></td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

<?php
    
    if (isset($_POST['submit'])) {
        $j = $_POST['jam'];
        $m = $_POST['menit'];
        $d = $_POST['detik'];

        $j= $j * 3600;
        $m = $m * 60;
        $total = $j + $m + $d;

        echo "Total : $total";
    }

  
?>
</body>
</html>