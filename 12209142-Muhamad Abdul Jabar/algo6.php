<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 6</title>
</head>
<body>
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
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>
<?php 
        if(isset($_POST['submit'])){

            $waktu = $_POST['waktu'];
        
                $jam = floor($waktu/3600);
                $waktu = $waktu - ($jam * 3600);
                $jam = $jam ;
        
                $menit = floor($waktu/ 60 );
                $waktu = $waktu - ($menit * 60);
                $menit = $menit ;
        
                $detik = $waktu;
                $detik = $detik ;
        
            if($jam > 0) echo $jam . " jam ";
            if($menit > 0) echo $menit . " menit ";
            if($detik > 0 ) echo $detik . " detik ";
    }
?>
</body>
</html>