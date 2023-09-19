<?php
    $bilangan;
    $satuan;
    $puluhan;
    $ratusan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari angka satuan-puluhan-ratusan</title>
</head>
<body>
    <h1>Mencari angka satuan-puluhan-ratusan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan</td>
                <td></td>
                <td><input type="number" name="bilangan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
    <br>

    <?php
        if(isset($_POST['submit'])){
            $bilangan = $_POST['bilangan'];

            //proses
            $satuan = $bilangan % 10;
            $puluhan = floor(($bilangan / 10) % 10);
            $ratusan = floor($bilangan / 100);

            //output
            echo $satuan . " Satuan" . "<br>";
            echo $puluhan . " Puluhan" . "<br>";
            echo $ratusan . " Ratusan" . "<br>";
        }

    ?>

</body>
</html>