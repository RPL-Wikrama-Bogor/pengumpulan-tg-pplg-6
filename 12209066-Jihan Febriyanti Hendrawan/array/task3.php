<?php

$siswa = [
    [
        "nama"=> "jihan",
        "nis"=> 12209066,
        "rombel"=> "PPLG XI-6",
        "rayon"=> "Cisarua 5",
        "umur"=> 16  
    ],
    [
        "nama"=> "murti",
        "nis"=> 12208992,
        "rombel"=> "PPLG XI-6",
        "rayon"=> "Tajur 2",
        "umur"=> 17
    ],
    [
        "nama"=> "wanda",
        "nis"=> 12203456,
        "rombel"=> "PPLG XI-6",
        "rayon"=> "Cicurug 7",
        "umur"=> 18
    ],
    [
        "nama"=> "nia",
        "nis"=> 12205478,
        "rombel"=> "PPLG XI-6",
        "rayon"=> "Cicurug 4",
        "umur"=> 17
    ]
    ];
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
         <form action="" method="post">
            <h2>Opsi Pencarian</h2>
            <ul>
                <li>
                    <a href="?cari=usia">Cari usia 17 atau lebih dari 17</a>
                </li>

                <li>
                    <div>
                    <p>Cari Berdasarkan nama</p>
                    </div>

                    <div>
                        <label for="nama"></label>
                        <input type="text" id= "nama" name= "nama">
                        <button type= "submit" name= "kirim">Submit</button>
                    </div>
                </li>
            </ul>
         </form>


         <?php
         if (isset($_GET['cari'])){
            $cari= $_GET['cari'];
            if ($cari=='usia'){
                echo "siswa yang berumur 17 atau siswa yang berumur lebih dari 17: ". "</br> </br>";

                foreach($siswa as $stdnt){
                    if($stdnt['umur']>= 17){
                        
                        echo "nama :". $stdnt['nama']. "<br>";
                        echo "nis :". $stdnt['nis']. "</br>";
                        echo "rombel :". $stdnt['rombel']. "</br>";
                        echo "rayon :". $stdnt['rayon']. "</br>";
                        echo "umur :". $stdnt['umur']. "</br>";
                        echo "<br>";
                    }
                }
            }
         }
         ?>
<hr>
<hr>
         <?php
          if(isset($_POST['kirim'])){
            $nama = strtolower($_POST['nama']);

             echo "nama yang di cari :". "<br><br>";

            foreach($siswa as $stdnt){
                if ($nama == strtolower($stdnt['nama'])){
                    echo "nama :". $stdnt['nama']. "<br>";
                    echo "nis :". $stdnt['nis']. "</br>";
                    echo "rombel :". $stdnt['rombel']. "</br>";
                    echo "rayon :". $stdnt['rayon']. "</br>";
                    echo "umur :". $stdnt['umur']. "</br>";
                    echo "<br>";
                }
            }
          }
         ?>


    </body>
    </html>

    