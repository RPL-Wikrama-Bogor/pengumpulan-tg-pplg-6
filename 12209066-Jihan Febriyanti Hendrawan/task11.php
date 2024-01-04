<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Pegawai</title>

    <style>
        body {
            background-color: pink;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        form {
            width: 88%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        table {
            width: 100%;
        }

        input[type="number"] {
            text-align: center;
            width: 100%;
            margin-left:20%;
        }

        td {
            padding: 8px;
            text-align: center;
        }

        input[type="submit"] {
            padding: 8px 20px;
            background-color: #EA1179;
            color: pink;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            margin-left:-285%;
        }

        .besar {
        font-size: 13px;
        color: #fff;
        text-align: center; /* Center-align text */
         }

        .gradasi {
            background: linear-gradient(to right, #ff6600, #ff3399);
            padding: 10px;
            border-radius: 5px;
            width: 80%; 
            margin: 10px auto; 
        }


        @media (max-width: 360px) { 
            form {
                margin: 0;
            }
        }

        .tekss{
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr> 
                <div style="text-align: center;">
                    <h2>Input Kode Pegawai</h2>
                </div>
                <td><input type="number" name="kode"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

<?php
$kode_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

    if (isset($_POST['submit'])) {
    $kode_pegawai = $_POST['kode'];

    if (strlen($kode_pegawai) < 11) {
        echo "<div class='tekss'>No Pegawai Tidak Sesuai</div>";
    } else {
        $no_golongan = substr($kode_pegawai, 0, 1);
        $tanggal = substr($kode_pegawai, 1, 2);
        $bulan = substr($kode_pegawai, 3, 2);
        $tahun = substr($kode_pegawai, 5, 4);
        $no_urutan = substr($kode_pegawai, 9, 2);

        if ($bulan == "01") {
            $bulan = "Januari";
        } elseif ($bulan == "02") {
            $bulan = "Februari";
        } elseif ($bulan == "03") {
            $bulan = "Maret";
        } elseif ($bulan == "04") {
            $bulan = "April";
        } elseif ($bulan == "05") {
            $bulan = "Mei";
        } elseif ($bulan == "06") {
            $bulan = "Juni";
        } elseif ($bulan == "07") {
            $bulan = "Juli";
        } elseif ($bulan == "08") {
            $bulan = "Agustus";
        } elseif ($bulan == "09") {
            $bulan = "Semptember";
        } elseif ($bulan == "10") {
            $bulan = "Oktober";
        } elseif ($bulan == "11") {
            $bulan = "november";
        } else {
            $bulan = "Desember";
        }

        echo "<br>";
        echo "<br>";

        $tanggal_lahir = " Tanggal " . $tanggal . " Bulan " . $bulan . " Tahun " . $tahun;
        echo "<div class='gradasi besar'>Kode Pegawai : " . $kode_pegawai . "</div></br>";
        echo "<div class='gradasi besar'>Nomor Golongan : " . $no_golongan . "</div></br>";
        echo "<div class='gradasi besar'>Tanggal Lahir : " . $tanggal_lahir . "</div></br>";
        echo "<div class='gradasi besar'>Nomor Urutan : " . $no_urutan . "</div></br>";
    }
}
?>

 </body>
 </html>
