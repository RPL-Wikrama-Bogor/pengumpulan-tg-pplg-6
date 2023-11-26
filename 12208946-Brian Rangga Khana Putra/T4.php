<?php
    $tunj;
    $gaji;
    $pjk;
    $gajibrsh;
    $nama;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4 (Gaji)</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Karyawan</td>
                <td>:</td>
                <td><input type="number" name="gaji"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Input" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $gaji = $_POST['gaji'];

            $tunj = (20 * $gaji)/ 100;
            $pjk = (15 * ($gaji + $tunj))/100;
            $gajibrsh = $gaji + $tunj - $pjk;

            echo "Nama anda :" . $nama ,"<br>";
            echo "Besar Tunjangan :" . $tunj ,"<br>";
            echo "Besar Pajak :" . $pjk ,"<br>";
            echo "Gaji Bersih :" . $gajibrsh ,"<br>";
        }
    ?>
</body>
</html>