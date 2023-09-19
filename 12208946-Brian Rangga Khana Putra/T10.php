
<?php

$pabp = 0;
$mtk = 0;
$dpk = 0;
$rata = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 10 (Grade Nilai)</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>PABP</td>
                <td>:</td>
                <td><input type="text" name="pabp"></td>
            </tr>
            <tr>
                <td>MTK</td>
                <td>:</td>
                <td><input type="text" name="mtk"></td>
            </tr>
            <tr>
                <td>DPK</td>
                <td>:</td>
                <td><input type="text" name="dpk"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Input"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $pabp = $_POST['pabp'];
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $rata = ($pabp + $mtk + $dpk) / 3;

    if ($rata <= 100 && $rata >= 80) {
        echo "Grade A";
    } elseif ($rata < 80 && $rata >= 75) {
        echo "Grade B";
    } elseif ($rata < 75 && $rata >= 65) {
        echo "Grade C";
    } elseif ($rata < 65 && $rata >= 45) {
        echo "Grade D";
    } elseif ($rata < 45 && $rata >= 0) {
        echo "Grade E";
    } else {
        echo "Angka Tidak Terdaftar";
    }
}

?>