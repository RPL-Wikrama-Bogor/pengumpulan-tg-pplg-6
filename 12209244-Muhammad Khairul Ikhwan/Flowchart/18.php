<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .result h3 {
            color: #333;
        }

        .result strong {
            color: green;
        }
    </style>

<h2>Mencari Juara Kelas</h2>

<form method="post" action="">
    <label for="nama">Nama Siswa:</label>
    <input type="text" name="nama"><br><br>
    
    <label for="mtk">Nilai Matematika:</label>
    <input type="number" name="mtk"><br>
    
    <label for="indo">Nilai Bahasa Indonesia:</label>
    <input type="number" name="indo"><br>
    
    <label for="ingg">Nilai Bahasa Inggris:</label>
    <input type="number" name="ingg"><br>
    
    <label for="dpk">Nilai Desain Pemrograman:</label>
    <input type="number" name="dpk"><br>
    
    <label for="agama">Nilai Agama:</label>
    <input type="number" name="agama"><br><br>
    
    <label for="kehadiran">Kehadiran (%):</label>
    <input type="number" name="kehadiran"><br><br>
    
    <input type="submit" value="Cari Juara">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $ingg = $_POST['ingg'];
    $dpk = $_POST['dpk'];
    $agama = $_POST['agama'];
    $kehadiran = $_POST['kehadiran'];

    $totalNilai = $mtk + $indo + $ingg + $dpk + $agama;
    
    if ($kehadiran == 100 && $totalNilai >= 475) {
        echo "<h3>Hasil Pencarian Juara Kelas:</h3>";
        echo "Nama Siswa: " . $_POST['nama'] . "<br>";
        echo "Total Nilai: " . $totalNilai . "<br>";
        echo "Kehadiran: " . $kehadiran . "%<br>";
        echo "<strong>Siswa ini menjadi Juara Kelas!</strong>";
    } else {
        echo "<h3>Hasil Pencarian Juara Kelas:</h3>";
        echo "Nama Siswa: " . $_POST['nama'] . "<br>";
        echo "Total Nilai: " . $totalNilai . "<br>";
        echo "Kehadiran: " . $kehadiran . "%<br>";
        echo "Maaf, siswa ini tidak memenuhi kriteria juara kelas.";
    }
}
?>

</body>
</html>