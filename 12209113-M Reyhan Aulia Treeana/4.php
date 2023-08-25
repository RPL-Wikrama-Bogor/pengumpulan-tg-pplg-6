


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
                <td><label for="">Nama Karyawan</label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="">Gaji Pokok</label></td>
                <td><input type="number" name="gaji"></td>
            </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>

    <br>


    <?php

$tunj;
$pajak;
$gaji_bersih;

if(isset($_POST['submit'])){
$gaji_pokok = $_POST['gaji'];
$nama = $_POST['nama'];

$tunj = (20 * $gaji_pokok) / 100;
$pajak = (15 *  ($gaji_pokok + $tunj)) / 100;
$gaji_bersih = $gaji_pokok + $tunj - $pajak;

echo "Nama: " . $nama . "</br>";
echo "Tunjangan: " . $tunj . "</br>";
echo "Pajak: " . $pajak . "</br>";
echo "Gaji Bersih: " . $gaji_bersih . "</br>";


}


?>


</body>
</html>