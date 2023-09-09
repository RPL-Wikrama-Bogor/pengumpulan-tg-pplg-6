<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 6</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="waktu" placeholder="Masukan Waktu">
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php


if(isset($_POST['submit'])){

    $waktu = $_POST['waktu'];

        $jam = floor($waktu/3600);
        $waktu = $waktu - ($jam * 3600);
        $jam = $jam ;

        $menit = floor($waktu/ 60 );
        $waktu = $waktu - ($menit * 60);
        $menit = $menit ;

        $detik = $waktu;
        $detik = $detik ;

    if($jam > 0) echo $jam . " jam ";
    if($menit > 0) echo $menit . " menit ";
    if($detik > 0 ) echo $detik . " detik ";
    

}