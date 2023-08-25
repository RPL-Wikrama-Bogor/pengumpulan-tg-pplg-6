<!DOCTYPE html>
<html>
<head>
    <title>Konversi Jam-Menit-Detik ke Total Detik</title>
</head>
<body>
    <h2>Konversi Jam-Menit-Detik ke Total Detik</h2>
    <form method="post" action="">
        Jam: <input type="number" name="jam" min="0" max="24"><br>
        Menit: <input type="number" name="menit" min="0" max="59"><br>
        Detik: <input type="number" name="detik" min="0" max="59"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $jam = ($_POST['jam']);
        $menit = ($_POST['menit']) ;
        $detik = ($_POST['detik']) ;

        $totalDetik = $jam * 3600 + $menit * 60 + $detik;

        echo "<h2>Output:</h2>";
        echo "Total Detik: $totalDetik detik";
    }
    ?>
</body>
</html>