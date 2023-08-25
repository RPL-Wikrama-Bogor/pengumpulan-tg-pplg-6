<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://i.pinimg.com/564x/18/d9/8b/18d98b260b1ff941f0ae77c4a27d52cc.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .waktu-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .user-box {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table td {
            padding: 5px;
        }

        input[type="number"] {
            width: 150px;
        }

        input[type="submit"] {
            background-color: #96B6C5;
            color: black;
            padding: 5px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100px;
        }

        input[type="submit"]:hover {
            background-color: #E1AEFF;
        }

        .output-box {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="waktu-box">
        <h2>Waktu Sederhana</h2>
        <form action="" method="post">
            <table>
                <div class="user-box">
                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td><input type="number" name="hh" id="hh" min="0" max="23" required></td>
                    </tr>
                    <tr>
                        <td>Menit</td>
                        <td>:</td>
                        <td><input type="number" name="mm" id="mm" min="0" max="59" required></td>
                    </tr>
                    <tr>
                        <td>Detik</td>
                        <td>:</td>
                        <td><input type="number" name="ss" id="ss" min="0" max="59" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="submit" name="submit"></td>
                    </tr>
                </div>
            </table>
        </form>
        <div class="output-box">
            <?php
            if (isset($_POST['submit'])) {
                $hh = $_POST['hh'];
                $mm = $_POST['mm'];
                $ss = $_POST['ss'];

                $ss = $ss + 1;

                if ($ss >= 60) {
                    $mm = $mm + 1;
                    $ss = 0;
                }

                if ($mm >= 60) {
                    $hh = $hh + 1;
                    $mm = 0;
                    $ss = 0;
                }

                if ($hh >= 24) {
                    $hh = 0;
                    $mm = 0;
                    $ss = 0;
                }

                echo $hh . " jam ";
                echo $mm . " menit ";
                echo $ss . " detik ";
            }
            ?>
        </div>
    </div>
</body>
</html>
