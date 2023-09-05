<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan gaji karyawan</title>
</head>
<body>
    <h1>Menentukan gaji karyawan</h1>
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
                <td><input type="number" name="gaji_pokok"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $tunj;
        $pjk;
        $gaji_bersih;
        $gaji_pokok;
        $nama;

        //proses
        $tunj = 20 * $gaji_pokok / 100;
        $pjk = 15 * ($gaji_pokok + $tunj) / 100;
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        //output
        echo "Nama Karyawan: " . $nama . "<br>";
        echo "Tunjangan: " . $tunj . "<br>";
        echo "Pajak: " . $pjk . "<br>";
        echo "Gaji Bersih: " . $gaji_bersih . "<br>";
    }
    ?>
</body>
</html>