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
        <input type="number" name="kehadiran" class="input" placeholder="Input Kehadiran"><br><br>

        <input type="number" name="mtk" class="input" placeholder="Input Nilai MTK"><br><br>

        <input type="number" name="indo" class="input" placeholder="Input Nilai Indonesia"><br><br>

        <input type="number" name="ing" class="input" placeholder="Input Nilai B.Inggris"><br><br>

        <input type="number" name="dpk" class="input" placeholder="Input Nilai DPK"><br><br>

        <input type="number" name="agama" class="input" placeholder="Input Nilai Agama"><br><br>

        <input type="text" name="nama" class="input" placeholder="Input Nama"><br><br>

        <input type="submit" name="submit" class="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $kehadiran = $_POST["kehadiran"];
        $mtk = $_POST["mtk"];
        $indo = $_POST["indo"];
        $ing = $_POST["ing"];
        $dpk = $_POST["dpk"];
        $agama = $_POST["agama"];
        $nama = $_POST["nama"];

        $rataRataNilai = ($mtk + $indo + $ing + $dpk + $agama);
        echo $nama;
        echo "<br>";

        if ($rataRataNilai >= 475 && $kehadiran == 100) {
        echo "Selamat! Anda adalah juara kelas.";
        echo "<br>";
        } else {
        echo "Maaf, Anda belum memenuhi syarat untuk menjadi juara kelas.";
        echo "<br>";
        }

        echo "Rata-rata Nilai: " . $rataRataNilai;
        echo "<br>";
        echo "Kehadiran: " . $kehadiran . "%";

    }
    ?></div>
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