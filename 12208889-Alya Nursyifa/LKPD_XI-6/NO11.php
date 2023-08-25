<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>No pegawai</td>
                <td>:</td>
                <td><input type="number" name="nopega"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $no_pegawai = $_POST['nopega'];
        $no_golongan = substr($no_pegawai, 0, 1);
        $tgl = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $thn = substr($no_pegawai, 5, 4);
        $no_urut = substr($no_pegawai, 9, 2);
        

        if($no_pegawai < 11){
            echo "No pegawai tidak sesuai";
        }elseif($bulan == "01"){
            echo "Januari";
        }elseif($bulan == "02"){
            echo "Februari";
        }elseif($bulan == "03"){
            echo "Maret";
        }elseif($bulan == "04"){
            echo "April";
        }elseif($bulan == "05"){
            echo "Mei";
        }elseif($bulan == "06"){
            echo "Juni";
        }elseif($bulan == "07"){
            echo "Juli";
        }elseif($bulan == "08"){
            echo "Agustus";
        }elseif($bulan == "09"){
            echo "September";
        }elseif($bulan == "10"){
            echo "Oktober";
        }elseif($bulan == "11"){
            echo "November";
        }else{
            echo "Desember";
        } echo "</br>";

        $ttl = $tgl . $bulan . $thn;
        
        echo "No golongan : " . $no_golongan . "</br>";
        echo "Tanggal lahir : " . $ttl . "</br>";
        echo "No urutan : " . $no_urut;
    }