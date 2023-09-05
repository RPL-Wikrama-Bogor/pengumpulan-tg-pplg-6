<!DOCTYPE html>
<html>
<head>
    <title>Cari Juara Kelas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
       *{
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(-135deg, pink, salmon);
            
        }
        .wrapper{
            width: 400px;
            max-width:100%;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 0 auto;
        }
        .wrapper .input-data{
            height: 40px;
            width: 100%;    
            position: relative;
        }
        .wrapper .input-data input{
            height: 100%;
            width: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid silver;
        }
        .wrapper .input-data label{
            position: absolute;
            bottom: 10px;
            left: 0;
            color: grey;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .input-data input:focus ~ label,
        .input-data input:valid ~ label{
            transform: translateY(-20px);
            font-size: 15px;
            color: #4158d0;
        }
        .wrapper .input-data .underline{
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
            background: pink;
        }
        .input-data .underline:before{
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            background: #4158d0;
            transform: scaleX(0);
            transition: transform 0.3 ease;
        }
        .input-data input:focus ~ .underline:before,
        .input-data input:valid ~ .underline:before{
            transform: scaleX(1);
        }
</style>
<body>
<form action="" method="post">
    <div class="wrapper">
        </form>
            <div class="text">
                <center><h1 style="color: salmon;">Mencari Juara Kelas</h1></center>
            </div>
            <br>
            <div class="input-data">
                <input type="text" name="nama" required>
                <div class="underline">
                </div>
                <label>Nama Siswa</label>
            </div>
            <br>
            <div class="input-data">
                <input type="number" name="mtk" required>
                <div class="underline">
                </div>
                <label>Nilai Matematika</label>
            </div>
            <br>
            <div class="input-data">
                <input type="number" name="indo" required>
                <div class="underline">
                </div>
                <label>Bahasa Indonesia</label>
            </div>
            <div class="input-data">
                <input type="number" name="ingg" required>
                <div class="underline">
                </div>
                <label>Bahasa Inggris</label>
            </div>
            <div class="input-data">
                <input type="number" name="dpk" required>
                <div class="underline">
                </div>
                <label>DPK</label>
            </div>
                    <div class="input-data">
                <input type="number" name="agama" required>
                <div class="underline">
                </div>
                <label>Agama</label>
            </div>
            <div class="input-data">
                <input type="number" name="kehadiran" required>
                <div class="underline">
                </div>
                <label>Kehadiran (100%)</label>
            </div>
            <table>
                <tr>
                    <td><input type="submit" value="Cari juara kelas" name="submit" style="padding:5px; "></td><br>
                </tr>
            </table>
        </form>
        <br>
        <?php
        if(isset($_POST['submit'])){
            $mtk = $_POST['mtk'];
            $indo = $_POST['indo'];
            $ingg = $_POST['ingg'];
            $dpk = $_POST['dpk'];
            $agama = $_POST['agama'];
            $kehadiran = $_POST['kehadiran'];

            // Menghitung nilai rata-rata dari 5 mata pelajaran
            $rata_rata = ($mtk + $indo + $ingg + $dpk + $agama);

            // Mengecek jika nilai rata-rata >= 475 dan kehadiran = 100%
            if($rata_rata >= 475 && $kehadiran == 100){
                echo "<p style='color:green;'>Selamat, " . $_POST['nama'] . " adalah juara kelas!</p>";
            } else {
                echo "<p style='color:red;'>Maaf, " . $_POST['nama'] . " belum memenuhi persyaratan juara kelas.</p>";
            }
        }
        ?>
    </div>
</body>
</html>