<?php
$waktu;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Waktu</label>
        <input type="number" name="waktu"><br><br>

        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $waktu = $_POST["waktu"]; 
    
        $jam = floor($waktu / 3600);
        $sisaDetik = $waktu % 3600;
        $menit = floor($sisaDetik / 60);
        $detik = $sisaDetik % 60;

        $hasil = "";
        if ($jam > 0) {
            $hasil .= $jam . " jam ";
        }
        if ($menit > 0) {
            $hasil .= $menit . " menit ";
        }
        $hasil .= $detik . " detik";

        echo $hasil;
    }
    ?>
</body>
</html>