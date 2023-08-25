<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Kehadiran</label> 
        <input type="number" name="kehadiran"><br><br>

        <label for="">Nilai MTK</label>
        <input type="number" name="mtk"><br><br>

        <label for="">Nilai Indonesia</label>
        <input type="number" name="indo"><br><br>

        <label for="">Nilai B.Inggis</label>
        <input type="number" name="ing"><br><br>

        <label for="">Nilai DPK</label>
        <input type="number" name="dpk"><br><br>

        <label for="">Nilai Agama</label>
        <input type="number" name="agama"><br><br>

        <label for="">Nama</label>
        <input type="text" name="nama"><br><br>

        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $kehadiran = $_POST["kehadiran"];
        $mtk = $_POST["mtk"];
        $indo = $_POST["indo"];
        $ing = $_POST["ing"];
        $dpk = $_POST["dpk"];
        $agama = $_POST["agama"];
        $nama = $_POST["nama"];

        $rataRataNilai = ($mtk + $indo + $ing + $dpk + $agama);
        echo $nama;
        echo "<br>";

        if ($rataRataNilai >= 475 && $kehadiran == 100) {
        echo "Selamat! Anda adalah juara kelas.";
        echo "<br>";
        } else {
        echo "Maaf, Anda belum memenuhi syarat untuk menjadi juara kelas.";
        echo "<br>";
        }

        echo "Rata-rata Nilai: " . $rataRataNilai;
        echo "<br>";
        echo "Kehadiran: " . $kehadiran . "%";

    }
    ?>
</body>
</html>