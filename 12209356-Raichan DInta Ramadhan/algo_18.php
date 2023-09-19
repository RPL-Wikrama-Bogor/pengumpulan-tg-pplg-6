<!DOCTYPE html>
<html
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    h3 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    input[type="number"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    h2 {
        font-size: 24px;
        margin-top: 20px;
    }

    p {
        font-size: 16px;
    }
</style>

</head>

    <body>
        <form action="" method="post">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $siswa = array();
                for ($i = 1; $i <= 3; $i++) {
                    echo "<h3>Siswa ke-$i</h3>";
                    $nilaiTotal = 0;
                    for ($j = 1; $j <= 5; $j++) {
                        $mataPelajaran = ['MTK', 'INDO', 'INGG', 'DPK', 'Agama'][$j - 1];
                        echo "$mataPelajaran: <input type='number' name='nilai[$i][$j]' required><br>";
                    }
                    echo "Kehadiran : <input type='number' name='kehadiran[$i]' min='0' max='100' required><br>";
                }
                echo "<br><input type='submit' value='Cari'>";
            } else {
                echo "<p> isi nilai dan kehadiran siswa:</p>";
                echo "<form method='post' action=''>";
                echo "<input type='submit' value='Mulai'>";
            }
            ?>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nilai']) && isset($_POST['kehadiran'])) {
                $siswa = $_POST['nilai'];
                $kehadiran = $_POST['kehadiran'];

                $juara = array();
                foreach ($siswa as $index => $dataSiswa) {
                    $nilaiTotal = array_sum($dataSiswa);
                    if ($nilaiTotal >= 475 && $kehadiran[$index] == 100) {
                        $juara[] = "Siswa ke-$index";
                    }
                }

                if (count($juara) > 0) {
                    echo "<h2>Siswa yang mendapat juara kelas adalah :</h2>";
                    foreach ($juara as $namaSiswa) {
                        echo "<p>$namaSiswa</p>";
                    }
                } else {
                    echo "<h2>Tidak ada siswa yang juara.</h2>";
                }
            }
            ?>
        </form>
    </body>

    </html>