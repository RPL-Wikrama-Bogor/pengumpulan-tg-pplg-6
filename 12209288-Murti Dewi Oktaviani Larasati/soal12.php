<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data waktu tambah 1 detik</title>

    <style>
        body{
        background-image: url("https://i.pinimg.com/564x/49/08/4e/49084e55c2b6320c153af7feea2d1502.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        font-family:  'sans-serif';
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        form {
        background-color: #F8F6F4;
        border-radius: 25px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
         width: 300px;
        }

        label {
        background-color: #9EB384 ;
        display: block;
        margin-bottom: 15px;
        border-radius: 30px;
        font-weight: bold;

        }

       


        
        </style>


</head>


<body>



  
<form method="POST" action="#">
    <h5>SILAHKAN MASUKAN ANGKA<h5>
    <tr>
      <td>Input Jam</td>
      <td><input type="number" name="hh"></td>
    </tr>
    <br><br>

    <tr>
      <td>Input Menit</td>
      <td><input type="number" name="mm"></td>
    </tr>
    <br><br>
    <tr>
      <td>Input Detik</td>
      <td><input type="number" name="ss"></td>
    </tr>
    <br><br>

    <tr>
    <input type="submit" value="Submit" name="submit">
    <br><br>


<?php
  if (isset($_POST['submit'])) {
    $hh = $_POST['hh'];
    $mm = $_POST['mm'];
    $ss = $_POST['ss'];

    $ss = $ss +1;

    if($ss >= 60){
        $mm = $mm +1;
        $ss = 00;

        if($mm >=60){
            $hh = $hh +1;
            $mm = 00;
            $ss = 00;

        if($hh >=24) {
            $hh = 00;
            $mm = 00;
            $ss = 00;
        }


        }
    }else{
        $ss = $ss;
    }

    echo $hh.".";
    echo $mm.".";
    echo $ss.".";
    

  }

?>

</center>
</body>
</html>