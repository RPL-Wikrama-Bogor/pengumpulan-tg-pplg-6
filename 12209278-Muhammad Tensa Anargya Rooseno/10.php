<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        label {
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Grade Calculator</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilaiPABP = $_POST["pabp"];
            $nilaiMatematika = $_POST["math"];
            $nilaiDPK = $_POST["dpk"];

            $rataRata = ($nilaiPABP + $nilaiMatematika + $nilaiDPK) / 3;

            if ($rataRata >= 85) {
                $grade = 'A';
            } elseif ($rataRata >= 70) {
                $grade = 'B';
            } elseif ($rataRata >= 55) {
                $grade = 'C';
            } elseif ($rataRata >= 40) {
                $grade = 'D';
            } else {
                $grade = 'E';
            }
        }
        ?>
        <form action="" method="post">
            <label for="pabp">Nilai PABP:</label>
            <input type="number" id="pabp" name="pabp" required>
            <label for="math">Nilai MTK:</label>
            <input type="number" id="math" name="math" required>
            <label for="dpk">Nilai DPK:</label>
            <input type="number" id="dpk" name="dpk" required>
            <button type="submit">Calculate</button>
        </form>
        <?php if (isset($grade)) : ?>
            <div class="result">
                <p><strong>Rata-rata nilai:</strong> <?php echo $rataRata; ?></p>
                <p><strong>Grade:</strong> <?php echo $grade; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
