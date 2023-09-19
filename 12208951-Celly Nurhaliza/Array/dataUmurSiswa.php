<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Cari data siswa</h2>
    <ul>
        <li>Celly</li>
        <li>Amel</li>
        <li>Nia</li>
    </ul>
    <?php
    $data = [
        [
            "Nama" => "Celly",
            "Usia" => 16,
            "Rombel" => "PPLG XI-6",
            "Rayon" => "Cisarua 5"
        ],
        [
            "Nama" => "Amel",
            "Usia" => 17,
            "Rombel" => "MPLB XI-6",
            "Rayon" => "Cicurug 10"
        ],
        [
            "Nama" => "Nia",
            "Usia" => 18,
            "Rombel" => "PPLG XI-7",
            "Rayon" => "Tajur 7"
        ]
    ];
    ?>
    <form action="" method="post">
        <label for="nama">Nama siswa</label><br>
        <input id="nama" name="nama" type="text"><br><br>

        <input type="submit" name="submit" value="Cari">
    </form><br>
    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST["nama"];
        $hasilNama = array_search($nama, array_column($data, 'Nama'));
        
        if($hasilNama !== false){
            $new = $data[$hasilNama];
            
            if($new['Usia'] >= 17){
                echo "Nama : ".$new['Nama']."<br>";
                echo "Usia : ".$new['Usia']."<br>";
                echo "Rombel : ".$new['Rombel']."<br>";
                echo "Rayon : ".$new['Rayon'];
            } else {
                echo "Umur siswa kurang dari 17 tahun";
            }
        } else {
            echo "Data siswa tidak ditemukan";
        }
    }
    ?>
</body>
</html>
