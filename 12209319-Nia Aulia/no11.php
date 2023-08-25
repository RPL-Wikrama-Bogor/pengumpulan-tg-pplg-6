<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 11</title>
</head>
<body>
<div class="coba">
    <form action="" method="post">
       <center> <label for=""><b>dd-mm-yyyy<hr></b></label> </center>
        <input type="number" name="no_pegawai" placeholder="No Pegawai"><br><br>
        <input type="submit" name="submit" class="submit">
    

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
        }else{
            echo "Desember";
        }
            echo "<br>";
        $tanggal_lahir = $tanggal .$bulan .$tahun;

        echo "No golongan ".$no_golongan;
        echo "<br>";
        echo "Tanggal lahir ".$tanggal_lahir;
        echo "<br>";
        echo "No urutan ".$no_urutan;
    }
    ?>
    </form>
</div>

<style>
    
    body {
    background: #5C8374;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    width: 300px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

label {
    color: black;
    font-size: 20px;
    padding: 15px;
}

.submit{
    width:300px;
    
}

</style>
</body>
</html>