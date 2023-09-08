<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 11</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 320px;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 10px;
            margin: 8px 0;
            width: 93%;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus {
            border-color: #007bff;
        }

        button[type="submit"] {
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
        }

        @media only screen and (max-width: 410px) {
            .container{
                width: 70%;

            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Informasi Pegawai</h2>
        <form action="" method="post">
            <input type="number" name="noPegawai" placeholder="No. Pegawai (11 digit)" maxlength="11" onKeyPress="if( this.value.length == 11 ) return false;">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <div class="result">
            <?php
                if(isset($_POST['submit'])){

                    $noPegawai = $_POST['noPegawai'];

                    if(strlen($noPegawai) > 11){
                        echo "No. Pegawai tidak sesuai";
                        die;
                    }else if(strlen($noPegawai) < 11){
                        echo "No. Pegawai tidak sesuai";
                        die;
                    }
                
                    
                    
                
                    $noGolongan = substr($noPegawai, 0, 1);
                    $tanggal = substr($noPegawai, 1, 2);
                    $bulan = substr($noPegawai, 3, 2);
                    $tahun = substr($noPegawai, 5, 4);
                    $noUrutan = substr($noPegawai, 9, 2);
                
                    if($noGolongan > 4){
                        echo "No. Golongan tidak sesuai!, input ulang";
                        die;
                    }
                
                
                    switch( $bulan ){
                        case 1 : 
                            $bulan = "Januari";
                            break;
                        case 2 : 
                            $bulan = "Februari";
                            break;
                        case 3 : 
                            $bulan = "Maret";
                            break;
                        case 4 : 
                            $bulan = "April";
                            break;
                        case 5 : 
                            $bulan = "Mei";
                            break;
                        case 6 : 
                            $bulan = "Juni";
                            break;
                        case 7 : 
                            $bulan = "Juli";
                            break;
                        case 8 :
                            $bulan = "Agustus";
                            break;
                        case 9 :
                            $bulan = "September";
                            break;
                        case 10 : 
                            $bulan = "Oktober";
                            break;
                        case 11 : 
                            $bulan = "November";
                            break;
                        case 12 : 
                            $bulan = "Desember";
                            break;
                        default: 
                            echo "Input ulang! bulan tidak sesuai";
                            die;
                            break;
                    }
                
                
                    $tanggalLahir = " $tanggal $bulan $tahun";
                
                    echo "<br>No. Gologan: ".$noGolongan . "<br>";
                    echo "Tanggal Lahir: ". $tanggalLahir. "<br>";
                    echo "No. Urutan: ". $noUrutan. "<br>";
                
                }
            ?>
        </div>
    </div>
</body>
</html>



