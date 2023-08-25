<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Waktu</title>

    <style>
        body{
        background-image: url("https://i.pinimg.com/564x/da/d9/21/dad921dce7c5bfec842cb22982b681b1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        font-family:  'sans-serif';
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
        }

        form {
        background-color: #F8F6F4;
        border-radius: 15px;
        padding: 50px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
         width: 300px;
         margin-bottom: 30px;
        }


        label {
        background-color: #9EB384 ;
        display: block;
        margin-bottom: 15px;
        border-radius: 30px;
        font-weight: bold;
        }

        .besar {
        font-size: 24px;
        color: white;
        }

        .teks-bayangan {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }
    </style>

</head>
<body>

<form action="" method="post">
        <table>
            <tr>
                <td>Input Jam</td>
                <td><input type="number" name="h"></td>
            </tr>
            <tr>
                <td>Input Menit</td>
                <td><input type="number" name="m"></td>
            </tr>
            <tr>
                <td>Input Detik</td>
                <td><input type="number" name="s"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php

    $hh;
    $mm;
    $ss;


    if(isset($_POST['submit'])){
        $hh=$_POST['h'];
        $mm=$_POST['m'];
        $ss=$_POST['s'];

        $ss=$ss+1;

        if($ss>=60){
            $mm= $mm+1;
            $ss=00;

         if($mm>=60){
            $hh=$hh+1;
            $mm= 00;
            $ss=00;

        if ($hh>=24){
            $hh=00;
            $mm=00;
            $ss=00;

        }
    }
        } else {
        $ss=$ss;
    }
 
 

    echo '<span class="besar teks-bayangan">' . $hh . ':</span>';
    echo '<span class="besar teks-bayangan">' . $mm . ':</span>';
    echo '<span class="besar teks-bayangan">' . $ss . '</span>';
    

}


?>
</body>
</html>