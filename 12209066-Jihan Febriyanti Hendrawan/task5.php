<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam-Menit-Detik ke Detik</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td><input type="number" name="j"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td><input type="number" name="m"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td><input type="number" name="d"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
           $jam=$_POST['j'];
           $menit=$_POST['m'];
           $detik=$_POST['d'];

           $jam= $jam * 3600;
           $menit= $menit * 60;
           $total= $jam + $menit + $detik;

           echo "Total Detik :". $total . "</br>";
   
        }
    ?>
    
    </body>
    </html>