<!DOCTYPE html>
<html>

<head>
    <title>Cari Juara Kelas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h2 {
        color: #333;
    }

    form {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 0 auto;
        max-width: 400px;
    }

    label {
        display: block;
        text-align: left;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    p.green {
        color: green;
    }

    p.red {
        color: red;
    }
</style>

<body>
    <h2>Cari Juara Kelas</h2>
    <form method="post" action="">
        <label for="nama">Nama Siswa:</label>
        <input style=" width: 35vh;" type="text" id="nama" name="nama" required><br><br>

        <label for="mtk">Nilai Matematika:</label>
        <input style=" width: 35vh;" type="number" id="mtk" name="mtk" required><br><br>

        <label for="indo">Nilai Bahasa Indonesia:</label>
        <input style=" width: 35vh;" type="number" id="indo" name="indo" required><br><br>

        <label for="ingg">Nilai Bahasa Inggris:</label>
        <input style=" width: 35vh;" type="number" id="ingg" name="ingg" required><br><br>

        <label for="dpk">Nilai DPK:</label>
        <input style=" width: 35vh;" type="number" id="dpk" name="dpk" required><br><br>

        <label for="agama">Nilai Agama:</label>
        <input style=" width: 35vh;" type="number" id="agama" name="agama" required><br><br>

        <label for="kehadiran">Kehadiran (100%):</label>
        <input style=" width: 35vh;" type="number" id="kehadiran" name="kehadiran" required><br><br>

        <input type="submit" name="submit" value="Cari Juara Kelas">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $mtk = $_POST['mtk'];
        $indo = $_POST['indo'];
        $ingg = $_POST['ingg'];
        $dpk = $_POST['dpk'];
        $agama = $_POST['agama'];
        $kehadiran = $_POST['kehadiran'];

        // Menghitung nilai rata-rata dari 5 mata pelajaran
        $rata_rata = ($mtk + $indo + $ingg + $dpk + $agama);

        // Mengecek jika nilai rata-rata >= 475 dan kehadiran = 100%
        if ($rata_rata >= 475 && $kehadiran == 100) {
            echo "<p style='color:green;'>Selamat, " . $_POST['nama'] . " adalah juara kelas!</p>";
        } else {
            echo "<p style='color:red;'>Maaf, " . $_POST['nama'] . " belum memenuhi persyaratan juara kelas.</p>";
        }
    }
    ?>
</body>

</html>