<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Pencarian Juara Kelas</h2>
    <form method="post" action="">
        <label for="nama">Nama Siswa: </label>
        <input type="text" name="nama" required><br><br>

        <label for="mtk">Nilai MTK: </label>
        <input type="number" name="mtk" required><br><br>

        <label for="indo">Nilai INDO: </label>
        <input type="number" name="indo" required><br><br>

        <label for="ingg">Nilai INGGRIS: </label>
        <input type="number" name="ingg" required><br><br>

        <label for="dpk">Nilai DPK: </label>
        <input type="number" name="dpk" required><br><br>

        <label for="agama">Nilai PABP: </label>
        <input type="number" name="agama" required><br><br>

        <label for="kehadiran">Kehadiran (dalam persen): </label>
        <input type="number" name="kehadiran" required><br><br>

        <input type="submit" name="submit" value="Cari Juara">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $mtk = intval($_POST['mtk']);
        $indo = intval($_POST['indo']);
        $ingg = intval($_POST['ingg']);
        $dpk = intval($_POST['dpk']);
        $agama = intval($_POST['agama']);
        $kehadiran = intval($_POST['kehadiran']);

        $total_nilai = $mtk + $indo + $ingg + $dpk + $agama;
        $nilai_rata_rata = $total_nilai / 5;

        if ($nilai_rata_rata >= 95 && $kehadiran == 100) {
            echo "<p>Selamat kepada $nama, Anda adalah juara kelas!</p>";
        } else {
            echo "<p>Maaf, $nama belum memenuhi syarat menjadi juara kelas.</p>";
        }
    }
    ?>
</body>
</html>
