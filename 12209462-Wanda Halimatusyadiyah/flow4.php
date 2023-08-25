<?php
  $tunj; $pjk; $gji_brsh; $gaji_pokok;
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
            <td>Nama</td>
            <td></td>
            <td><input type="text" name= "nama"></td>
        </tr>
        <br>
        <br>
         <tr>
            <td>gaji pokok</td>
            <td></td>
            <td><input type="number" name= "gaji_pokok"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="hitung" name="submit"></td>

        </tr>
    </table>
     <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $tunj = (20 * $gaji_pokok/100);
        $pjk = (15 * ($gaji_pokok + $tunj)) / 100;
        $gji_brsh = $gaji_pokok + $tunj - $pjk;

        echo $nama . "nama: ";
        echo "<br>";
        echo $tunj . "tunjangan";
        echo "<br>";
        echo $pjk . "pajak"; 
        echo "<br>";
        echo $gji_brsh . "gaji bersih";
    } 
    ?>
    </form>
</body>
</html>