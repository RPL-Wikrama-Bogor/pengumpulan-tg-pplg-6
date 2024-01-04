<!DOCTYPE html>
<html>
<head>
    <title>Angka Satuan, Puluhan, dan Ratusan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        h1 {
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Angka Satuan, Puluhan, dan Ratusan</h1>
        <form method="post">
            Masukkan bilangan bulat: <input type="number" name="bilangan" required>
            <input type="submit" value="Hitung">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bilangan = $_POST["bilangan"];
            $satuan = $bilangan % 10;
            $puluhan = floor(($bilangan % 100) / 10);
            $ratusan = floor($bilangan / 100);

            echo "<h2>Hasil:</h2>";
            echo "Angka satuan: $satuan <br>";
            echo "Angka puluhan: $puluhan <br>";
            echo "Angka ratusan: $ratusan <br>";
        }
        ?>
    </div>
</body>
</html>
        