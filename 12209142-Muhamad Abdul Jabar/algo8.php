

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 8</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan</td>
                <td></td>
                <td><input type="number" name="bil"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>

<?php
    if (isset($_POST['submit'])) {
        $bil = $_POST['bil'];

        
        $satuan = $bil % 10;
        $puluhan = ($bil /10)% 10;
        $ratusan =floor($bil / 100);

        echo "Satuan = $satuan <br>";
        echo "Puluhan = $puluhan <br>";
        echo "Ratusan = $ratusan ";
    }
?>
</body>
</html>