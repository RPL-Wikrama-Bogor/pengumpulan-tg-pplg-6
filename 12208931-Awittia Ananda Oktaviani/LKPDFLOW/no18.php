<!DOCTYPE html>
<html>
<head>
    <title>Mencari Rata-rata Nilai Tertinggi</title>
</head>
<body>
<style>
    /* Gaya untuk form input */
    .form-control {
        width: 20%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Gaya untuk tombol */
    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Gaya untuk kartu hasil */
    .card {
        width: 16rem;
        padding: 3rem;
        margin-top: 10px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>

    <?php
    session_start();

    if (!isset($_SESSION['loop'])) {
        $_SESSION['loop'] = 0; 
        $_SESSION['tertinggi'] = null; 
        $_SESSION['juara'] = null;
    }

    if ($_SESSION['loop'] >= 15) {
        session_destroy();
        echo "<p>Anda telah mencapai batas 10 kali input.</p>";
    } else {
        ?>
        <form method="post" action="">
            <label>Nama Siswa:</label><br>
            <input type="text" name="nama" class="form-control">
            <br>
            <label> Matematika:</label><br>
            <input type="number" name="matematika" class="form-control">
            <br>
            <label> Bahasa Indonesia:</label><br>
            <input type="number" name="indonesia" class="form-control">
            <br>
            <label> Bahasa Inggris:</label><br>
            <input type="number" name="inggris" class="form-control">
            <br>
            <label> DPK:</label><br>
            <input type="number" name="dpk" class="form-control">
            <br>
            <label> PABP:</label><br>
            <input type="number" name="agama" class="form-control">
            <br>
            <input type="submit" value="Cari Tertinggi" class="btn btn-primary">
        </form>
      </div>
    </div>
</center>
<div class="card" style="width:23rem; padding:3rem; top: -100px;" name="kotak" >
        <?php

        if(isset($_POST['nama']) && isset($_POST['matematika']) && isset($_POST['indonesia']) && isset($_POST['inggris']) && isset($_POST['dpk']) && isset($_POST['agama'])) {
            $nama = $_POST['nama'];
            $matematika = $_POST['matematika'];
            $indonesia = $_POST['indonesia'];
            $inggris = $_POST['inggris'];
            $dpk = $_POST['dpk'];
            $agama = $_POST['agama'];

         
            $rata = ($matematika + $indonesia + $inggris + $dpk + $agama) / 5;

            if (!isset($_SESSION['tertinggi']) || $rata > $_SESSION['tertinggi']) {
                $_SESSION['tertinggi'] = $rata;
                $_SESSION['juara'] = $nama;
            }

            echo "<p>Rata-rata tertinggi saat ini adalah: {$_SESSION['tertinggi']}</p>";
            echo "<p>Siswa dengan rata-rata tertinggi adalah: {$_SESSION['juara']}</p>";

            $_SESSION['loop']++; 
        }
    }
  
    ?>
    </div>
    
</body>
</html>