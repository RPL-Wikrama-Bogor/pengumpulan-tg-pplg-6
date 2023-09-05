<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 11</title>
    <style>
        /* Apply some basic styling to the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 450px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #f7f7f7;
        }

        /* Style the input and button */
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        @media only screen and (max-widht: 410px) {
            .container{
                widht: 70%;
            }
        } 
    </style>
</head>
<body>
    <form action="" method="post">
        <div style="text-align: center;">
            <h2>Form Input Nomor Pegawai</h2>
            <input type="number" name="no_pegawai" placeholder="Masukkan nomor pegawai">
            <br>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    $no_pgwi = $_POST['no_pegawai'];
     
    if(strlen($no_pgwi) > 11) {
        echo "no pegawai tidak sesuai";
        die;
    }

    $no_golongan = substr($no_pgwi, 0, 1);
    $tanggal = substr($no_pgwi, 1, 2);
    $bulan = substr($no_pgwi, 3, 2);
    $tahun = substr($no_pgwi, 5, 4);
    $no_urutan = substr($no_pgwi, 9, 2);

    $bulanNames = [
        1 => "januari", "februari", "maret", "april",
        "mei", "juni", "juli", "agustus",
        "september", "oktober", "november", "desember"
    ];

    if ($bulan >= 1 && $bulan <= 12) {
        $bulan = $bulanNames[$bulan];
    } else {
        $bulan = "bulan tidak sesuai";
    }

    $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;

    echo "No Golongan : $no_golongan <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "No Urutan : $no_urutan ";
}
?>
