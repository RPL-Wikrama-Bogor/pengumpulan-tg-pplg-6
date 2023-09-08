<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 12</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 320px;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 10px;
            margin: 8px 0;
            width: 93%;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus {
            border-color: #007bff;
        }

        button[type="submit"] {
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Waktu</h2>
        <form action="" method="post">
            <input type="number" name="hh" placeholder="Jam" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;">
            <br>
            <input type="number" name="mm" placeholder="Menit" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;">
            <br>
            <input type="number" name="ss" placeholder="Detik" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;">
            <br>
            <button type="submit" name="submit">Hitung</button>
        </form>
        <?php
            if(isset($_POST['submit'])){

                $hh = $_POST['hh'];
                $mm = $_POST['mm'];
                $ss = $_POST['ss'];

                $ss += 1;

                if($ss >=60){
                    $mm += 1;
                    $ss = "00";
                }

                if($mm >= 60){
                    $hh += 1;
                    $mm = "00";
                    $ss = "00";
                }

                if($hh >= 24){
                    $hh = "00";
                    $mm = "00";
                    $ss = "00";
                }

                if(strlen($hh) == 1){
                    $hh = "0". $hh;
                }
                if(strlen($mm) == 1){
                    $mm = "0". $mm;
                }
                if(strlen($ss) == 1){
                    $ss = "0". $ss;
                }
            }
        ?>
        <div class="result">
            <?php
                if(isset($_POST['submit'])){
                    echo "Hasil =  <i>$hh:$mm:$ss</i>";
                }
            ?>
        </div>
    </div>
</body>
</html>



