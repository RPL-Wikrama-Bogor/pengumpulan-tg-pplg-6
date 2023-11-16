<?php
    $waktu;
    $jam;
    $menit;
    $detik;
    $hasil;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengubah total detik menjadi jam-menit-detik</title>
</head>
<body>
    <h1>Mengubah total detik menjadi jam-menit-detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Waktu</td>
                <td></td>
                <td><input type="number" name="waktu"></td>
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
            $waktu = $_POST['waktu'];

            if ($waktu > 3600){
                $jam = floor ($waktu / 3600);
                $waktu = floor ($waktu - ($jam * 3600));
                $hasil = $jam; 
            }
            else if($waktu > 60){
                $menit = floor ($waktu / 60);
                $waktu = floor ($waktu - ($menit * 60));
                $hasil = $menit;
            }
            else{
                $detik = $waktu;
                $hasil = $detik;
            }

            echo $hasil;
        }

    ?>

</body>
</html>