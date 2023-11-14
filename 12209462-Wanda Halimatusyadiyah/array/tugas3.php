<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<style>
        body{
        background-color: #EADBC8;
        background-repeat: no-repeat;
        background-size:cover;
        font-family:  'sans-serif';
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        form {
        background-color: #DAC0A3;
        border-radius: 25px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
         width: 300px;
        }

        label {
        display: block;
        margin-bottom: 15px;
        border-radius: 30px;
        font-weight: bold;

        }

       
    </style>

<body>
    <form action="#" method= "post">
     <td>Umur lebih dari 17</td>
        <input type="submit" name="nama" id="cari_nama"><br><br>
        
        <label for="nama">Masukan Nama Nama:</label>
        <input type="text" name="nama"><br><br>
        <input type="submit" name="submit2" id="nama">

        </form>
</body>
<center>
</html>

<?php
    $siswa = [
        [
            "nama" => "wanda",
            "nis" => 12209462,
            "rombel" => "pplg x-1",
            "umur" => "16"
        ],

        [
            "nama" => "murti",
            "nis" => 12209288,
            "rombel" => "pplg x-2",
            "umur" => "15"
        ],

        [
            "nama" => "jihan",
            "nis" => 12209066,
            "rombel" => "pplg x-3",
            "umur" => "17"
        ],

        [
            "nama" => "awittia",
            "nis" => 12200431,
            "rombel" => "pplg x-4",
            "umur" => "18"
        ],

        [
            "nama" => "budi",
            "nis" => 12209689,
            "rombel" => "dkv x-4",
            "umur" => "19"
        ]


        ];

        $namatidakada = true;
    if(isset($_POST['nama'])) {

        foreach ($siswa as $key => $umur) {
            if ($umur['umur'] >= 17){
                echo $umur['nama'] . "<br>";
            }
        }
    }
    if (isset($_POST['submit2'])) {
        $nama = $_POST['nama'] ;
 
        foreach ($siswa as $key => $i) {
            if ($i['nama'] == $nama) {
                echo "<br> nama: ". $i['nama']; 
                echo "<br> nis: ". $i['nis']; 
                echo "<br> rombel: ". $i['rombel']; 
                echo "<br> umur: ". $i['umur']; 
                $namatidakada = false;
            }
        }

        if ($namatidakada) {
            echo "nama " . "$nama" . " tidak ditemukan ";
        }
    }
       


?>