<?php
    $hh;
    $mm;
    $ss;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+ 1 detik</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Input hh</td>
                <td>:</td>
                <td><input type="number" name="hh"></td>
            </tr>
            <tr>
                <td>Input mm</td>
                <td>:</td>
                <td><input type="number" name="mm"></td>
            </tr>
            <tr>
                <td>Input ss</td>
                <td>:</td>
                <td><input type="number" name="ss"></td>
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
        $hh = $_POST['hh'];
        $mm = $_POST['mm'];
        $ss = $_POST['ss'];

        $ss = $ss + 1;

        if($ss >= 60){
            $mm = $mm +1;
            $ss = 00;
        }
        
        if($mm >= 60){
            $hh = $hh +1;
            $mm = 00;
            $ss = 00;
        }

        if($hh >= 24){
            $hh = 00;
            $mm = 00;
            $ss = 00;
        }
        
        echo "Jam : " . $hh . "</br>";
        echo "Menit : " . $mm . "</br>";
        echo "Detik : " . $ss . "</br>";

    }

?>