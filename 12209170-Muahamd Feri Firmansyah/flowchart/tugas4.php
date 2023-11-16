<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $gaji_pokok = $_POST["gaji_pokok"];

    $tunj = 0.2 * $gaji_pokok;

    $pjk = 0.15 * ($gaji_pokok + $tunj);

    $gaji_bersih = $gaji_pokok + $tunj - $pjk;
    
    $tunjangan = number_format($tunj, 2);
    $pajak = number_format($pjk, 2);
    $gaji_bersih = number_format($gaji_bersih, 2);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .result-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
            margin: 20px;
        }

        p {
            margin-bottom: 10px;
        }
          
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 20px;
        }
  
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 12px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body>
    <h1>Hitung Gaji Karyawan</h1>
    <form method="post" action="">
        <label for="nama">Nama Karyawan:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number_format" id="gaji_pokok" name="gaji_pokok" required><br><br>

        <input type="submit" value="Hitung Gaji">
    </form>
</body>
</html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hasil Perhitungan Gaji</h1>
    <div class="result-container">
        <p>Nama Karyawan: <?php echo $nama; ?></p>
        <p>Tunjangan: <?php echo $tunjangan; ?></p>
        <p>Pajak: <?php echo $pajak; ?></p>
        <p>Gaji Bersih: <?php echo $gaji_bersih; ?></p>
    </div>
</body>
</html>

<