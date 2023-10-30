<?php
$nama;
$gaji;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama"><br><br>

        <label for="">Gaji Pokok</label>
        <input type="number" name="gaji"><br><br>

        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST["nama"];
        $gaji = $_POST["gaji"];

        $tunj = (20 * $gaji / 100);
        $pjk = (15 * ($gaji + $tunj)/ 100);
        $gaji_bersih = $gaji + $tunj - $pjk;

        echo "Nama : ".$nama; 
        echo "<br>";
        echo "Tunjangan : ".$tunj;
        echo "<br>";
        echo "Pajak : ".$pjk;
        echo "<br>";
        echo "Gaji Bersih : ".$gaji_bersih;
    }
    ?>
</body>
</html>