<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rental motor</title>
</head>
<body>
    <center>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Masukan Nama : </td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Sewa Untuk Berapa Hari :</td>
                    <td>
                        <input type="number" name="hari" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe Motor :</td>
                    <td>
                        <select name="jenis" required>
                        <option hidden disable selected>pilih jenis motor</option>
                            <option value="scoopy">Scoopy</option>
                            <option value="beat">Beat</option>
                            <option value="vario">Vario</option>
                            <option value="aerox">Aerox</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Sewa" name="kirim"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>

<?php
include 'proses.php';
$proses = new sewa();
$proses->setharga(100000, 150000, 160000, 200000);
if (isset($_POST['kirim'])) {
    $proses->lama = $_POST['hari'];
    $proses->jenis = $_POST['jenis'];
    $proses->pengguna = $_POST['nama'];

    $proses->cetakPembelian();
}
?>