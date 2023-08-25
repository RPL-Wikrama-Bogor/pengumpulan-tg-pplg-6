<!DOCTYPE html>
<html lang="en">
<head>
    <title>No.05</title>
</head>
<body>
        <form action="" method="post">
            <input type="number" name="jam" placeholder="Masukan Jam" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"><br>
            <input type="number" name="menit" placeholder="Masukan Menit" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"><br>
            <input type="number" name="detik" placeholder="Masukan Detik" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"><br>
            <button type="submit" name="submit">Hitung</button>
        </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

    $jam = $jam * 3600;
    $menit = $menit * 60;

    $total = $jam + $menit + $detik;


    echo "<br>hasil pengubahan ke detik adalah " .$total ." detik";
}

?>