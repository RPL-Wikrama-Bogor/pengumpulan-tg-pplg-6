<!DOCTYPE html>
<html>
<head>
    <title>Pemrosesan Bilangan</title>
</head>
<body>
    <h2>Input Bilangan Bulat</h2>
    <form method="post" action="">
        Masukkan bilangan bulat: <input type="number" name="bilangan">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];

        // Memastikan input hanya berisi angka
        if (ctype_digit($bilangan)) {
            // Memastikan panjang input tidak melebihi 6 digit
            if (strlen($bilangan) <= 6) {
                // Mengambil angka satuan, puluhan, dan ratusan
                $satuan = (int) substr($bilangan, -1);
                $puluhan = (int) substr($bilangan, -2, 1);
                $ratusan = (int) substr($bilangan, -3, 1);

                echo "<h2>Output:</h2>";
                echo "Angka satuan: $satuan<br>";
                echo "Angka puluhan: $puluhan<br>";
                echo "Angka ratusan: $ratusan";
            } else {
                echo "<p>Input terlalu panjang. Masukkan bilangan dengan maksimal 6 digit.</p>";
            }
        } else {
            echo "<p>Masukkan hanya angka bulat.</p>";
        }
    }
    ?>
</body>
</html>