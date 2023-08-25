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
    
        if($waktu > 3600){
            $jam = $waktu / 3600;
            $waktu = $waktu - ($jam * 3600);
            $hasil = $jam . "jam";
        } elseif($waktu > 60){
            $menit = $waktu / 60;
            $waktu = $waktu - ($menit * 60);
            $hasil = $menit . "menit";
        } else{
            $detik = $waktu;
            $hasil = $detik . "detik";
            
        }
        echo $hasil;
    }
    ?>
</body>
</html>