<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nilai PABP</td>
                <td><input type="number" name="pabp"></td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>Nilai DPK</td>
                <td><input type="number" name="dpk"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
     $nilai_pabp;
     $nilai_mtk;
     $nilai_dpk;
     $rata_rata;

    if(isset($_POST['submit'])){
        $nilai_pabp = $_POST['pabp'];
        $nilai_mtk= $_POST['mtk'];
        $nilai_dpk = $_POST['dpk'];
    

    $rata_rata= ($nilai_pabp + $nilai_mtk + $nilai_dpk)/3;

    if($rata_rata<= 100 && $rata_rata>= 80){
        echo "A";
    } else if ($rata_rata<= 80 && $rata_rata>= 75){
        echo "B";
    } else if ($rata_rata<= 75 && $rata_rata>= 65){
        echo "C";
    } else if ($rata_rata<= 65 && $rata_rata>= 45){
        echo "D";
    } else if ($rata_rata<= 45 && $rata_rata>= 0){
        echo "E";
    } else {
        "angka tidak memenuhi syarat";
    }
    }
    ?>

</body>
</html>