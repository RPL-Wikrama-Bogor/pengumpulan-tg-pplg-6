<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input No Pegawai</title>
</head>
<body>
<h3>Input No.pegawai</h3>
<form action="" method="post">
        <table>
            <tr>
                <td><label for="">No Pegawai</label></td>
                <td><input type="number" name="no_pegawai"></td>
            </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>

    <br>

    <?php
    if(isset($_POST['submit'])){
        $no_pegawai = $_POST['no_pegawai'];

        if($no_pegawai > 11 && $no_pegawai < 11){
            echo "Error guys";
        }

        $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $tahun = substr($no_pegawai, 5, 4);
        $no_urutan = substr($no_pegawai, 9, 2);

        if ($bulan == 1) {
            $bulan = "Januari";
        } else if ($bulan == 2) {
            $bulan = "Februari";
        } else if ($bulan == 3) {
            $bulan = "Maret";
        } else if ($bulan == 4) {
            $bulan = "April";
        } else if ($bulan == 5) {
            $bulan = "Mei";
        } else if ($bulan == 6) {
            $bulan = "Juni";
        } else if ($bulan == 7) {
            $bulan = "Juli";
        } else if ($bulan == 8) {
            $bulan = "Agustus";
        } else if ($bulan == 9) {
            $bulan = "September";
        } else if ($bulan == 10) {
            $bulan = "Oktober";
        } else if ($bulan == 11) {
            $bulan = "November";
        } else if ($bulan == 12) {
            $bulan = "Desember";
        }

        $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
        
        echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
        echo "No golongan: " . $no_golongan . "<br>";
        echo "No urutan: " . $no_urutan . "<br>";



    }
    ?>
    
</body>
</html>