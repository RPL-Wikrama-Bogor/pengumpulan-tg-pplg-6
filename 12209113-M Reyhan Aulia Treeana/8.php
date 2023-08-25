<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td><label for="">Input Bilangan</label></td>
                <td><input type="number" name="bilangan"></td>
            </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>

    <br>

    <?php
    $satuan;
    $puluhan;
    $ratusan;

    if(isset($_POST['submit'])){
        $bilangan = $_POST['bilangan'];

        $satuan = $bilangan % 10;
        $puluhan = ($bilangan % 100) - $satuan ;
        $ratusan = ($bilangan % 1000) - $puluhan - $satuan;

        echo "Satuan: " . $satuan . "<br>";
        echo "Puluhan: " . $puluhan . "<br>";
        echo "Ratusan: " . $ratusan . "<br>";
        

    }
    ?>
</body>
</html>