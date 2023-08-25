<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; */
        }
        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        </style>

</head>
<body>
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
        $hm = "0" . $hm;
       }
       if (strlen($mm) == 1) {
        $mm = "0" . $mm;
       }
       if (strlen($ss) == 1) {
        $ss = "0" . $ss;
       }
       ?><center><?php
       echo "waktu = $hm . $mm . $ss";
    }
?>