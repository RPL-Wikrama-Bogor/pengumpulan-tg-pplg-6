<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 4</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td></td>
                <td><input type="number" name="gaji_pkk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit"  value= "submit"name="submit"></td>
            </tr>
        </table>
    </form>
<?php

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $gaji_pkk = $_POST['gaji_pkk'];

        $tunj = (20 * $gaji_pkk)/100;
        $pjk = (15 * ($gaji_pkk + $tunj))/100;
        $gaji_brsh = $gaji_pkk + $tunj - $pjk;  
        
        echo "Nama :$nama <br> ";
        echo  "Tunjangan :$tunj  <br>";
        echo "Pajak :$pjk  <br>";
        echo "Gaji Bersih :$gaji_brsh";
    }

?>

</body>
</html>