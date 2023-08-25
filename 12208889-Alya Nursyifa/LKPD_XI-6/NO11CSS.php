<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/564x/8f/53/86/8f53862ef5e9a776a6761812cb92a96b.jpg');
            /* background-repeat : no-repeat;
            background-size : cover;
            background-attachment : flex; */
            /* background-color: #f4f4f4; */
        }
        
        form {
            background: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            margin-top : 10%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        table {
            width: 100%;
        }
        
        table tr {
            margin-bottom: 10px;
        }
        
        table td:first-child {
            width: 30%;
            padding-right: 10px;
            text-align: right;
        }
        
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .tampil{
            margin-top: 20px;
            text-align : center;
        }
        
        @media screen and (max-width: 480px) {
            form {
                padding: 10px;
            }
            
            table td {
                display: block;
                text-align: left;
            }
            
            input[type="number"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>No pegawai</td>
                <td>:</td>
                <td><input type="number" name="nopega"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $no_pegawai = $_POST['nopega'];
        $no_golongan = substr($no_pegawai, 0, 1);
        $tgl = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $thn = substr($no_pegawai, 5, 4);
        $no_urut = substr($no_pegawai, 9, 2);
?>

        <div class="tampil">
        <?php
        if($no_pegawai < 11){
            echo "No pegawai tidak sesuai";
        }elseif($bulan == "01"){
            echo "Januari";
        }elseif($bulan == "02"){
            echo "Februari";
        }elseif($bulan == "03"){
            echo "Maret";
        }elseif($bulan == "04"){
            echo "April";
        }elseif($bulan == "05"){
            echo "Mei";
        }elseif($bulan == "06"){
            echo "Juni";
        }elseif($bulan == "07"){
            echo "Juli";
        }elseif($bulan == "08"){
            echo "Agustus";
        }elseif($bulan == "09"){
            echo "September";
        }elseif($bulan == "10"){
            echo "Oktober";
        }elseif($bulan == "11"){
            echo "November";
        }else{
            echo "Desember";
        } echo "</br>";

        $ttl = $tgl . $bulan . $thn;
        
        echo "No golongan : " . $no_golongan . "</br>";
        echo "Tanggal lahir : " . $ttl . "</br>";
        echo "No urutan : " . $no_urut;
        ?>
        </div>
 <?php  }?>
