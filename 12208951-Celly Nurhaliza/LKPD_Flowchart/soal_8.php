<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 8</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Input Bilangan</label>
        <input type="number" name="bilangan"><br><br>

        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $bilangan = $_POST["bilangan"];

        $satuan = $bilangan % 10;
        $puluhan = ($bilangan % 100) - $satuan ;
        $ratusan = ($bilangan % 1000) - $puluhan - $satuan;

        echo "Satuan : ".$satuan; 
        echo "<br>";
        echo "Puluhan : ".$puluhan;
        echo "<br>";
        echo "Ratusan : ".$ratusan;
    }
    ?>
</body>
</html>