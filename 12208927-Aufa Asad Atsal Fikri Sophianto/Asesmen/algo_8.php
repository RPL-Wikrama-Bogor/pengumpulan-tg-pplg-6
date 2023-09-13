<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan</title>
</head>

<body>
    <form action="#" method="post">
        <tr>
            <td><label for="">Input Bilangan</label></td>
            <td><input type="number" name="bilangan" id="bilangan"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Hitung"></td>
        </tr>
    </form>

    <?php if(isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];
        $satuan = $bilangan % 10;
        $puluhan = ($bilangan / 10) % 10;
        $ratusan = $bilangan / 100;

        echo "Bilangan Satuan = $satuan<br>";
      echo "Bilangan Puluhan = $puluhan<br>";
      echo "Bilangan Ratusan = $ratusan<br>";
    }

    ?>
</body>
</html>