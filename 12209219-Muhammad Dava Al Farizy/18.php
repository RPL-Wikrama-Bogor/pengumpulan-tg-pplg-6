<!DOCTYPE html>
<y lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h3 {
            background-color: #4287f5;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        form {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }

        input[type="number"] {
            width: 60px;
        }

        input[type="submit"] {
            background-color: #4287f5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2553a5;
        }

        h2 {
            color: #4287f5;
        }

        p {
            margin: 5px 0;
        }
    </style>

    <body>
        <form action="" method="post">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $siswa = array();
                for ($i = 1; $i <= 15; $i++) {
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