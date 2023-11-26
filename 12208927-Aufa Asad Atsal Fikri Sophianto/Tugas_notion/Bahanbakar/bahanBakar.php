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

        center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        table tr {
            border-bottom: 1px solid #ddd;
        }

        table tr:last-child {
            border-bottom: none;
        }

        td {
            padding: 10px;
            text-align: right;
        }

        td:first-child {
            text-align: left;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #0074D9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            text-align: center;
            margin-top: -900px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <center>
    <h2>Bahan Bakar</h2>
    <table>
        <form action="" method="post">
            <tr>
                <td>Masukan Jumlah Liter</td>
                <td>:</td>
                <td><input type="number" name="liter"></td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="bahanBakar">
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
</center>

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
        echo "Anda Membeli Bahan Bakar Minyak : ". $_POST['bahanBakar'] . "<br>";
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
?>
</div>
</center>