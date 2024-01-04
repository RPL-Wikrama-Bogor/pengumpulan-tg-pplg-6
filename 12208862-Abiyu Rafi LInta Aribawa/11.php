<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form method="POST" action="">
            <table>
                <tr>
                    <td>No Pegawai</td>
                    <td><input type="number" value="kode pegawai" name="bilangan" maxlength="11" onKeyPress="if( this.value.length == 11 ) return false;"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </table>
            <?php
            if (isset($_POST['submit'])) {
                $kodepegawai = $_POST['bilangan'];
                if (strlen($kodepegawai) < 11) {
                    echo "Panjang nomor pegawai tidak sesuai";
                } else {
                    $golongan = substr($kodepegawai, 0, 1);
                    $tanggal = substr($kodepegawai, 1, 2);
                    $bulan = substr($kodepegawai, 3, 2);
                    $tahun = substr($kodepegawai, 5, 4);
                    $urutan = substr($kodepegawai, 12, 1);
                    $nama_bulan = "";
                    if ($bulan == "01") {
                        $nama_bulan = "Januari";
                    } elseif ($bulan == "02") {
                        $nama_bulan = "Februari";
                    } elseif ($bulan == "03") {
                        $nama_bulan = "Maret";
                    } elseif ($bulan == "04") {
                        $nama_bulan = "April";
                    } elseif ($bulan == "05") {
                        $nama_bulan = "Mei";
                    } elseif ($bulan == "06") {
                        $nama_bulan = "Juni";
                    } elseif ($bulan == "07") {
                        $nama_bulan = "Juli";
                    } elseif ($bulan == "08") {
                        $nama_bulan = "Agustus";
                    } elseif ($bulan == "09") {
                        $nama_bulan = "September";
                    } elseif ($bulan == "10") {
                        $nama_bulan = "Oktober";
                    } elseif ($bulan == "11") {
                        $nama_bulan = "November";
                    } elseif ($bulan == "12") {
                        $nama_bulan = "Desember";
                    }
                    $tanggal_lahir = "$tanggal $nama_bulan $tahun";
                    echo "Nomor Golongan: $golongan<br>";
                    echo "Tanggal Lahir: $tanggal_lahir <br>";
                    echo "Nomor Urut Pegawai: $urutan<br>";
                }
            }
            ?>

        </form>
    </div>

</body>

</html>