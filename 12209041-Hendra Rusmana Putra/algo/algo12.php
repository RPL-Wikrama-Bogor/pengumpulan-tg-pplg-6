<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fancy Time Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            text-align: center;
        }
        .container h1 {
            color: #007bff;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            margin-bottom: 15px;
        }
        table td {
            padding: 10px;
            text-align: center;
        }
        input[type="number"] {
            width: 60px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fancy Time Calculator</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Jam</td>
                    <td>:</td>
                    <td><input type="number" name="jam" min="0" max="23" required></td>
                </tr>
                <tr>
                    <td>Menit</td>
                    <td>:</td>
                    <td><input type="number" name="menit" min="0" max="59" ></td>
                </tr>
                <tr>
                    <td>Detik</td>
                    <td>:</td>
                    <td><input type="number" name="detik" min="0" max="59" ></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $hh = intval($_POST['jam']);
            $mm = intval($_POST['menit']);
            $ss = intval($_POST['detik']);

            $ss = $ss + 1;
            if ($ss >= 60) {
                $mm = $mm + 1;
                $ss = 0;
            }
            if ($mm >= 60) {
                $hh = $hh + 1;
                $mm = 0;
            }
            if ($hh >= 24) {
                $hh = 0;
            }

            echo "<p class='result'>Waktu setelah penambahan: $hh jam $mm menit $ss detik</p>";
        }
        ?>
    </div>
</body>
</html>
