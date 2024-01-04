<?php
$no_pegawai;
$no_golongan;
$tahun;
$no_urutan;
$bulan;
$tanggal;
$tanggal_lahir;

if(isset($_POST['submit'])){
    $no_pegawai = $_POST['pegawai'];

    $no_golongan = substr($no_pegawai, 0, 1);
    $tanggal = substr($no_pegawai, 1, 2);
    $bulan = substr($no_pegawai, 3, 2);
    $tahun = substr($no_pegawai, 5, 4);
    $no_urutan = substr($no_pegawai, 9, 2);
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gddmmyyyyynn</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://i.pinimg.com/564x/57/9b/15/579b15bf916a909dcad4090a4c1b0f5b.jpg");
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #DFCCFB;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            width: 550px;
            margin: 0 auto;
            margin-top: 150px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="number"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
<div class="container">
    <h1>g-dd-mm-yyyyy-nn</h1>
<form action="" method="post">
        <table>
            <tr>
                <td>No Pegawai</td>
                <td></td>
                <td><input type="number" name="pegawai"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>         
        </table>
    </form>
</body>
</html>

    <?php
    if(isset($_POST['submit'])){
        if ($strlen('no_pegawai' < 11)){
            echo "no pegawai tidak sesuai";
        } else {
            if ($bulan == "01"){
                echo "Januari";
                echo "<br>";
            } else if ($bulan == "02"){
                echo "Februari";
                echo "<br>";
            } else if ($bulan == "03"){
                echo "Maret";
                echo "<br>";
            } else if ($bulan == "04"){
                echo "April";
                echo "<br>";
            } else if ($bulan == "05"){
                echo "Mei";
                echo "<br>";
            } else if ($bulan == "06"){
                echo "Juni";
                echo "<br>";
            } else if ($bulan == "07"){
                echo "Juli";
                echo "<br>";
            } else if ($bulan == "08"){
                echo "Agustus";
                echo "<br>";
            } else if ($bulan == "09"){
                echo "September";
                echo "<br>";
            } else if ($bulan == "10"){
                echo "Oktober";
                echo "<br>";
            } else if ($bulan == "11"){
                echo "November";
                echo "<br>";
            } else if ($bulan == "12"){
                echo "Desember";
                echo "<br>";
            } else {
                echo "bulan tidak sesuai";
                echo "<br>";
            }if ($tanggal > "31"){
                echo "tanggal tidak sesuai";
                echo "<br>";
            }
            echo "<br>";


        
            
            $tanggal_lahir = $tanggal."/". $bulan. "/".$tahun;

            
             echo "no golongan = ". $no_golongan . "<br>";
             echo "tanggal lahir = ". $tanggal_lahir . "<br>";
             echo "no urutan = ". $no_urutan;
            
        }
    }
    ?>