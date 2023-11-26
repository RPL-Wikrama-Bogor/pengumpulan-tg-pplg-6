<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7091F5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
<body>
    
    <form method="post">
    <div class="container">
    <center><h2>Peningkatan Waktu</h2></center>
        <input type="number" name="hm" placeholder="Jam"><br>
        <input type="number" name="mm" placeholder="Menit"><br>
        <input type="number" name="ss" placeholder="Detik"><br>
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

       echo "hasil waktu = $hm : $mm : $ss";
    }
?>
</div>