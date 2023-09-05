<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            background-image: blue;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="number"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
    <div class="container">
    <h2>Pencarian Juara Kelas</h2>
        <form method="post" action="">
            <table>
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
            </table>
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