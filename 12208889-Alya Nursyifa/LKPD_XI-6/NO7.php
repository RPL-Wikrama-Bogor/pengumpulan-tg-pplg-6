<?php
    $totalgram;
    $hargasebelum;
    $diskon;
    $hargasetelah;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah uang</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Total gram</td>
                <td>:</td>
                <td><input type="number" name="totalgr"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $totalgram = $_POST['totalgr'];

        echo "</br>";
        echo "Harga sebelum : " ."Rp." . $hargasebelum = 500*$totalgram;
        echo "</br>";
        echo "Diskon : " . "Rp." .  $diskon = 5*$hargasebelum/100;
        echo "</br>";
        echo "Harga setelah : " ."Rp." .  $hargasetelah = $hargasebelum-$diskon;
    }