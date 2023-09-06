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
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><input type="number" name="gaj_pok"></td>
            </tr>
            <tr>
                <td></td>
                <td>:</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>     
    </form>
</body>
</html>

<?php
$gaj_pok;
$gaj_ber;
$nama;
$pjk;
$tunj;

if (isset($_POST['submit'])) {
    $gaj_pok = $_POST ['gaj_pok'];
    $nama = $_POST ['name'];

    $tunj = 20 * $gaj_pok / 100;
    $pjk = (15 * ($gaj_pok + $tunj)) /100;
    $gaj_ber = $gaj_pok + $tunj - $pjk;

echo "Nama: ". $nama. "<br>";
echo "Tunjangan: ". $tunj. "<br>";
echo "pajak: ". $pjk. "<br>";
echo "Gaji Bersih: ". $gaj_ber. "<br>";

}
?>