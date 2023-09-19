<?php
$siswa = [
    [
        "nama" => "salwa",
        "nis" => "12209407",
        "rombel" => "PPLG XI-5",
        "rayon" => "wikrama 4",
        "umur" => 17,
    ],
    [
        "nama" => "nabila",
        "nis" => "12209291",
        "rombel" => "PPLG XI-3",
        "rayon" => "ciawi 4",
        "umur" => 16,
    ],
    [
        "nama" => "fania",
        "nis" => "12208997",
        "rombel" => "PPLG XI-6",
        "rayon" => "tajur 3",
        "umur" => 17,
    ],
    [
        "nama" => "nisa",
        "nis" => "122088",
        "rombel" => "PPLG XI-6",
        "rayon" => "cicurug",
        "umur" => 18,
    ],
];


//fungsi nyari siswa yang 17+
function cariUsiaLebihDari17($siswa){
    $hasilCari = [];
    foreach ($siswa as $data){
        if ($data["umur"] >= 17){
            $hasilCari[] = $data;
        }
    }
    return $hasilCari;
}
function cariBerdasarkanNama($siswa, $namaCari){
    $hasilPencarian = [];
    foreach($siswa as $data){
        if ($data["nama"] == $namaCari){
            $hasilPencarian[] = $data;
    }
}
return $hasilPencarian;
}
if (isset($_POST["cariUsia"])){
    $hasilPencarian = cariUsiaLebihDari17($siswa);
}elseif (isset($_POST["cariNama"])) {
    $namaCari = $_POST["namaCari"];
    $hasilPencarian = cariBerdasarkanNama($siswa, $namaCari);
    usort($hasilPencarian, function($a, $b) {
        return $b["umur"] - $a["umur"];
    });
} else {
    $hasilPencarian = $siswa;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Pencarian siswa</title>
</head>
<body>
    <div class="card">
    <h1>Pencarian siswa</h1>
    <form method="post">
        <table>
            <tr>
                <td>Siswa yang lebih dari 17 tahun</td>
                <td><input type="submit" name="cariUsia" value="cari"></td>
            </tr>
            <tr>
                <td>Siswa berdasarkan nama</td>
                <td><input type="text" name="namaCari" type="password" autocomplete='off'>
                <td><input type="submit" name="cariNama" value="cari" ></td>
            </tr>
        </table>
    </form>
<p><strong>Hasil Pencarian :</strong></p>
        <div class="siswa-container">
            <?php foreach ($hasilPencarian as $siswa) : ?>
                <div class="siswa">
                    <ul>
                        <li>Nama: <?= $siswa["nama"] ?></li>
                        <li>Umur: <?= $siswa["umur"] ?> tahun</li>
                        <li>NIS: <?= $siswa['nis'] ?></li>
                        <li>Rombel: <?= $siswa['rombel'] ?></li>
                        <li>Rayon: <?= $siswa['rayon'] ?></li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <style>
        body{
            background-color: #EBE4D1;
        }
        .card{
            /* background: linear-gradient(170deg, #BC7AF9, #EADBC8, #64CCC5); */
            background-color: #F1EFEF;
            outline: auto;
            width: 550px;
            margin: 50px auto;
            margin-top: 170px;
            padding: 20px;
            border-radius: 15px;
        }
         h1{
            text-align: center;
        }
         .siswa-container {
            display: flex;
            flex-wrap: wrap;
        }
        .siswa {
            width: 30%; 
            padding: 15px;
            margin-left: 35px;
        }
        p{
            margin-left: 180px;
        }
        .siswa li {
            font-size: 15px;
        }
        .siswa ul {
            margin-top: -20px; 
        }
    </style>
</body>
</html>