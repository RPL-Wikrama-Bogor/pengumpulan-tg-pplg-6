<?php 
    $detik;
    $menit;
    $jam;
    $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5 (J M D ke Detik) </title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="jam" maxlenght="2"></td>
            </tr>
            <tr>
                <td>menit</td>
                <td>:</td>
                <td><input type="number" name="menit" maxlenght="2"></td>
            </tr>
            <tr>
                <td>detik</td>
                <td>:</td>
                <td><input type="number" name="detik" maxlenght="2"></td>
            </tr>
            <tr>
                <td><input type="submit" value="carl" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $detik = $_POST['detik'];
            $menit = $_POST['menit'];
            $jam = $_POST['jam'];

            $jam = $jam * 3600;
            $menit = $menit * 60;
            $total = $jam + $menit + $detik;

            echo "Jumlah Detik : " . $total ;
        }
   
    ?>
</body>
</html>