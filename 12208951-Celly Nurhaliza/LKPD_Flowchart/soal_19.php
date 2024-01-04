<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 19</title>
</head>
<body>
    <div class="container">
    <form action="" method="post" class="form">
        <input type="number" name="vip" class="input" placeholder="VIP"><br><br> 

        <input type="number" name="eksekutif" class="input" placeholder="Eksekusif"><br><br> 

        <input type="number" name="ekonomi" class="input" placeholder="Ekonomi"><br><br> 

        <input type="submit" name="submit" class="submit">
    </form>
    <div class="hasil">
    <?php
    if(isset($_POST['submit'])){
        $vip = $_POST["vip"];
        $eksekutif = $_POST["eksekutif"];
        $ekonomi = $_POST["ekonomi"];
    
        $vipTiket = 50;
        $eksekutifTiket = 50;
        $ekonomiTiket = 50;

    if ($vip >= 35) {
        $keuntunganVIP = $vip * 0.25;
    } elseif ($vip >= 20) {
        $keuntunganVIP = $vip * 0.15;
    } else {
        $keuntunganVIP = $vip * 0.05;
    }

    if ($eksekutif >= 40) {
        $keuntunganEksekutif = $eksekutif * 0.20;
    } elseif ($eksekutif >= 20) {
        $keuntunganEksekutif = $eksekutif * 0.10;
    } else {
        $keuntunganEksekutif = $eksekutif * 0.02;
    }

    $keuntunganEkonomi = $ekonomi * 0.07;

    $totalTiket = $vip + $eksekutif + $ekonomi;
    $totalKeuntungan = $keuntunganVIP + $keuntunganEksekutif + $keuntunganEkonomi;

    echo "Keuntungan Tiket VIP: $" . $keuntunganVIP . "<br>";
    echo "Keuntungan Tiket Eksekutif: $" . $keuntunganEksekutif . "<br>";
    echo "Keuntungan Tiket Ekonomi: $" . $keuntunganEkonomi . "<br>";
    echo "Keuntungan Total: $" . $totalKeuntungan . "<br>";

    echo "Jumlah Tiket VIP Terjual: " . $vip . "<br>";
    echo "Jumlah Tiket Eksekutif Terjual: " . $eksekutif . "<br>";
    echo "Jumlah Tiket Ekonomi Terjual: " . $ekonomi . "<br>";
    echo "Total Tiket Terjual: " . $totalTiket . "<br>";


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
  margin-top: 4em;
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