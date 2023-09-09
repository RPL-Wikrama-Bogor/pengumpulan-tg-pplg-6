<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juara Kelas</title>
</head>
<body>
    <div class="container">
    <form method="post" action="">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<h3>Data Siswa ke-$i</h3>";
            echo "Nilai MTK: <input type='number' name='nilaiMTK[]' required><br>";
            echo "Nilai INDO: <input type='number' name='nilaiIndo[]' required><br>";
            echo "Nilai INGG: <input type='number' name='nilaiIngg[]' required><br>";
            echo "Nilai DPK: <input type='number' name='nilaiDpk[]' required><br>";
            echo "Nilai Agama: <input type='number' name='nilaiAgama[]' required><br>";
            echo "Kehadiran (%): <input type='number' name='kehadiran[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Cari Juara Kelas">
    </form>
    </div>
</body>
</html>

        <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nilaiMTK = $_POST['nilaiMTK'];
            $nilaiIndo = $_POST['nilaiIndo'];
            $nilaiIngg = $_POST['nilaiIngg'];
            $nilaiDpk = $_POST['nilaiDpk'];
            $nilaiAgama = $_POST['nilaiAgama'];
            $kehadiran = $_POST['kehadiran'];
        
            $juara = [];
            for ($i = 0; $i < count($nilaiMTK); $i++) {
                $totalNilai = $nilaiMTK[$i] + $nilaiIndo[$i] + $nilaiIngg[$i] + $nilaiDpk[$i] + $nilaiAgama[$i];
                $rataRata = $totalNilai / 5;
        
                if ($rataRata >= 95 && $kehadiran[$i] >= 100) {
                    $juara[] = "Siswa ke-" . ($i + 1);
                }
            }
        
            if (count($juara) > 0) {
                echo "Siswa yang menjadi juara kelas:<br>";
                foreach ($juara as $siswa) {
                    echo "$siswa<br>";
                }
            } else {
                echo "Tidak ada siswa yang memenuhi syarat juara kelas.";
            }
        }
            ?>