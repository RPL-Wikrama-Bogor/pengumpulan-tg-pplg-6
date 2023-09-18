<?php
$siswa = [
    [
        "nama" => "awittia",
        "nis" => "12208931",
        "rombel" => "pplg xi-6",
        "rayon" => "cicurug 3",
        "umur" => "17",
    ],
    [
        "nama" => "celly",
        "nis" => "12208951",
        "rombel" => "pplg xi-6",
        "rayon" => "Cisarua 5",
        "umur" => "17",
    ],
    [
        "nama" => "wanda",
        "nis" => "12209462",
        "rombel" => "pplg xi-6",
        "rayon" => "cicurug 7",
        "umur" => "16",
    ],
    [
        "nama" => "Alya",
        "nis" => "12208889",
        "rombel" => "pplg xi-6",
        "rayon" => "Cicurug 6",
        "umur" => "17",
    ],
];

function UmurYangLebihDari17($siswa) {
    $hasil = [];
    foreach ($siswa as $data){
        if ($data['umur'] >= 17) {
            $hasil[] = $data;
        }
    }
    return $hasil;
}

$hasil = [];


if (isset($_GET['UmurYangLebihDari16']) && $_GET['UmurYangLebihDari16'] == 1) {
    $hasil = UmurYangLebihDari17($siswa);
}

function carisiswaberdasarkannama($siswa, $nama) {
    $hasil = [];
    foreach ($siswa as $data){
        if (strtolower($data['nama']) == strtolower($nama)) {
            $hasil[] = $data;
        }
    }
    return $hasil;
}

if (isset($_POST['submit'])) {
    $namacari = $_POST['nama'];
    if (!empty($namacari)) {
        $hasil = carisiswaberdasarkannama($siswa, $namacari);
    } else {
        $hasil = [];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Siswa</title>
</head>
<body>
    <h1>Cari Data Siswa</h1>

    <form action="" method="post">
        <ol>
            <li>
                <a href="?UmurYangLebihDari16=1">Cari Yang Sudah Berusia 17 Tahun atau Lebih</a> 
            </li>
            <li>
                <label for="nama">Cari berdasarkan nama:</label>
                <input type="text" name="nama" id="nama">
                <button type="submit" name="submit">Cari</button>
            </li>
        </ol>
    </form>

    <?php if (isset($hasil) && !empty($hasil)) : ?>
        <?php if (isset($_GET['UmurYangLebihDari16']) && $_GET['UmurYangLebihDari16'] == 1) : ?>
            <h2>Hasil Pencarian Umur 17 Tahun atau Lebih:</h2>
            <ul>
                <?php foreach ($hasil as $siswa) : ?>
                    <li>
                        Nama: <?php echo $siswa['nama']; ?><br>
                        Umur: <?php echo $siswa['umur']; ?><br>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php else : ?>
            <h2>Hasil Pencarian Berdasarkan Nama:</h2>
            <ul>
                <?php foreach ($hasil as $siswa) : ?>
                    <li>
                        Nama: <?php echo $siswa['nama']; ?><br>
                        NIS: <?php echo $siswa['nis']; ?><br>
                        Rayon: <?php echo $siswa['rayon']; ?><br>
                        Rombel: <?php echo $siswa['rombel']; ?><br>
                        Umur: <?php echo $siswa['umur']; ?><br>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <?php elseif (isset($hasil) && empty($hasil)) : ?>
        <p>Data siswa tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
