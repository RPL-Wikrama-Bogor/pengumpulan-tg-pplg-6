<?php
    $bilangan_pertama;
    $bilangan_kedua;
    $bilangan_ketiga;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari bilangan terbesar</title>
</head>
<body>
    <h1>Mencari bilangan terbesar</h1>
    <form action="" method="post">
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
                <td>Bilangan Ketiga</td>
                <td></td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $bilangan_pertama = $_POST['bil_satu'];
            $bilangan_kedua = $_POST['bil_dua'];
            $bilangan_ketiga = $_POST['bil_tiga'];

            //proses
            if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga){
                echo $bilangan_pertama . " Bilangan Terbesar";
            }

            else if ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga){
                echo $bilangan_kedua . " Bilangan Terbesar";
            }

            else if ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua){
                echo $bilangan_ketiga . " Bilangan Terbesar";
            }
 
            else if ($bilangan_pertama == $bilangan_kedua && $bilangan_pertama == $bilangan_ketiga){
                echo "Sama Besar";
            }
            else if ($bilangan_pertama == $bilangan_kedua){
                echo "Bilangan Pertama dan Bilangan Kedua Sama Besar, dan Bilangan Terbesar adalah ". $bilangan_pertama;
            }
            else if ($bilangan_kedua == $bilangan_ketiga){
                echo "Bilangan Kedua dan Bilangan Ketiga Sama Besar, dan Bilangan Terbesar adalah ". $bilangan_kedua;
            }
            else if ($bilangan_ketiga == $bilangan_pertama){
                echo "Bilangan Ketiga dan Bilangan Pertama Sama Besar, dan Bilangan Terbesar adalah ". $bilangan_ketiga;
            }
            else {
                echo "Sama Besar!";
            }
        }

    ?>

</body>
</html>