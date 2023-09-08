<!DOCTYPE html>
<html>
<head>
    <title>Mencari Bilangan Terbesar, Terkecil, dan Rata-rata</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar, Terkecil, dan Rata-rata</h1>
    <form method="post">
        <?php
        if (!isset($_POST['submit'])) {
            echo "Masukkan 20 bilangan:<br>";
            for ($i = 1; $i <= 20; $i++) {
                echo "<input type='number' name='numbers[]' required><br>";
            }
            echo "<input type='submit' name='submit' value='Hitung'>";
        } else {
            $numbers = $_POST['numbers'];
            $total = 0;
            $min = $numbers[0];
            $max = $numbers[0];

            foreach ($numbers as $number) {
                $total += $number;
                if ($number < $min) {
                    $min = $number;
                }
                if ($number > $max) {
                    $max = $number;
                }
            }

            $average = $total / count($numbers);

            echo "Bilangan Terbesar: $max";
            echo "Bilangan Terkecil: $min";
            echo "Rata-rata: $average";
        }
        ?>
    </form>
</body>
</html>