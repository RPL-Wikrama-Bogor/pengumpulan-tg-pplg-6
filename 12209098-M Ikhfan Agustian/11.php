<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: gray;
            font-family: 'Poppins', sans-serif;
            color: white;
        }


        .box {
            background-color: white;
            width: 500px;
            padding: 20px 20px 100px 20px;
            border-radius: 15px;
            margin-bottom: 50px;
        }

        .btn{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<center>
    <form method="post" action="">
        <div class="box">
            <h1 style="color: black;">Pegawai</h1>

            <label for="kodepegawai" style="color: black;">Nomor Pegawai:</label>

            <input type="number" name="no_pegawai" placeholder="gddmmyyyynn" class="kode" />

            <br> <!-- Tambahkan baris baru di sini -->

            <input type="submit" name="submit" value="Submit" class="btn">
        </div> <!-- End Box -->
    </form>



    <?php
    if(isset($_POST['submit'])){
        $no_pegawai = $_POST['no_pegawai'];
        // $nama = $_POST['nama'];

        if($no_pegawai > 11 && $no_pegawai < 11){
            echo "Error cuy";
        }

        $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $tahun = substr($no_pegawai, 5, 4);
        $no_urutan = substr($no_pegawai, 9, 2);

        if ($bulan == 1) {
            $bulan = "Januari";
        } else if ($bulan == 2) {
            $bulan = "Februari";
        } else if ($bulan == 3) {
            $bulan = "Maret";
        } else if ($bulan == 4) {
            $bulan = "April";
        } else if ($bulan == 5) {
            $bulan = "Mei";
        } else if ($bulan == 6) {
            $bulan = "Juni";
        } else if ($bulan == 7) {
            $bulan = "Juli";
        } else if ($bulan == 8) {
            $bulan = "Agustus";
        } else if ($bulan == 9) {
            $bulan = "September";
        } else if ($bulan == 10) {
            $bulan = "Oktober";
        } else if ($bulan == 11) {
            $bulan = "November";
        } else if ($bulan == 12) {
            $bulan = "Desember";
        }

        $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
        
        // echo "Nama Pegawai: " . $nama . "<br>";
        echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
        echo "No golongan: " . $no_golongan . "<br>";
        echo "No urutan: " . $no_urutan . "<br>";



    }
    ?>
    </center>
</body>
</html>