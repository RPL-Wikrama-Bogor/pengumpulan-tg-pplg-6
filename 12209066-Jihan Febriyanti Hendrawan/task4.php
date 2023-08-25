<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Karyawan :</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok :</td>
                <td><input type="number" name="gaji"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
    
    <?php

    $tunj;
    $pjk;
    $gaji_bersih;

     if(isset($_POST['submit'])){
        $gaji_pokok=$_POST ['gaji'];
        $nama=$_POST['nama'];

        $tunj= (20 * $gaji_pokok)/100;
        $pjk=(15 *( $gaji_pokok + $tunj))/100;
        $gaji_bersih= $gaji_pokok + $tunj - $pjk;

        echo "Nama :" . $nama . "</br>";
        echo "Pajak :" . $pjk . "</br>";
        echo "Tunjangan :" . $tunj . "</br>";
        echo "Gaji Bersih :" . $gaji_bersih . "</br>";

    }
    ?>
    
</body>
</html>
