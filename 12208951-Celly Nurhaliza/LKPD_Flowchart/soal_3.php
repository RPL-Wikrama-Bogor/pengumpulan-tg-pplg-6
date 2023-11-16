<?php
$a;
$b;
$c;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Angka Pertama</label>
        <input type="number" name="satu"><br><br>

        <label for="">Angka Kedua</label>
        <input type="number" name="dua"><br><br>

        <label for="">Angka Ketiga</label>
        <input type="number" name="tiga"><br><br>

        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $a = $_POST["satu"];
        $b = $_POST["dua"];
        $c = $_POST["tiga"];

        if($a > $b && $a > $c){
            echo $a;
        } else if($b > $a && $b > $c){
            echo $b;
        } else if($c > $a && $c > $b){
            echo $c;
        } else echo "sama besar";
    }
    ?>
</body>
</html>