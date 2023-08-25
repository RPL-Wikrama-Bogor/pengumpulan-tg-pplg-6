<?php
    $tunj;
    $pjk;
    $gajibersih;
    $gajipokok;
    $nama;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung gaji</title>
</head>
<body>
    <form action="#" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Gaji pokok</td>
            <td>:</td>
            <td><input type="text" name="gaji_pokok"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="submit" name="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $gajipokok = $_POST['gaji_pokok'];
        $nama = $_POST['nama'];

        echo "</br>";
        echo "Nama : " . $nama;
        echo "</br>";
        echo "Tunjangan : " . $tunj = (20*$gajipokok)/100;
        echo "</br>";
        echo "Pajak : " . $pjk = (15*($gajipokok+$tunj))/100;
        echo "</br>";
        echo "Gaji bersih : " . $gajibersih = ($gajipokok+$tunj-$pjk);

   }

?>
