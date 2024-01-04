<!DOCTYPE html>
<html lang="en">
<center>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
     body{
        background-color: #FFE5E5;
        /* background-repeat: no-repeat; */
        background-size:cover;
        font-family:  'sans-serif';
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        form {
        background-color: #FFBFBF;
        border-radius: 25px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
         width: 300px;
        }

        label {
        display: block;
        margin-bottom: 15px;
        border-radius: 30px;
        font-weight: bold;

        }
        
        input[type="text"],

        input[type="number"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        input[type="submit"] {
        background-color: #EA1179;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 3px;
        cursor: pointer;
        width: 100%;
        }

        input[type="submit"]:hover {
        background-color: #EA1179;
        }
</style>

<body>
    <form action="" method="post">
        <?php
        session_start();

        $jumlahSiswa = 3;
        $mataPelajaran = array("MTK", "INDO", "INGG", "DPK", "AGAMA");
        $nilaiMinimum = 475;
        $kehadiranMinimum = 100;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $namaSiswa = $_POST['nama'];
            $nilai = array();
            foreach ($mataPelajaran as $mapel) {
                $nilai[$mapel] = floatval($_POST[$mapel]);
            }

            $kehadiran = floatval($_POST['kehadiran']);

            if (!isset($_SESSION['siswa'])) {
                $_SESSION['siswa'] = array();
            }

            $_SESSION['siswa'][] = array('nama' => $namaSiswa, 'nilai' => $nilai, 'kehadiran' => $kehadiran);

            if (count($_SESSION['siswa']) == $jumlahSiswa) {
                
                $juara = null;

                foreach ($_SESSION['siswa'] as $siswa) {
                    $totalNilai = array_sum($siswa['nilai']);
                    $totalKehadiran = $siswa['kehadiran'];

                    if ($totalNilai >= $nilaiMinimum && $totalKehadiran == $kehadiranMinimum) {
                        $juara = $siswa['nama'];
                        break;
                    }
                }

                if ($juara) {
                    echo "<h2>Selamat, $juara adalah juara kelas!</h2>";
                } else {
                    echo "<h2>Maaf, belum memenuhi syarat.</h2>";
                }
    
                session_destroy();
            } else {
                echo "Siswa ke-" . count($_SESSION['siswa']) . " telah di input.<br>";
            }
        }
        ?>

        <?php if (!isset($_SESSION['siswa']) || count($_SESSION['siswa']) < $jumlahSiswa) : ?>
            <label for="nama">Nama Siswa:</label>
            <input type="text" name="nama" required><br>

            <?php foreach ($mataPelajaran as $mapel) : ?>
                <label for="<?php echo $mapel; ?>"><?php echo $mapel; ?>:</label>
                <input type="number" name="<?php echo $mapel; ?>" required><br>
            <?php endforeach; ?>

            <label for="kehadiran">Kehadiran :</label>
            <input type="number" name="kehadiran" min="0" max="100" required><br>

            <input type="submit" value="Masukkan Siswa">
        <?php endif; ?>
    </form>
</body>
</center>
</html>