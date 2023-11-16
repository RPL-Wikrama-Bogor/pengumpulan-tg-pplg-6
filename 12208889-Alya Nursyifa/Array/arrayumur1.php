<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Siswa</h1>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
    </tr>
    <?php
    $data = [
        [
            "nama" => "Alya Nursyifa",
            "nis" => "12208889",
            "rombel" => "PPLG XI-6",
            "rayon" => "Cicurug 6",
            "umur" => 16,
        ],
        [
            "nama" => "Feitan",
            "nis" => "12208989",
            "rombel" => "PPLG XI-1",
            "rayon" => "Cisarua 6",
            "umur" => 20,
        ],
        [
            "nama" => "Kuromi",
            "nis" => "12207890",
            "rombel" => "PPLG XI-5",
            "rayon" => "Tajur 3",
            "umur" => 13,
        ],
    ];

    foreach($data as $siswa){
        echo '<tr>';
        echo '<td>' . $siswa['nama'] . '</td>';
        echo '<td>' . $siswa['umur'] . '</td>';
        echo '</tr>';
    }
    ?>
</table><br>
    <form action="" method="GET">
        <table>
            <tr>
                <td>Umur siswa yang lebih dari 17th</td>
                <td>:</td>
                <td><input type="submit" name="umur"  value="Cari"></td>
            </tr>
            <tr>
                <td>Cari data diri siswa</td>
                <td>:</td>
                <td><input type="text" name="dataDiri" ></td>
                <td><input type="submit" name="cari" value="Cari"></td>
            </tr>
        </table>
        <?php
        if(isset($_GET['umur'])){
            echo '<h1>Umur siswa yang lebih dari 17th</h1>';
            echo '<ul>';
            foreach($data as $siswa){
                if($siswa['umur'] > 17){
                    echo $siswa['nama'] . " berumur lebih dari 17 tahun";
                }
            }
            echo '</ul>';
        }elseif(isset($_GET['dataDiri'])){
            $namaCari = $_GET['dataDiri'];
            echo '<h1>Data Diri Siswa</h1>';
            echo '<ul>';
            foreach($data as $siswa){
                if(strtolower($siswa['nama']) == strtolower($namaCari)){
                    echo 'Nama: ' . $siswa['nama'] . ' <br> NIS: ' . $siswa['nis'] . '<br> Rombel: ' . $siswa['rombel'] . '<br> Rayon: ' . $siswa['rayon'] . '';
                }
            }
            echo '</ul>';
        }?>
    </form>
</body>
</html>
