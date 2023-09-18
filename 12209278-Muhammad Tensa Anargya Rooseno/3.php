<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
        }
        input[type="number"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
    <title>Maximum Number Finder</title>
</head>
<body>
    <div class="container">
        <h1>Maximum Number Finder</h1>
        <form action="" method="post">
            <label for="bil_satu">Bilangan pertama:</label>
            <input type="number" name="bil_satu" required>
            
            <label for="bil_dua">Bilangan kedua:</label>
            <input type="number" name="bil_dua" required>
            
            <label for="bil_tiga">Bilangan ketiga:</label>
            <input type="number" name="bil_tiga" required>
            
            <input type="submit" name="submit" value="Find Maximum">
        </form> 
        <?php
        if (isset($_POST['submit'])) {
            $bil_satu = $_POST['bil_satu'];
            $bil_dua = $_POST['bil_dua'];
            $bil_tiga = $_POST['bil_tiga'];

            if ($bil_satu == $bil_dua && $bil_dua == $bil_tiga) {
                echo "<p>Equal Value</p>";
            } else {
                $max_number = max($bil_satu, $bil_dua, $bil_tiga);
                echo "<p>The maximum number is: $max_number</p>";
            }
        }
        ?>
    </div>
</body>
</html>
