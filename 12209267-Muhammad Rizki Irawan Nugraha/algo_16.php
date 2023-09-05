<!DOCTYPE html>
<html>
<head>
    <title>Mencetak Bilangan Ganjil dan Genap 1 sampai 50</title>
</head>
<body>

<h2>Mencetak Bilangan Ganjil dan Genap 1 sampai 50</h2>

<?php
for ($angka = 1; $angka <= 50; $angka++) {
    echo "Bilangan Ganjil: " . $angka . "<br>";

    $angka++;

    if ($angka <= 50) {
        echo "Bilangan Genap: " . $angka . "<br>";
    }
}
?>

</body>
</html>