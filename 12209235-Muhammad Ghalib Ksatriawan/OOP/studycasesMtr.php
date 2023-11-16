<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Bagus Jaya</title>
</head>
<body>

<center>
    <h1>Rental Motor Bagus Jaya</h1>
    <form action="" method="post">
        <div>
        <label for="name">Masukkan  Anda:</label>
        <input type="text" min="0" name="name" id="name" autocomplete="off" require>
        </div>
        <div>
        <label for="time">Lama time Rental(per Hari):</label>
        <input type="number" min="0" name="time" id="time" require>
        </div>
        <div>
        <label for="type">Type Motor:</label>
        <select name="type" require>
            <option hidden disabled selected>Pilih type Motor</option>
            <option value="Cbr">Cbr</option>
            <option value="R15">R15</option>
            <option value="Primavera">Primavera</option>
        </select>
        </div>
        <button type="submit" name="sewa">Sewa Motor</button>
    </form>
</center>

    <?php
    require 'controllerMtr.php';
    $logic = new Penyewaan();
    $logic->setHarga(87000,90000,95000);
    if(isset($_POST['sewa'])) {
        $logic->nama_pengguna = $_POST['name'];
        $logic->lamaSewa = $_POST['time'];
        $logic->typeYangDipilih = $_POST['type'];

        $logic->cetakBukti();

    }
    ?>

</body>
</html>