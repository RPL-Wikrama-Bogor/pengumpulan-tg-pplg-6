<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
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
            color: #007bff; 
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 600px;
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        table td {
            padding: 10px;
            text-align: right;
        }

        table select, table input[type="number"], table button {
            padding: 5px;
            font-size: 16px;
            width: 100%;
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
            border: none; 
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
    <h2>Bahan Bakar</h2>
    <table>
        <form action="" method="post">
            <tr>
                <td>Masukan Jumlah Liter</td>
                <td>:</td>
                <td><input type="number" name="liter" required></td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="bahanBakar" required>
                        <option hidden>Pilih bahan bakar</option>
                        <option value="Shell Super">Shell Super</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="button">Beli</button></td>
            </tr>
        </form>
    </table>
</body>
</html>
<?php   if (isset($_POST['button'])) { ?>
<center>
<div class="result">
<?php

class Shell{
    
    public  $Shell_Super = 15420,
            $Shell_V_Power = 16130,
            $Shell_V_Power_Diesel = 18310,
            $Shell_V_Power_Nitro = 16510;

    public $PPN =10/100;

}

class Beli extends Shell{

    public function hitung($harga, $jumlah)
    {
        $hAkhir = $harga * $jumlah + ($harga * $jumlah * $this->PPN);
        echo "Anda Membeli Bahan Bakar Minyak ". $_POST['bahanBakar'] . "<br>";
        echo "Dengan Jumlah : $jumlah Liter<br>";
        echo "Total Yang Harus Anda bayar : Rp." . number_format($hAkhir, 0, ',', '.'). ",-";
    }
}


if(isset($_POST['button'])){

    $shell = new Beli();

    $bahanBakar = $_POST['bahanBakar'];
    $jumlah = $_POST['liter'];

    switch($bahanBakar){
        case "Shell Super" : 
            $harga = $shell->Shell_Super;
            break;
        case "Shell V-Power" : 
            $harga = $shell->Shell_V_Power;
            break;
        case "Shell V-Power Diesel" : 
            $harga = $shell->Shell_V_Power_Diesel;
            break;
        case "Shell V-Power Nitro" : 
            $harga = $shell->Shell_V_Power_Nitro;
            break;
        default : 
            $harga = 0;
            break;
    }

    echo $shell->hitung($harga, $jumlah);
}
}
?>
</div>
</center>