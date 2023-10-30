<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="waktu-box">
<form action="" method="post">
        <table>
        <div class="user-box">
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="hh" id="hh"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mm" id="mm"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="ss" id="ss"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </div>
        </table>
        </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $hh = $_POST['hh'];
    $mm = $_POST['mm'];
    $ss = $_POST['ss'];

    $ss = $ss + 1;

    if($ss >= 60){
        $mm = $mm + 1;
        $ss = 00;
    }

    if($mm >= 60){
        $hh = $hh + 1;
        $mm = 0;
        $ss = 0;
    }

    if($hh >= 24){
        $hh = 00;
        $mm = 00;
        $ss = 00;
    }

    echo "Jam :" .$hh;
    echo "<br/>";
    echo "Menit :" .$mm;
    echo "<br/>";
    echo "Detik :" .$ss;
    echo "<br/>";

}
?>