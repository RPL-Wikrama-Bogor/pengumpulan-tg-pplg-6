<?php
$murid =
[
    [
        'nama' => 'Novwal Nur Havidz',
        'umur' => 17,
        'kelas' => 'PPLG XI-6',
        'nis' => 12209326,
    ],
    [
        'nama' => 'Brian Rangga',
        'umur' => 18,
        'kelas' => 'PPLG XI-6',
        'nis' => 12209322,
    ],
    [
        'nama' => 'Meidira Ayu Fasya',
        'umur' => 16,
        'kelas' => 'DKV XI-2',
        'nis' => 12209313,
    ],
    [
        'nama' => 'Rizkia',
        'umur' => 16,
        'kelas' => 'MPLB X-1',
        'nis' => 12209554,
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Nama Murid</title>
</head>
<body>
    <h1>Nama Siswa</h1>
    <a href="?umur=TRUE">Tampilkan Murid Berdasarkan Umurnya</a>
    <br>

    <?php

    if(isset($_GET['umur']))
    {
        foreach($murid as $key => $siswa)
        {
            echo $siswa['nama'] . "Umurnya: " . $siswa['umur'] . "Tahun";
        }
    }

    ?>
    <form action="" method="post">
        <h2>Lihat Data Murid</h2>
        <table>
            <tr>
                <td>
                    <tr>
                        <label for="nama">Cari Nama Murid:</label>
                    </tr>
                    <tr>
                        <input type="text" name="nama" id="nama" required>
                    </tr>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Lihat</button>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $nama = $_POST['nama'];
        $hasil = array_search($nama, array_column($murid, 'nama'));

        if($hasil !== false) 
        {
            $new = $murid[$hasil];
            if($new && $new['umur'] >= 17)
            {
                echo "Nama: " . $new['nama']. "| ";
                echo "Umur: " . $new['umur']. "| ";
                echo "Kelas: " . $new['kelas']. "| ";
                echo "NIS: " . $new['nis']. "| ";

            }else{
                echo 'Umur Murid Kurang dari 17 Tahun!';
            }
        } else {
            echo 'Murid Tidak Ditemukan';
        }
    }
    ?>
</body>
</html>