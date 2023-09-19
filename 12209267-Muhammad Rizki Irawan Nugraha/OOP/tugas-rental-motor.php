<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-studi-rental</title>
    <style>
          body {
            font-family: 'Raleway', sans-serif;
            
                   text-align: center;
                             background-color:#EADBC8;
                                        font-size: 10px;
                                                font-family: cursive;
}
        form{
            max-width: 400px;
            margin: 30px auto;
            padding:20px;
            border: 2px solid black;
       
        }
    </style>
  
   
</head>
<body>
    <form action="" method="post">
        <h1 style="text-align: center"  ; >Rental Motor</h1>
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
            <option value="Mio">Mio</option>
            <option value="Supra">Supra</option>
            <option value="Vario">Vario</option>
            <option value="Nmax">Nmax</option>
        </select>
        </div>
        <button type="submit" name="sewa">Sewa Motor</button>
    </form>

    <?php
    require 'controller-tugas.php';
    $logic = new Pembelian();
    $logic->setHarga(100000,85000,90000);
    if(isset($_POST['sewa'])) {
        $logic->nama_pengguna = $_POST['nama'];
        $logic->lamaWaktu = $_POST['waktu'];
        $logic->jenisYangDipilih = $_POST['jenis'];

        $logic->cetakBukti();

    }
    ?>

</body>
</html>