<?php
$bil_satu;
$bil_dua;
$bil_tiga;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bilangan Terbesar</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan pertama</td>
                <td>:</td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan kedua</td>
                <td>:</td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td>Silahkan Klik</td>
                <td>:</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>     
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $bil_satu = $_POST ['bil_satu'];
    $bil_dua = $_POST ['bil_dua'];
    $bil_tiga = $_POST ['bil_tiga'];

    if ($bil_satu > $bil_dua && $bil_satu > $bil_tiga) {
        echo $bil_satu;
    }elseif($bil_dua > $bil_satu && $bil_dua > $bil_tiga){
        echo $bil_dua;
    }elseif($bil_tiga > $bil_satu && $bil_tiga > $bil_dua ){
        echo $bil_tiga;
    }elseif($bil_satu == $bil_dua && $bil_satu > $bil_tiga){
        echo "Bilangan 1 dan 2 sama besar";
    }elseif($bil_satu == $bil_tiga && $bil_satu > $bil_dua){
        echo "Bilangan 1 dan 3 sama besar";
    }elseif($bil_dua == $bil_tiga && $bil_dua > $bil_satu){
        echo "Bilangan 2 dan 3 sama besar";
    }
    else {
        echo "sama besar";
    }  
}