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
                <td><label for="">Total Gram</label></td>
                <td><input type="number" name="total_gram"></td>
            </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>

    <br>

    <?php

    $harga_sebelum;
    $diskon;
    $harga_setelah;

    if(isset($_POST['submit'])){
        $total_gram = $_POST['total_gram'];

        $harga_sebelum = 500 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;

        echo "Harga Sebelum: " . $harga_sebelum . "<br>";
        echo "Diskon: " . $diskon . "<br>";
        echo "Harga Setelah: " . $harga_setelah . "<br>";

    }

    ?>
</body>
</html>

<!-- penambahan baris komen -->