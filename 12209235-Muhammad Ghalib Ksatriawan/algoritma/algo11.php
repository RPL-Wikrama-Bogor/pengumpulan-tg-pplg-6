<!DOCTYPE html>
<html>
<head>
    <title>Form Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <h1>Form Pegawai</h1>
        <form action="" method="post">
            <label for="pegawai_number">Masukkan nomor pegawai (11 digit):</label>
            <input type="text" id="pegawai_number" name="pegawai_number" maxlength="11" required>
            <button type="submit">Submit</button>
        </form>
        <div class="result">
        <center>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $pegawaiNumber = $_POST["pegawai_number"];

                if (strlen($pegawaiNumber) == 11) {
                    $golongan = $pegawaiNumber[0];
                    $tanggal = substr($pegawaiNumber, 1, 2);
                    $bulan = substr($pegawaiNumber, 3, 2);
                    $tahun = substr($pegawaiNumber, 5, 4);
                    $nomorUrut = substr($pegawaiNumber, 9, 2);

                    // Konversi kode bulan menjadi nama bulan
                    $bulanArray = ["", "JAN", "FEB", "MAR", "APR", "MEI", "JUN", "JUL", "AGU", "SEP", "OKT", "NOV", "DES"];
                     
                    $namaBulan = $bulanArray[(int)$bulan];

                    echo "<h2>Hasil:</h2>";
                    echo "Nomor Golongan: $golongan <br>";
                    echo "Tanggal Lahir: $tanggal $namaBulan $tahun <br>";
                    echo "Nomor Urut: $nomorUrut <br>";
                    echo "Bulan Kelahiran: $namaBulan";
                } else {
                    echo "Nomor pegawai harus terdiri dari 11 digit.";
                }
            }
            ?>
            </center>
        </div>
    </div>
</body>
</html>