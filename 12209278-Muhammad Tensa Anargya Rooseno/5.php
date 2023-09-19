<!DOCTYPE html>
<html>
<head>
    <title>Konversi Jam-Menit-Detik ke Total Detik</title>
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
            width: 700px;
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
    <h1>Konversi Jam-Menit-Detik ke Total Detik</h1>
    <form method="post">
        <label for="jam">Jam:</label>
        <input type="number" name="jam" id="jam" required><br>

        <label for="menit">Menit:</label>
        <input type="number" name="menit" id="menit" required><br>

        <label for="detik">Detik:</label>
        <input type="number" name="detik" id="detik" required><br>

        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

        $totalDetik = ($jam * 3600) + ($menit * 60) + $detik;

        echo "<p>Total detik: $totalDetik detik</p>";
    }
    ?>
</body>
</html>
