<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <style>
      
    </style>
    <div class="login-box">
  <h2>input</h2>
  <form>
    <div class="user-box">
      <input type="number" name="pegawai" required="">
    </div>
    
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>
<?php
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
            echo "bulan januari";
        } else if ($bulan == "02") {
            echo "bulan februari";
        } else if ($bulan == "03") {
            echo "bulan maret";
        } else if ($bulan == "04") {
            echo "bulan april";
        } else if ($bulan == "05") {
            echo "bulan mei";
        } else if ($bulan == "06") {
            echo "bulan juni";
        } else if ($bulan == "07") {
            echo "bulan juli";
        } else if ($bulan == "08") {
            echo "bulan agustus";
        } else if ($bulan == "09") {
            echo "bulan september";
        } else if ($bulan == "10") {
            echo "bulan oktober";
        } else if ($bulan == "11") {
            echo "bulan november";
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