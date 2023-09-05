<?php
    $suhu_fahrenheit;
    $suhu_celcius;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan derajat fahrenheit</title>
</head>
<body>
    <h1>Menentukan derajat fahrenheit</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Suhu Fahrenheit</td>
                <td></td>
                <td><input type="number" name="suhu"></td>
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
            $suhu_fahrenheit = $_POST['suhu'];

            //proses
            $suhu_celcius = $suhu_fahrenheit / 33.8;

            //output
            if ($suhu_celcius < 30){
                echo "Panas";
            }
            else if ($suhu_celcius > 25){
                echo "Dingin";
            }
            else {
                echo "Normal";
            }
        }

    ?>

</body>
</html>