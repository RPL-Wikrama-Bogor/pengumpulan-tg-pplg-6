<?php
    $hh;
    $mm;
    $ss;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data waktu setelah ditambahkan 1 detik</title>
    <style>
           *{
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(-135deg, pink, salmon);
        }
        .wrapper{
            width: 450px;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;

        }
        .wrapper .input-data{
            height: 40px;
            width: 100%;
            position: relative;
        }
        .wrapper .input-data input{
            height: 100%;
            width: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid silver;
        }
        .wrapper .input-data label{
            position: absolute;
            bottom: 10px;
            left: 0;
            color: grey;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .input-data input:focus ~ label,
        .input-data input:valid ~ label{
            transform: translateY(-20px);
            font-size: 15px;
            color: #4158d0;
        }
        .wrapper .input-data .underline{
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
            background: pink;
        }
        .input-data .underline:before{
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            background: #4158d0;
            transform: scaleX(0);
            transition: transform 0.3 ease;
        }
        .input-data input:focus ~ .underline:before,
        .input-data input:valid ~ .underline:before{
            transform: scaleX(1);
        }
    </style>
</head>
<body>
<form action="" method="post">
<div class="wrapper">
        <div class="text">
            <center><h1 style="color: salmon;">Data waktu setelah ditambahkan 1 detik</h1></center>
        </div>
        <br>
        <div class="input-data">
            <input type="number" name="hh" required>
            <div class="underline">
            </div>
            <label>Jam</label>
        </div>
        <br>
        <div class="input-data">
            <input type="number" name="mm" required>
            <div class="underline">
            </div>
            <label>Menit</label>
        </div>
        <br>
        <div class="input-data">
            <input type="number" name="ss" required>
            <div class="underline">
            </div>
            <label>Detik</label>
        </div>
        <table>
            <tr>
                <td><input type="submit" value="Submit" name="submit" style="padding:5px; "></td><br>
            </tr>
        </table>
    </form>
    <br>

    <?php
        if(isset($_POST['submit'])){
            $hh = $_POST['hh'];
            $mm = $_POST['mm'];
            $ss = $_POST['ss'];

            //proses
            $ss = $ss + 1;

            //output
            if ($ss >= 60){
                $mm = $mm + 1;
                $ss = 00;

                if ($mm >=60){
                    $hh = $hh + 1;
                    $mm = 00;
                    $ss = 00;

                    if ($hh >=24){
                        $hh = 00;
                        $mm = 00;
                        $ss = 00;
                    }
                }

                   
            }
            else {
                $ss = $ss;
            }

            echo $hh . ".";
            echo $mm . ".";
            echo $ss;
            echo "<br>";
            echo " Atau ";
            echo "<br>";
            echo "(";
            echo $hh . " Jam ";
            echo $mm . " Menit ";
            echo $ss . " Detik ";
            echo ")";
        }


    ?>
</div>
</body>
</html>