<?php 
    $ttl_gram;
    $harga_sblm;
    $dskn;
    $harga_stlh;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 7</title>
</head>
<body>
    <form action="" method= "post">
        <table>
            <tr>
                <td>Total Gram</td>
                <td></td>
                <td><input type="number" name="ttl_gram"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit"value="submit" name="submit"></td>
            </tr>
        </table>
    </form>

<?php
    if (isset($_POST['submit'])) {
        $ttl_gram =$_POST['ttl_gram'];

        $harga_sblm = 500 * $ttl_gram;
        $dskn = 5* $harga_sblm /100;
        $harga_stlh = $harga_sblm - $dskn;

        echo "Harga sebelum = $harga_sblm <br>";
        echo "Diskon = $dskn <br>";
        echo "Harga setelah = $harga_stlh";
    }
?>
</body>
</html>