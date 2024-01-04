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
    <title>Mengkonversi jam-ment-det</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="number" name="wkt"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form><br>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $waktu = $_POST['wkt'];

        if ($waktu > 3600){
            $jam = floor($waktu / 3600);
            $waktu = $waktu - ($jam*3600);
            $hasil = $jam . "jam";
        }elseif($waktu > 60){
            $menit = floor($waktu / 60);
            $waktu = $waktu - ($menit*60);
            $hasil = $menit . "menit";
        }else {
            $detik = $waktu;
            $hasil = $detik . "detik";
            
          }
          echo "Waktu yang diinput adalah " . $hasil ;
        
    }