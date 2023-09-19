<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="" method="post" class="form">
        <input class="input" type="number" name="no_pegawai" placeholder="Nomor Pegawai"><br><br>

        <input type="submit" name="submit" class="submit">
        
    </form><div class="hasil">
    <?php
    if(isset($_POST['submit'])){
        $no_pegawai = $_POST["no_pegawai"];
        
        $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $tahun = substr($no_pegawai, 5, 4);
        $no_urutan = substr($no_pegawai, 9, 2);

        if($no_pegawai < 11){
            echo "No pegawai tidak sesuai";
        }
        elseif($bulan == "01"){
            echo "Januari";
        }elseif($bulan == "02"){
            echo "Februari";
        }elseif($bulan == "03"){
            echo "Maret";
        }elseif($bulan == "04"){
            echo "April";
        }elseif($bulan == "05"){
            echo "Mei";
        }elseif($bulan == "06"){
            echo "Juni";
        }elseif($bulan == "07"){
            echo "Juli";
        }elseif($bulan == "08"){
            echo "Agustus";
        }elseif($bulan == "09"){
            echo "September";
        }elseif($bulan == "10"){
            echo "Oktober";
        }elseif($bulan == "11"){
            echo "November";
        }elseif($bulan == "12"){
            echo "Desember";
        }else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Masukkan bulan lahir yang valid!")';  
            echo '</script>';

        }
        echo "<br>";
        
        $tanggal_lahir = $tanggal." ".$bulan." ".$tahun;

        echo "No golongan ".$no_golongan;
        echo "<br>";
        echo "Tanggal lahir ".$tanggal_lahir;
        echo "<br>";
        echo "No urutan ".$no_urutan;
    }
    ?></div></div>
    <style>
    .container {
        max-width: 350px;
        background: #F8F9FD;
        background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
        border-radius: 40px;
        padding: 25px 35px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
        margin: 20px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10em;
    }

    .form {
        margin-top: 20px;
    }

    .form .input {
        width: 90%;
        background: white;
        border: none;
        padding: 15px;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: #cff0ff 0px 10px 10px -5px;
        border-inline: 2px solid transparent;
    }
    .form .submit {
        width: 100%;
        background: white;
        border: none;
        padding: 15px;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: #cff0ff 0px 10px 10px -5px;
        border-inline: 2px solid transparent;
    }
    .hasil{
        text-align: center;
        margin-left: auto;
        margin-right: auto; 
        margin-top: 20px;
    }
    .submit:hover{
        background-color: #cff0ff;
        color: white;
    }

    </style>
</body>
</html>