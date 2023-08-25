<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
body{
  padding:200px;
  background-image : url("https://i.pinimg.com/564x/4a/ab/58/4aab58e0e0bd778350ee5a2f3715b9d7.jpg");
  background-repeat: no-repeat;
  background-size:cover;
}
#feedback-form {
  width: 280px;
  margin: 0 auto;
  background-color: #fcfc;
  padding: 25px;
  box-shadow: 1px 4px 10px 1px #aaa;
  font-family: sans-serif;
  border-radius:15px;
}

#feedback-form * {
    box-sizing: border-box;
}

h2{
  color:#FE7BE5;  
}


    </style>
    <form action="" method="post">
    <div id="feedback-form">
  <h2 class="header">input</h2>
  <div>
    <form>
      <input type="number" name="pegawai" placeholder=""></input>
        <input type="submit" value="Submit" name="submit">
    </form>
<?php
 $pegawai;
 $golongan;
 $tanggal;
 $bulan;
 $tahun;
 $urutan;
 $tanggal_lahir;

    if (isset($_POST['submit'])) {
        $pegawai = $_POST['pegawai'];

        $golongan = substr ($pegawai , 0, 1);
        $tanggal = substr ($pegawai, 1, 2);
        $bulan = substr ($pegawai ,3, 2);
        $tahun = substr ($pegawai, 5,4);
        $urutan = substr ($pegawai, 9, 2);

        if ($pegawai < 11){
            echo "no pegawai tidak sesuai";
        } else if($bulan == "01"){
            $bulan = " januari ";
        } else if ($bulan == "02") {
            $bulan = " februari ";
        } else if ($bulan == "03") {
            $bulan = " maret ";
        } else if ($bulan == "04") {
            $bulan = "april ";
        } else if ($bulan == "05") {
            $bulan = " mei ";
        } else if ($bulan == "06") {
            $bulan = " juni ";
        } else if ($bulan == "07") {
            $bulan = "juli ";
        } else if ($bulan == "08") {
            $bulan = " agustus ";
        } else if ($bulan == "09") {
            $bulan = " september ";
        } else if ($bulan == "10") {
            $bulan = " oktober ";
        } else if ($bulan == "11") {
            $bulan = " november ";
        } else ($bulan = "desember");

        $tanggal_lahir = $tanggal. $bulan. $tahun;
        echo "<br>";

        echo " no golongan " . $golongan; 
        echo "<br>";
        echo "tanggal lahir " . $tanggal_lahir;
        echo "<br>";
        echo "no urutann " . $urutan;
        echo "<br>";
    }


?>
    
</body>
</html>