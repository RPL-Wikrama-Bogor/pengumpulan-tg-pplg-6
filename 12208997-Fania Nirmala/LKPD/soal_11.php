<?php
    $no_pegawai;
    $no_golongan;
    $tanggal;
    $bulan;
    $tahun;
    $no_urutan;
    $tanggal_lahir;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DD-MMM-YYYY</title>
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
            width: 400px;
            max-width:100%;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 0 auto;
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
            <center><h1 style="color: salmon;">DD-MMM-YYYY</h1></center>
        </div>
        <br>
        <div class="input-data">
            <input type="number" name="pegawai" required>
            <div class="underline">
            </div>
            <label>No Pegawai</label>
        </div>
        <br>
    
        <table>
            <tr>
                <td><input type="submit" value="Submit" name="submit" style="padding:5px; "></td>
            </tr>
        </table>
        
    
    </form>
    <br>
    <?php
        if(isset($_POST['submit'])){
            $no_pegawai = $_POST['pegawai'];

            $no_golongan = substr($no_pegawai, 0, 1);
            $tanggal = substr($no_pegawai, 1,2);
            $bulan = substr($no_pegawai, 3, 2);
            $tahun = substr($no_pegawai, 5, 4);
            $no_urutan = substr($no_pegawai, 9, 2);

            //proses
            if ($no_pegawai < 11){
                echo "No pegawai tidak sesuai!";
            }
            else if ($bulan == "01"){
                echo "Bulan = Januari";
            }
            else if ($bulan == "02"){
                echo "Bulan = Februari";
            }
            else if ($bulan == "03"){
                echo "Bulan = Maret";
            }
            else if ($bulan == "04"){
                echo "Bulan = April";
            }
            else if ($bulan == "05"){
                echo "Bulan = Mei";
            }
            else if ($bulan == "06"){
                echo "Bulan = Juni";
            }
            else if ($bulan == "07"){
                echo "Bulan = Juli";
            }
            else if ($bulan == "08"){
                echo "Bulan = Agustus";
            }
            else if ($bulan == "09"){
                echo "Bulan = September";
            }
            else if ($bulan == "10"){
                echo "Bulan = Oktober";
            }
            else if ($bulan == "11"){
                echo "Bulan = November";
            }
            else if ($bulan == "12"){
                echo "Bulan = Desember";
            }
            else {
                echo "Bulan tidak sesuai!";
                echo "<br>";
            }

            if ($tanggal > "31"){
                echo "Tanggal tidak sesuai!";
                echo "<br>";
            }
            
      

            $tanggal_lahir = $tanggal. "/" .$bulan . "/".$tahun;
          
            //output
            echo "No Golongan = " . $no_golongan . "<br>";
            echo "Tanggal Lahir = " . $tanggal_lahir . "<br>";
            echo "No Urutan = " . $no_urutan;

        }

    ?>
    </div>
</body>
</html>