<!DOCTYPE html>
<html lang="en">
<head>
    <title>No. 3</title>
    <style>
        body{
            margin-top: 90px;
        }
    </style>
</head>
<body>
    <center>
        <h2><i>Selamat mencoba</i></h2>
        <form action="" method="post">
            <input type="number" name="jam" placeholder="Masukan Jam" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"><br>
            <input type="number" name="menit" placeholder="Masukan Menit" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"><br>
            <input type="number" name="detik" placeholder="Masukan Detik" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"><br><br>
            <button type="submit" name="submit">Hitung</button>
        </form>
    </center>
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


    echo "<br><center>hasil konfersi ke detik = " .$total ." detik</center>";
}

?>