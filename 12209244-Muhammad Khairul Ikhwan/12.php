<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 12</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="number"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width:300px;
        }

        input[type="submit"] {
            padding: 8px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            width:330px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 20px;
        }
    </style>

    <form method="post">
        <input type="number" name="hm" placeholder="jam"><br>
        <input type="number" name="mm" placeholder="menit"><br>
        <input type="number" name="ss" placeholder="detik"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php 
    if (isset($_POST['submit'])) {
        $hm = $_POST['hm'];
        $mm = $_POST['mm'];
        $ss = $_POST['ss'];

        $ss += 1;

       if ($ss >= 60) {
        $mm += 1;
        $ss = 00;
       }
       if ($mm >= 60) {
        $hm += 1;
        $mm = 00;
       }
       if ($hm >= 23) {
        $hm = 00;
        $mm = 00;
        $ss = 00;
       }

       if (strlen($hm) == 1) {
        echo $hm = "0" . $hm;
       }
       if (strlen($mm) == 1) {
        echo $mm = "0" . $mm;
       }
       if (strlen($ss) == 1) {
        echo $ss = "0" . $ss;
       }

       echo "waktu = $hm . $mm . $ss";
    }
?>