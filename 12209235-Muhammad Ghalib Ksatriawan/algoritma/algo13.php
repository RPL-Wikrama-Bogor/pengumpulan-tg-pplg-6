<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Angka 1 sampai 50</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .angka-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .angka-list li {
            width: calc(20% - 10px);
            padding: 10px;
            text-align: center;
            margin: 5px;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Mencetak Angka 1 sampai 50</h2>
        <ul class="angka-list">
            <?php
            $angka = 1;
            while ($angka <= 50) {
                echo "<li>$angka</li>";
                $angka++;
            }
            ?>
        </ul>
    </div>
</body>
</html>
