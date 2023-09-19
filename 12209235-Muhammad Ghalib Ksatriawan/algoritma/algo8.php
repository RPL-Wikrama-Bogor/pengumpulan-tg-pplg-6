<!DOCTYPE html>
<html>
<head>
    <title>Analisis Bilangan Bulat</title>
</head>
<body>
    <h2>Analisis Bilangan Bulat</h2>
    <form method="post" action="">
        <label for="bilangan">Masukkan Bilangan Bulat:</label>
        <input type="number" name="bilangan" id="bilangan" required min="0" max="999"><br><br>
        
        <input type="submit" value="Analisis">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST["bilangan"];
        // floor berfungsi untuk membulatkan bilangan kebawah 
        // Mendapatkan angka satuan, puluhan, dan ratusan
        $satuan = $bilangan % 10;
        $puluhan = floor(($bilangan % 100) / 10);
        $ratusan = floor($bilangan / 100);
    ?>
    <h3>Hasil Analisis untuk Bilangan <?php echo $bilangan; ?></h3>
    <p>Angka Satuan: <?php echo $satuan; ?></p>
    <p>Angka Puluhan: <?php echo $puluhan; ?></p>
    <p>Angka Ratusan: <?php echo $ratusan; ?></p>
    
    <?php
    }
    ?>
</body>
</html>
