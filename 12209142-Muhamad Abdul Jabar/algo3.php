<?php
    $satu;
    $dua;
    $tiga;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 3</title>
</head>
<body>
    <form action="" method="post" >
    <table>
        <tr>
            <td>Bilangan Pertama</td>
            <td></td>
            <td><input type="number" name="bil_satu"></td>
        </tr>
        <tr>
            <td>Bilangan Kedua</td>
            <td></td>
            <td><input type="number" name="bil_dua"></td>
        </tr>
        <tr>
            <td>Bilangan Ketigaa</td>
            <td></td>
            <td><input type="number" name="bil_tiga"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="cari" name="submit"></td>
        </tr>
        </form>
</table>
<?php

    if(isset($_POST['submit'])){
        $satu = $_POST['bil_satu'];
        $dua = $_POST['bil_dua'];
        $tiga = $_POST['bil_tiga'];

        if ($satu > $dua && $satu > $tiga) {
            echo $satu;
        }
        elseif ($dua > $satu && $dua > $tiga) {
            echo $dua;
        }
        elseif ($tiga > $satu && $tiga > $dua) {
            echo $tiga;
        }
        elseif ($satu == $dua && $satu > $tiga){
            echo "Bilangan 1 dan 2 Sama Besar";
        }
        elseif ($satu == $tiga && $satu > $dua){
            echo "Bilangan 1 dan 3 Sama Besar";
        }
        elseif ($dua == $tiga && $dua > $satu){
            echo "Bilangan 2 dan 3 Sama Besar";
        }
        else {
            echo "Sama Besar";
        }
    }
?>
    
</body>
</html>

