<?php

$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;
$nama;

?>

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
                <td>nama</td>
                <td>;</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>gaji pokok</td>
                <td>;</td>
                <td><input type="number" name="gaji_pokok"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$nama = $_POST["nama"];
$gaji_pokok = $_POST["gaji_pokok"];

echo "nama :" . $nama;
echo "<br/>";
echo "tunj : " . $tunj = (20 * $gaji_pokok)/100;
echo "<br/>";
echo "pjk : " . $pjk = (15 * ($gaji_pokok))/100;
echo "<br/>";
echo "gaji bersih : " . $gaji_bersih = ($gaji_pokok + $tunj - $pjk);
echo "<br/>";
}
?>