<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Pegawai</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-image: url("https://i.pinimg.com/564x/7d/d0/98/7dd098dfcdc634798a5e56f025bb188e.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'system-ui';
        }
        main {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .form_wrapper {
            width: 100%;
            max-width: 300px;
            padding: 20px;
        }
        .form_class {
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            background-color: #FAF0E6;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        }
        .form_div > label {
            letter-spacing: 2px;
            font-size: 1rem;
        }
        .field_class {
            width: 100%;
            border-radius: 6px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        .submit_class {
            border: none;
            border-radius: 5px;
            background-color: #FFE6D4;
            padding: 8px 20px;
            text-transform: uppercase;
            letter-spacing: .8px;
            display: block;
            margin: auto;
            margin-top: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .class_hasil {
            width: 100%;
            width: 300px;
            max-width: 300px;
            padding: 20px;
            border-radius: 8px;
            background-color: #FAF0E6;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <main>
        <div class="form_wrapper">
            <form id="login_form" class="form_class" action="" method="post">
                <div class="form_div">
                    <label for="no_pegawai">No pegawai:</label>
                    <input class="field_class" name="no_pegawai" type="number" autofocus>
                    <button class="submit_class" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="class_hasil">
            <div class="hasil">
                <?php
                if (isset($_POST['submit'])) {
                    $no_pegawai = $_POST['no_pegawai'];
    $tanggal_lahir;
    $no_golongan;

    $no_golongan = substr($no_pegawai, 0, 1);
    $tanggal = substr($no_pegawai, 1, 2);
    $bulan = substr($no_pegawai, 3, 2);
    $tahun = substr($no_pegawai, 5, 4);
    $no_urutan = substr($no_pegawai, 9, 2);

    if($no_pegawai < 11){
        echo "no pegawai tidak sesuai";
    }
    elseif($bulan == "01"){
        echo "Januari";
    }
    elseif ($bulan == "02"){
        echo "Februari";
    }
    elseif ($bulan == "03"){
        echo "Maret";
    }
    elseif ($bulan == "04"){
        echo "April";
    }
    elseif ($bulan == "05"){
        echo "Mei";
    }
    elseif ($bulan == "06"){
        echo "Juni";
    }
    elseif ($bulan == "07"){
        echo "Juli";
    }
    elseif ($bulan == "08"){
        echo "Agustus";
    }
    elseif ($bulan == "09"){
        echo "September";
    }
    elseif ($bulan == "10"){
        echo "Oktober";
    }
    elseif ($bulan == "11"){
        echo "November";
    }
    else{
        echo "Desember";
    }

    $tanggal_lahir = $tanggal . $bulan . $tahun;

    echo "<br/>";
    echo "No Golongan :" .$no_golongan;
    echo "<br/>";
    echo "Tanggal Lahir :" .$tanggal_lahir;
    echo "<br/>";
    echo "No urutan :" .$no_urutan;
    echo "<br/>";
                    // ... (Kode PHP Anda tetap sama) ...
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>
