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
                <td><label for="">MTK</label></td>
                <td><input type="number" name="mtk" maxlength="2"></td>
            </tr>
            <tr>
                <td><label for="">PABP</label></td>
                <td><input type="number" name="pabp" maxlength="2"></td>
            </tr>
            <tr>
                <td><label for="">DPK</label></td>
                <td><input type="number" name="dpk" maxlength="2"></td>
            </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>

    <br>

    <?php
if(isset($_POST['submit'])){

    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $pabp = $_POST['pabp'];

    $avg = ($pabp + $dpk + $mtk) / 3;

    echo "Nilai Rata rata Kamu: " . round($avg) . "<br>";

    if($avg <= 100 && $avg >= 80){
        echo "Nilai kamu A!";
    } else if($avg <= 80 && $avg >= 75){
        echo "Nilai kamu B!";
    } else if($avg <= 75 && $avg >= 65){
        echo "Nilai kamu C!";
    } else if($avg <= 65 && $avg >= 45){
        echo "Nilai kamu D!";
    } else if($avg <= 45 && $avg >= 0){
        echo "Nilai kamu E!";
    } else{
        echo "Angka tidak memenuhi persayaratan";
    }

}
    ?>
</body>
</html>