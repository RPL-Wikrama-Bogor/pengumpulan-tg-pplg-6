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
    <title>Bilangan bulat</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bil"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $bilangan = $_POST['bil'];
        
        echo "</br>";
        echo "Satuan : " . $satuan = $bilangan%10;
        echo "</br>";
        echo "Puluhan : " . $puluhan = floor(($bilangan/10)%10);
        echo "</br>";
        echo "Ratusan : " . $ratusan = floor(($bilangan/100));
    }
?>