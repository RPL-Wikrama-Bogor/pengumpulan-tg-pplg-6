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
    <title>Mencari Bilangan Terbesar</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td>:</td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td>:</td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php

        if (isset($_POST['submit'])) {
            $bilangan_pertama = $_POST['bil_satu'];
            $bilangan_kedua = $_POST['bil_dua'];
            $bilangan_ketiga = $_POST['bil_tiga'];

            if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
                echo "Bilangan terbesar adalah " . $bilangan_pertama;
            } elseif ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
                echo "Bilangan terbesar adalah " . $bilangan_kedua;
            } elseif ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
                echo "Bilangan terbesar adalah " . $bilangan_ketiga;
            } else {
                if ($bilangan_pertama == $bilangan_kedua) {
                    if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
                        echo "Bilangan terbesar adalah " . $bilangan_pertama . " dan bilangan pertama sama dengan bilangan kedua";
                    } elseif ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
                        echo "Bilangan terbesar adalah " . $bilangan_kedua . " dan bilangan pertama sama dengan bilangan kedua";
                    }
                } elseif ($bilangan_kedua == $bilangan_ketiga) {
                    if ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
                        echo "Bilangan terbesar adalah " . $bilangan_kedua . " dan bilangan kedua sama dengan bilangan ketiga";
                    } elseif ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
                        echo "Bilangan terbesar adalah " . $bilangan_ketiga . " dan bilangan kedua sama dengan bilangan ketiga";
                    }
                } elseif ($bilangan_ketiga == $bilangan_pertama) {
                    if ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
                        echo "Bilangan terbesar adalah " . $bilangan_ketiga . " dan bilangan ketiga sama dengan bilangan pertama";
                    } elseif ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
                        echo "Bilangan terbesar adalah " . $bilangan_pertama . " dan bilangan ketiga sama dengan bilangan pertama";
                    }
                } else {
                    echo "sama besar";
                }
            }
        }

    ?>

</body>
</html>