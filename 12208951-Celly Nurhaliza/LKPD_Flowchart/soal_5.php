<?php
$jam;
$menit;
$detik;
$total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Jam</label>
        <input type="number" name="jam"><br><br>

        <label for="">Menit</label>
        <input type="number" name="menit"><br><br>

        <label for="">Detik</label>
        <input type="number" name="detik"><br><br>

        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

        $jam = $jam * 3600;
        $menit = $menit * 60;
        $total = $jam + $menit + $detik;

        echo $total;
    }
    ?>
</body>
</html>