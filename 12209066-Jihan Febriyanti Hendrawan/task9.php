<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suhu</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Suhu</td>
                <td><input type="number" name="suhuf"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
    $suhu_celcius;

    if(isset($_POST['submit'])){
        $suhu_farenheit= $_POST['suhuf'];

        $suhu_celcius= $suhu_farenheit /33.8;

        if($suhu_farenheit >= 300){
            echo "panas";
        } 
        else if ($suhu_farenheit < 250){
            echo "dingin";
        } else {
            echo "normal";
        }

    }
    ?>


    
</body>
</html>