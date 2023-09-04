<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            padding: 50px; /* Adjust padding for smaller screens */
            background-image: url("https://i.pinimg.com/564x/4a/ab/58/4aab58e0e0bd778350ee5a2f3715b9d7.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0; /* Remove default margin */
            font-family: sans-serif;
        }

        #feedback-form {
            width: 100%; /* Use full width for small screens */
            max-width: 400px; /* Limit maximum width */
            margin: 0 auto;
            background-color: #fcfc;
            padding: 25px;
            box-shadow: 1px 4px 10px 1px #aaa;
            border-radius: 15px;
        }

        #feedback-form * {
            box-sizing: border-box;
        }

        h2 {
            color: #FE7BE5;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            background-color: #FE7BE5;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <title>Responsive Form</title>
</head>
<body>
    <div id="feedback-form">
        <h2 class="header">Input</h2>
        <form action="" method="post">
            <input type="number" name="pegawai" placeholder="Enter a number">
            <input type="submit" value="Submit" name="submit">
        </form>

<?php
 $pegawai;
 $golongan;
 $tanggal;
 $bulan;
 $tahun;
 $urutan;
 $tanggal_lahir;

    if (isset($_POST['submit'])) {
        $pegawai = $_POST['pegawai'];

        $golongan = substr ($pegawai , 0, 1);
        $tanggal = substr ($pegawai, 1, 2);
        $bulan = substr ($pegawai ,3, 2);
        $tahun = substr ($pegawai, 5,4);
        $urutan = substr ($pegawai, 9, 2);

        if ($pegawai < 11){
            echo "no pegawai tidak sesuai";
        } else if($bulan == "01"){
            $bulan = " januari ";
        } else if ($bulan == "02") {
            $bulan = " februari ";
        } else if ($bulan == "03") {
            $bulan = " maret ";
        } else if ($bulan == "04") {
            $bulan = "april ";
        } else if ($bulan == "05") {
            $bulan = " mei ";
        } else if ($bulan == "06") {
            $bulan = " juni ";
        } else if ($bulan == "07") {
            $bulan = "juli ";
        } else if ($bulan == "08") {
            $bulan = " agustus ";
        } else if ($bulan == "09") {
            $bulan = " september ";
        } else if ($bulan == "10") {
            $bulan = " oktober ";
        } else if ($bulan == "11") {
            $bulan = " november ";
        } else ($bulan = "desember");

        $tanggal_lahir = $tanggal. $bulan. $tahun;
        echo "<br>";

        echo " no golongan " . $golongan; 
        echo "<br>";
        echo "tanggal lahir " . $tanggal_lahir;
        echo "<br>";
        echo "no urutann " . $urutan;
        echo "<br>";
    }


?>
    
</body>
</html>