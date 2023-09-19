<!DOCTYPE html>
<html>
<head>
    <title>Mencetak Bilangan Genap 1 sampai 50</title>
</head>
<body>

<h2>Mencetak Bilangan Genap 1 sampai 50</h2>

<?php
for ($angka = 1; $angka <= 50; $angka++) {
    if ($angka % 2 == 0) {
        echo $angka . " = Angka Genap <br>";
    }else {
        echo $angka . " = Angka Gajil <br>";
    }
}
?>

</body>
</html>
