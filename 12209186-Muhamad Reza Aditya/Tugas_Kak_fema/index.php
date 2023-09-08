<?php

$dataDiri = [
    [
        "nama" => "Muhamad Reza Aditya",
        "nis" => 12209186,
        "rombel" => "PPLG XI-6",
        "umur" => 17
    ],
    [
        "nama" => "Hendra Rusferisyah",
        "nis" => 12209186,
        "rombel" => "PPLG XI-6",
        "umur" =>17
    ],
    [
        "nama" => "Raichan Dinta Ramdhan",
        "nis" => 12209186,
        "rombel" => "PPLG XI-6",
        "umur" =>16
    ],
    [
        "nama" => "Abdul Dinta Rusmana",
        "nis" => 12209186,
        "rombel" => "PPLG XI-6",
        "umur" =>17
    ],
    [
        "nama" => "Raichan Jabar Putra",
        "nis" => 12209186,
        "rombel" => "PPLG XI-6",
        "umur" =>15
    ],
];

foreach($dataDiri as $item){
    echo $item['nama']. " : ";
    echo $item['umur']." tahun<br><br> ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas_kak_fema</title>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <form action="" method="post">
            <tr>
                <td>Cari Berdasarkan Umur</td>
                <td><input type="submit" value="Cari" name="umur"></td>
            </tr>
        </form>
    </table>

    <?php if(isset($_POST['umur'])) :?>
        <?php foreach($dataDiri as $key => $listData):?>
            <?php if($listData['umur'] >= 17):?>
                <p>Nama : <?= $listData["nama"]; ?></p>
                <p>NIS : <?= $listData["nis"]; ?></p>
                <p>Rombel : <?= $listData["rombel"]; ?></p>
                <p>Umur : <b><?= $listData["umur"]; ?></b></p>
                <hr>
            <?php endif;?>
        <?php endforeach;?>
    <?php endif;?>


    <br><table border="1" cellpadding="10" cellspacing="0">
        <form action="" method="post">
            <td colspan="3"><center>Cari Melalui Inputan</center></td>
            <tr>
                <td><input type="text" name="nama"></td>
                <td><input type="submit" value="Cari" name="cariNama"></td>
            </tr>
        </form>
    </table>


    <?php if(isset($_POST['cariNama'])) :?>

        <?php $nama = $_POST['nama']; ?>

        <?php foreach($dataDiri as $key => $listData):?>
            <?php if($listData['nama'] == $nama):?>
                <p>Nama : <?= $listData["nama"]; ?></p>
                <p>NIS : <?= $listData["nis"]; ?></p>
                <p>Rombel : <?= $listData["rombel"]; ?></p>
                <p>Umur : <b><?= $listData["umur"]; ?></b></p>
                <hr>
            <?php break; else:?>
                <p>Data tidak ditemukan</p>
            <?php break; endif;?>
        <?php endforeach;?>
    <?php endif;?>


</body>
</html>
