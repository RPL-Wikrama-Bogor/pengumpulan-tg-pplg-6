<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 11</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: white;
        }

        form .no {
            text-align: center;
            color: gray;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: gray;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: black;
        }
    </style>

</head>
<body>
    <form method="post">
        <h3 class="no">Masukan No pegawai</h3>
        <input type="number" name="no" placeholder="ggddmmyyyynn">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php 
    if (isset($_POST['submit'])) {

        $no_pgwy = $_POST['no'];
        
        if (strlen($no_pgwy) > 12) {
            echo "<script>alert ('No pegawai tidak sesuai, silahkan input ulang!!');
            </script>";
              die;
            }
        if (strlen($no_pgwy) < 12) {
            echo "<script>alert ('No pegawai tidak sesuai, silahkan input ulang!!');
            </script>";
            die;
        }

        $no_glngan = substr($no_pgwy, 0, 2);
        $tanggal = substr($no_pgwy, 2, 2);
        $bulan = substr($no_pgwy, 4, 2);
        $tahun = substr($no_pgwy, 6, 4);
        $no_urtn = substr($no_pgwy, 10, 2);

        if ($no_glngan > 12) {
            echo "<script>alert ('No pegawai tidak sesuai, silahkan input ulang!!');
            </script>";
            die;
        }

        

        switch ($bulan) {
            case 1:
                $bulan = "januari";
                break;
            
            case 2:
                $bulan = "february";
                break;
            
            case 3:
                $bulan = "maret";
                break;
            
            case 4:
                $bulan = "april";
                break;
            
            case 5:
                $bulan = "mei";
                break;
            
            case 6:
                $bulan = "juni";
                break;
            
            case 7:
                $bulan = "juli";
                break;
            
            case 8:
                $bulan = "agustus";
                break;
            
            case 9:
                $bulan = "september";
                break;
            
            case 10:
                $bulan = "oktober";
                break;
            
            case 11:
                $bulan = "november";
                break;
            case 12:
                $bulan = "desember";
                break;
            
            default:
                "bulann tidak sesaui";
                die;
                break;
        }

        $tanggal_lhr = $tanggal . $bulan . $tahun;?>
        <center>
        <?php
        echo "No Golongan : $no_glngan <br>";
        echo "Tanggal Lahir : $tanggal_lhr <br>";
        echo "No Urutan : $no_urtn";
        
    }

    
?>