<!DOCTYPE html>
<html>
<head>
    <title>Angka Satuan, Puluhan, dan Ratusan</title>
</head>
<body>
    <h2>Input Bilangan Bulat</h2>
    <form action="" method="POST">
        Masukkan bilangan bulat: <input type="text" name="bilangan">
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST["bilangan"];

        if (is_numeric($bilangan)) {
            $ = strlen($bilangan);

            if ($length > 0) {
                $satuan = $bilangan[$length - 1];
            } else {
                $satuan = 0;
            }

            if ($length > 1) {
                $puluhan = $bilangan[$length - 2];
            } else {
                $puluhan = 0;
            }

            if ($length > 2) {
                $ratusan = $bilangan[$length - 3];
            } else {
                $ratusan = 0;
            }

            echo "<h2>Hasil:</h2>";
            echo "Angka satuan: $satuan <br>";
            echo "Angka puluhan: $puluhan <br>";
            echo "Angka ratusan: $ratusan <br>";
        } else {
            echo "<h2>Input bukan bilangan bulat!</h2>";
        }
    }
    ?>
</body>
</html>