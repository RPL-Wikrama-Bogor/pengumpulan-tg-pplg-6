<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Pegawai</title>

    <style>

body{
        background-color: #FFB7B7;
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
        border-radius: 10px;
        padding: 16px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
         width: 200px;
        }

        label {
        background-color: #9EB384 ;
        display: block;
        margin-bottom: 15px;
        border-radius: 30px;
        font-weight: bold;
        }

        .flex-container{
	    display: flex; /* mengubah ke mode flexbox */
	    flex-wrap: wrap; /* mengatur item flexbox dapat diwrap/apabila container tidak cukup lagi untuk membungkus item, maka item akan diturunkan */ 
	    flex-direction: row; /* Mengatur arah item ke row/satu baris */
	    justify-content: center; /* mensejajarkan item selalu di tengah dalam satu baris */
        }

        </style>
</head>
<body>
    
<form method="POST" action="">
    <tr>
      <td>Input Kode Pegawai</td>
      <br><br>
      <td><input type="number" value="kode pegawai" name="bilangan"></td>
    </tr>
    <br><br>
    <tr>
    <input type="submit" value="Submit" name="submit">
    <br><br>

</form>
<br>
<?php
$tanggal_lahir;

if (isset($_POST['submit'])) {
    $kodepegawai = $_POST['bilangan'];

    
   if (strlen ($kodepegawai) < 11){
    echo "nomor pegawai tidak sesuai";
   } else{
    $golongan = substr ($kodepegawai, 0,1);
    $tanggal = substr ($kodepegawai, 1,2);
    $bulan = substr ($kodepegawai, 3, 2);
    $tahun = substr ($kodepegawai, 5,4);
    $urutan = substr ($kodepegawai, 9,2);
 
   if ($bulan == "01"){
    $bulan =  "bulan januari ";
   }else if ($bulan == "02"){
    $bulan =  "bulan februari ";
   }else if ($bulan == "03"){
    $bulan =  "bulan maret ";
   }else if ($bulan == "04"){
    $bulan = "bulan april ";
   }else if ($bulan == "05"){
    $bulan = "bulan mei ";
   }else if ($bulan == "06"){
    $bulan = "bulan juni ";
   }else if ($bulan == "07"){
    $bulan = "bulan juli ";
   }else if ($bulan == "08"){
    $bulan = "bulan agustus ";
   }else if ($bulan == "09"){
    $bulan = "bulan september ";
   }else if ($bulan == "10"){
    $bulan = "bulan oktober ";
   }else if ($bulan == "11"){
    $bulan = "bulan novembe r";
   }else {
    $bulan = "Desember ";
   }
  
$tanggal_lahir = $tanggal . $bulan  . $tahun ;
echo "<br>";
echo "no golongan " . $golongan;
echo "<br>";
echo "tanggal lahir  " . $tanggal_lahir;
echo "<br>";
echo "no urutan " . $urutan;
}
}
?>

</center>
</body>
</html>