<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Motor</title>
   
</head>
<body>
    <form action="" method="post">
        <div style="display: flex;">
        <label for="nama">Masukkan Nama Anda:</label>
        <input type="text" min="0" name="nama" id="nama" autocomplete="off" require>
        </div>
        <div style="display: flex;">
        <label for="waktu">Lama Waktu Rental(per Hari):</label>
        <input type="number" min="0" name="waktu" id="waktu" require>
        </div>
        <div style="display: flex;">
        <label for="jenis">Jenis Motor:</label>
        <select name="jenis" require>
            <option hidden disabled selected>Pilih Jenis Motor</option>
            <option value="Scooter">beat</option>
            <option value="Aerox">Aerox</option>
            <option value="Vario">Vario</option>
        </select>
        </div>
        <button type="submit" name="sewa">Sewa Motor</button>
    </form>

    <?php
    require 'rental.php';
    $logic = new Pembelian();
    $logic->setHarga(75000,80000,82000);
    if(isset($_POST['sewa'])) {
        $logic->nama_pengguna = $_POST['nama'];
        $logic->lamaWaktu = $_POST['waktu'];
        $logic->jenisYangDipilih = $_POST['jenis'];

        $logic->cetakBukti();

    }
    ?>

</body>
</html>