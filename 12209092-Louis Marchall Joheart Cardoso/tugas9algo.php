<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .container {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            width: 450px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
        <form action="" method="post">
            <label for="nopega">Nomor Pegawai:</label>
            <input type="text" name="number" required id="nopega" >
            <input type="submit" value="submit" required name="submit">
        </form>
        <?php
if (isset($_POST['submit'])) {
    $no_pegawai = $_POST ['number'];
    
    if (strlen($no_pegawai) > 11){
        echo "No pegawai tidak sesuai";
        die;
    }
    if (strlen($no_pegawai) < 11){
        echo "No pegawai tidak sesuai";
        die;
    }

    $no_golongan = substr($no_pegawai, 0, 1);
    $tanggal = substr($no_pegawai, 1, 2);
    $bulan = substr($no_pegawai, 3, 2);
    $tahun = substr($no_pegawai, 5, 4);
    $no_urutan = substr($no_pegawai, 9, 2);

    switch ($bulan) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
        default:
            echo "Bulan tidak sesuai <br>";
            break;
    }

    $tanggal_lahir = " $tanggal $bulan $tahun";

    echo "No. Golongan: $no_golongan <br>";
    echo "Tanggal lahir: $tanggal_lahir <br>";
    echo "No urut: $no_urutan";
} 

?>
    </div>
</body>
</html>

