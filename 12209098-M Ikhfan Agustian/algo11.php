<!DOCTYPE html>
<html>
<head>
    <title>Informasi Pegawai</title>
</head>
<body>
    <h1>Informasi Pegawai</h1>
    <form method="post" action="">
        Masukkan Kode Pegawai: <input type="text" name="kode_pegawai">
        <input type="submit" name="submit" value="Cari">
    </form>
    <br>

    <?php
    function getMonthName($monthNumber) {
        $months = [
            1 => "JANUARI",
            2 => "FEBRUARI",
            3 => "MARET",
            4 => "APRIL",
            5 => "MEI",
            6 => "JUNI",
            7 => "JULI",
            8 => "AGUSTUS",
            9 => "SEPTEMBER",
            10 => "OKTOBER",
            11 => "NOVEMBER",
            12 => "DESEMBER"
        ];
        return $months[$monthNumber];
    }

    function parseKodePegawai($kodePegawai) {
        $golongan = substr($kodePegawai, 0, 1);
        $tanggal = substr($kodePegawai, 1, 2);
        $bulan = substr($kodePegawai, 3, 2);
        $tahun = substr($kodePegawai, 5, 4);
        $nomorUrut = substr($kodePegawai, 9);

        return [
            'golongan' => $golongan,
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'nomorUrut' => $nomorUrut
        ];
    }

    if (isset($_POST['submit'])) {
        $kodePegawai = $_POST['kode_pegawai'];
        $parsedData = parseKodePegawai($kodePegawai);

        echo "Nomor Golongan: " . $parsedData['golongan'] . "<br>";
        echo "Tanggal Lahir: " . $parsedData['tanggal'] . " " . getMonthName((int)$parsedData['bulan']) . " " . $parsedData['tahun'] . "<br>";
        echo "Nomor Urut: " . $parsedData['nomorUrut'] . "<br>";
    }
    ?>
</body>
</html>