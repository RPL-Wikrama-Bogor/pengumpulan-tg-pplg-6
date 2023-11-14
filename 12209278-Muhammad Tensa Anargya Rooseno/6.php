<!DOCTYPE html>
<html>
<head>
    <title>Konversi Total Detik ke Jam-Menit-Detik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        p {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Konversi Total Detik ke Jam-Menit-Detik</h1>
    <form method="post">
        <label for="total_detik">Total Detik:</label>
        <input type="number" name="total_detik" id="total_detik" required><br>

        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalDetik = $_POST["total_detik"];

        $jam = floor($totalDetik / 3600);
        $sisaDetik = $totalDetik % 3600;
        $menit = floor($sisaDetik / 60);
        $detik = $sisaDetik % 60;

        echo "<p>Bentuk jam-menit-detik: $jam jam $menit menit $detik detik</p>";
    }
    ?>
</body>
</html>
