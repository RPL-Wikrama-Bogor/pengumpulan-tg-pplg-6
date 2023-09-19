<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 19 (Input Juara)</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        text-align: center;
    }

    label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
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
        background-color: #4A7BA9;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 3px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #237BCE;
    }
</style>

<body>
    <form action="" method="post">
        <?php
        session_start();

        $jumlahSiswa = 15;
        $mataPelajaran = array("MTK", "INDO", "INGG", "DPK", "Agama");
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
                // cari juara
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
                    echo "<h2>Selamat, $juara kamu adalah juara kelas!</h2>";
                } else {
                    echo "<h2>Maaf belum ada yang memenuhi syarat.</h2>";
                }
                //reset dan lagi
                session_destroy();
            } else {
                echo "Siswa ke-" . count($_SESSION['siswa']) . " telah di masukan.<br>";
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

</html>