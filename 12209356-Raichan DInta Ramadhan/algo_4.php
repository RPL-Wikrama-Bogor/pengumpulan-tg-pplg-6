<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.04</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td><input type="number" name="gaji"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="hitung" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $gaji = $_POST['gaji'];

            $tunj = (20*$gaji)/100;
            $pjk = (15*($gaji+$tunj))/100;
            $gaji_bersih = $gaji+$tunj-$pjk;

            echo "<h3>Hasil Perhitungan Gaji</h3>";
            echo "Nama Karyawan: " . $nama . "<br>";
            echo "Besar Tunjangan: " . $tunj . "<br>";
            echo "Besar Pajak: " . $pjk . "<br>";
            echo "Gaji Bersih: " . $gaji_bersih. "<br>";
        }
    ?>
</body>
</html>