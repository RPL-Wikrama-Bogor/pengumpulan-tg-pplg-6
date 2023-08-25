<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.11</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7091F5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        input[type="number"] {
            width: 93%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #040D12;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
            width: 50%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .container {
            width: 320px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        @media only screen and (max-widht: 410px) {
            .container{
                widht: 70%;
            }
        } 
    </style>
<body>
    <div class="container">
    <center><h2>Tentang Pegawai</h2></center>
    <form action="" method="post">
        <input type="number" name="no_pegawai" placeholder="Masukan No Pegawai"<br> 
        <center><button type="submit" name="submit">submit</button></center>
    </form>
</body>
</html>

<br>
<center>
<?php

if(isset($_POST['submit'])){

    $no_pgwi = $_POST['no_pegawai'];
     
    if(strlen($no_pgwi) > 11) {
        echo "No Pegawai Tidak Sesuai";
        die;
    } 
    if(strlen($no_pgwi) < 11) {
        echo "No Pegawai Tidak Sesuai";
        die;
    } 

    $no_golongan = substr($no_pgwi, 0, 1);
    $tanggal = substr($no_pgwi, 1, 2);
    $bulan = substr($no_pgwi, 3, 2);
    $tahun = substr($no_pgwi, 5, 4);
    $no_urutan = substr($no_pgwi, 9, 2);

    switch ($bulan) {
        case 1:
            $bulan = " Januari ";
            break;
        case 2:
            $bulan = " Februari ";
            break;
        case 3:
            $bulan = " Maret ";
            break;
        case 4:
            $bulan = " April ";
            break;
        case 5:
            $bulan = " Mei ";
            break;
        case 6:
            $bulan = " Juni ";
            break;
        case 7:
            $bulan = " Juli ";
            break;
        case 8:
            $bulan = " Agustus ";
            break;
        case 9:
            $bulan = " September ";
            break;
        case 10:
            $bulan = " Oktober ";
            break;
        case 11:
            $bulan = " November ";
            break;
        case 12:
            $bulan = " Desember ";
            break;
        
        default:
            "bulan tidak sesuai";
            break;
    }

    $tanggal_lahir = $tanggal . $bulan . $tahun;

    echo "No Golongan : $no_golongan <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "No Urutan : $no_urutan ";
}
?>
</center>
</div>