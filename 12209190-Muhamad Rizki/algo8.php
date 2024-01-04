<!DOCTYPE html>
<html>
<head>
    <title>Output Angka Satuan, Puluhan, dan Ratusan</title>
</head>
<body>
    <h2>Masukkan bilangan bulat:</h2>
    <form method="post" action="">
        <input type="number" name="bilangan" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan = ($_POST['bilangan']);
        $satuan = $bilangan % 10;
        $puluhan = ($bilangan / 10) % 10;
        $ratusan = ($bilangan / 100) % 10;

        echo "<h2>Output:</h2>";
        echo "Bilangan $bilangan memiliki: <br>";
        echo "Angka satuan: $satuan <br>";
        echo "Angka puluhan: $puluhan <br>";
        echo "Angka ratusan: $ratusan <br>";
    }
   
