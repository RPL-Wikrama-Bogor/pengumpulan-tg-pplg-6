<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vhmemek;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }
        table {
            max-width: 100%;
            margin-bottom: 15px;
        }
        table td {
            padding: 10px;
            text-align: center;
        }
        input[type="number"] {
            max-width: 60px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
        }
    </style>
<body>
<div class="container">
        <h1>Detail Pegawai</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Input Nomor</td>
                    <td>:</td>
                    <td><input type="number" name="number" required></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name="submit" value="Tampilkan Detail"></td>
                </tr>
            </table>     
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