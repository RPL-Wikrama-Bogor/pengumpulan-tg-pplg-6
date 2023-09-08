<?php
$no_pegawai = "";
$no_golongan = "";
$tanggal_lahir = "";
$no_urutan = "";

if (isset($_POST['submit'])) {
    $no_pegawai = $_POST['nopega'];
    
    $no_golongan = substr($no_pegawai, 0, 1);
    $tanggal = substr($no_pegawai, 2, 2);
    $bulan = substr($no_pegawai, 4, 2);
    $tahun = substr($no_pegawai, 6, 4);
    $no_urutan = substr($no_pegawai, 10, 2);

    $namab = "";

    switch ($bulan) {
        case "01":
            $namab = "Januari";
            break;
        case "02":
            $namab = "Februari";
            break;
        case "03":
            $namab = "Maret";
            break;
        case "04":
            $namab = "April";
            break;
        case "05":
            $namab = "Mei";
            break;
        case "06":
            $namab = "Juni";
            break;
        case "07":
            $namab = "Juli";
            break;
        case "08":
            $namab = "Agustus";
            break;
        case "09":
            $namab = "September";
            break;
        case "10":
            $namab = "Oktober";
            break;
        case "11":
            $namab = "November";
            break;
        default:
            $namab = "Desember";
    }

    $tanggal_lahir = $tanggal . "-" . $namab . "-" . $tahun;
}
?>
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
            <input type="text" name="nopega" required id="nopega" >
            <input type="submit" value="Submit" required name="submit">
            <?php
            if (isset($_POST['submit'])) {
                if (strlen($no_pegawai) !== 12) {
                    echo "Nomor Pegawai Tidak Sesuai";
                } else {
                    echo "<br>No Golongan : $no_golongan <br>";
                    echo "Tanggal Lahir : $tanggal_lahir <br>";
                    echo "No Urutan : $no_urutan";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>

