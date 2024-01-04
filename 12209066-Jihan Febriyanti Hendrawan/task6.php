<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Detik</td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
    $jam;
    $menit;
    $detik;
    $hasil;

    if(isset($_POST['submit'])){
        $waktu = $_POST['detik'];

        if($waktu >= 3600){
            $jam = floor($waktu / 3600);
            $waktu = $waktu - ($jam * 3600);
        } else {
            $jam = 0;
        }

        if($waktu >= 60){
            $menit = floor($waktu / 60);
            $waktu = $waktu - ($menit * 60);
        } else {
            $menit = 0;
        }

        $detik = $waktu;
        $hasil = $jam . " jam " . $menit . " menit " . $detik . " detik";
        echo "Waktu yang diinput adalah " . $hasil;
    }
    ?>

</body>
</html>
