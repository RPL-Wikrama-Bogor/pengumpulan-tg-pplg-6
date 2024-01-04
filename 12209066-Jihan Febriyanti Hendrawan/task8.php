<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satuan, Puluhan, Ratusan</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td><input type="number" name="bilangan"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
    $bilangan;
    $satuan;
    $puluhan;
    $ratusan;

    if(isset($_POST['submit'])){
        $bilangan = $_POST['bilangan'];

        $ratusan = floor(($bilangan / 100)% 10);
        $puluhan = floor(($bilangan / 10) % 10);
        $satuan = $bilangan % 10;

        echo "Bilangan : " . $bilangan . "<br>";
        echo "Ratusan : " . $ratusan . "<br>";
        echo "Puluhan : " . $puluhan . "<br>";
        echo "Satuan : " . $satuan . "<br>";
    }
    ?>

</body>
</html>
