<?php
$total_gram;
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
        <label for="">Total Gram</label>
        <input type="number" name="total_gram"><br><br>

        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $total_gram = $_POST["total_gram"];

        $harga_sebelum = 500 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;

        echo "Harga sebelum : ".$harga_sebelum;
        echo "<br>";
        echo "Diskon : ".$diskon;
        echo "<br>";
        echo "Harga setelah : ".$harga_setelah;
    }
    ?>
</body>
</html>