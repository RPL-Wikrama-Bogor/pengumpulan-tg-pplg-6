<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#64CCC5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            
        }

        h2, h3 {
            text-align: center;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            text-align: start;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #1450A3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>



<form method="post" action="">
<h2>Pencarian Juara Kelas</h2>
    <label for="nama">Nama Siswa:</label>
    <input type="text" name="nama" ><br><br>
    
    <label for="mtk">Nilai Matematika:</label>
    <input type="number"  min="1" max="100" name="mtk" ><br>
    
    <label for="indo">Nilai Bahasa Indonesia:</label>
    <input type="number"  min="1" max="100" name="indo"><br>
    
    <label for="ingg">Nilai Bahasa Inggris:</label>
    <input type="number"  min="1" max="100" name="ingg"><br>
    
    <label for="dpk">Nilai Desain Pemrograman:</label>
    <input type="number"  min="1" max="100" name="dpk"><br>
    
    <label for="agama">Nilai Agama:</label>
    <input type="number" min="1" max="100" name="agama"><br><br>
    
    <label for="kehadiran">Kehadiran (%):</label>
    <input type="number" min="1" max="100" name="kehadiran"><br><br>
    
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
        echo "<strong>Siswa, " . $_POST['nama'] ." ini menjadi Juara Kelas!</strong>";
    } else {
        echo "<h3>Hasil Pencarian Juara Kelas:</h3>";
        echo "Nama Siswa: " . $_POST['nama'] . "<br>";
        echo "Total Nilai: " . $totalNilai . "<br>";
        echo "Kehadiran: " . $kehadiran . "%<br>";
        echo "Maaf," . $_POST['nama'] ." siswa ini tidak memenuhi kriteria juara kelas.";
    }
}
?>

</body>
</html>
