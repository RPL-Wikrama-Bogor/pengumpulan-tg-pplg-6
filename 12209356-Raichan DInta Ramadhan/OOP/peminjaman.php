<!DOCTYPE html>
<html lang="en">
<head>
    <title>Peminjaman motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 600px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        table td {
            padding: 10px;
            text-align: right;
        }

        table select, table input[type="text"], table button {
            padding: 5px;
            font-size: 16px;
            width: 90%;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        table select, table input[type="number"], table button {
            padding: 5px;
            font-size: 16px;
            width: 90%;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        table select {
            text-align: left;
        }

        table tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            width: 500px;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <center>
        <h2>Rental Motor</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama pelanggan</td>
                    <td>:</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>Lama Waktu Rental (perhari)</td>
                    <td>:</td>
                    <td><input type="number" name="time"></td>
                </tr>
                <tr>
                    <td>Jenis Motor</td>
                    <td>:</td>
                    <td>
                        <select name="pilihan">
                            <option hidden>Pilih Peminjaman</option>
                            <option value="sport">Motor Sport</option>
                            <option value="matic">Motor Matic</option>
                            <option value="listrik">Motor Listrik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
        <?php   if (isset($_POST['submit'])) { ?>
        <div class="result">    
        <?php
            if(isset($_POST['submit'])){

                $hasil = new user();
                $nama = $_POST['name'];
                $jenis = $_POST['pilihan'];
                $hari = $_POST['time'];
            
                switch($jenis) {
                    case "sport" :
                        $harga = $hasil->sport;
                        break;
                    case "matic" : 
                        $harga = $hasil->matic;
                        break;
                    case "listrik" : 
                        $harga = $hasil->listrik;
                        break;
                    default :
                        $harga = 0;
                        break;
                }
                echo $hasil->userMember($harga, $jenis, $hari);
            }
        }
        ?>
    </center>
</body>
</html>


<?php

class Rental {

    protected $user = ['asep', 'raichan', 'dante'];
    
    public      $sport = 500000,
                $matic = 300000,
                $listrik = 100000;

    protected   $pajak = 10000,
                $diskon = 5/100;

}


class user extends Rental{

    public function userMember($harga, $pilihan, $hari)
    {
        $result = $harga * $hari + $this->pajak;

        $isMember = false;

        foreach($this->user as $data){
            if($data == $_POST['name']){
                $isMember = true; 
                break;
            }
        }
        if ($isMember) {
            // Pengguna adalah anggota
            $result = $result - ($result * $this->diskon);
            echo $_POST['name'] . " berstatus sebagai Member mendapat diskon sebesar 5% <br>";
        } else {
            // Pengguna bukan anggota
            echo $_POST['name'] . " berstatus sebagai Non Member mendapat diskon sebesar 0% <br>";
        }
        echo "Jenis motor yang dirental adalah " . $pilihan . " selama $hari hari<br>";
        echo "harga rental per-harinya adalah : Rp. " . number_format($harga, 0, ',', '.') . "<br><br>";
        echo "besar yang harus di bayarkan adalah : Rp. " . number_format($result, 0, ',', '.');
    }    
}
?>
</div>