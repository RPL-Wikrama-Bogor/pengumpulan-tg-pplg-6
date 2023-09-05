<?php
if(isset($_POST['submit'])) {
    $fahrenheit = $_POST['temperature'];
    $celsius = ($fahrenheit - 32) * 5/9;

    if ($celsius > 30) {
        $status = "panas";
    } elseif ($celsius < 10) {
        $status = "dingin";
    } else {
        $status = "normal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cek Cuaca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #333;
        }
        form {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        p {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Cek Cuaca</h2>
    <form method="post">
        <label for="temperature">Masukkan suhu dalam Fahrenheit: </label>
        <input type="number" name="temperature" required>
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php
    if (isset($status)) {
        echo "<p>Cuaca saat ini adalah: $status</p>";
    }
    ?>
</body>
</html>
