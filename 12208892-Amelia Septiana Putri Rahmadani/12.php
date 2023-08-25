<?php
    $jam;
    $menit;
    $detik;
    $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan waktu setelah ditambahkan 1 detik</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #ffeadd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="number"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
    <div class="container">
    <h1>Menampilkan waktu setelah ditambahkan 1 detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td></td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td></td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td></td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $jam = $_POST['jam'];
            $menit = $_POST['menit'];
            $detik = $_POST['detik'];

            $detik = $detik + 1;

            if ($detik >= 60){
                $menit =$menit + 1;
                $detik =00;
            }

            if ($menit >= 60){
                $jam = $jam + 1;
                $menit = 00;
                $detik = 00;
            }

            if ($jam >= 24){
                $jam = 00;
                $menit = 00;
                $detik -00;
            }

            echo "<h2>Hasil</h2>";
            echo "jam =" . $jam . "</br>";
            echo "menit =" . $menit . "</br>";
            echo "detik =" . $detik . "</br>";
        }
    ?>

</body>
</html>


