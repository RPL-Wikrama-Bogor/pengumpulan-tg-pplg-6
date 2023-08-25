<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Juara Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1, h2 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Pencarian Juara Kelas</h1>
    <form method="post" action="">
        <?php
        $subjects = ['MTK', 'INDO', 'INGG', 'DPK', 'Agama'];

        for ($i = 1; $i <= 15; $i++) {
            echo "<h2>Siswa $i</h2>";
            echo "<label for='name_$i'>Nama Siswa: </label>";
            echo "<input type='text' name='name_$i' required>";

            foreach ($subjects as $subject) {
                echo "<label for='$subject'>Nilai $subject: </label>";
                echo "<input type='number' name='$subject' required>";
            }

            echo "<label for='attendance_$i'>Kehadiran (jumlah hari hadir): </label>";
            echo "<input type='number' name='attendance_$i' required>";
        }
        ?>

        <input type="submit" value="Cari Juara">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalStudents = 15;
        $minTotalScore = 475;
        $minAttendance = 100;

        $bestStudent = '';
        $bestAverage = 0;

        for ($i = 1; $i <= $totalStudents; $i++) {
            $totalScore = 0;
            $attendance = $_POST["attendance_$i"];

            foreach ($subjects as $subject) {
                $totalScore += $_POST[$subject];
            }

            $averageScore = $totalScore / count($subjects);

            if ($averageScore >= $minTotalScore && $attendance == $minAttendance) {
                if ($averageScore > $bestAverage) {
                    $bestAverage = $averageScore;
                    $bestStudent = $_POST["name_$i"];
                }
            }
        }

        if (!empty($bestStudent)) {
            echo "<h2>Hasil Pencarian Juara Kelas</h2>";
            echo "<p>Siswa Juara: <strong>$bestStudent</strong></p>";
            echo "<p>Nilai Rata-rata: <strong>$bestAverage</strong></p>";
        } else {
            echo "<h2>Tidak Ada Siswa yang Memenuhi Syarat</h2>";
        }
    }
    ?>
</body>
</html>
