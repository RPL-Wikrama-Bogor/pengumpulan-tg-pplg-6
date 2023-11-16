<?php
class Rental {
    public $motor;
    public $harga;
    public $pajak;
    

    public function __construct($motor, $harga, $pajak) {
        $this->motor = $motor;
        $this->harga = $harga;
        $this->pajak = $pajak;
    }
}

class hitung extends Rental {
    public $durasi;
    public $member = ["Louis", "Asep"];

    public function __construct($motor, $harga, $pajak, $durasi) {
        parent::__construct($motor, $harga, $pajak);
        $this->durasi = $durasi;
    }

    public function hitungharga() {
        $subtotal = (int)$this->durasi * $this->harga; 
        $pajak = $this->pajak;

      
        $nama_peminjam = $_POST['nama'];
        if (in_array($nama_peminjam, $this->member)) {
   
            $diskon = $subtotal * 0.05;
            $total = $subtotal - $diskon + $pajak;
        } else {
            $total = $subtotal + $pajak;
        }

        return ['total' => $total, 'pajak' => $pajak];
    }
}


    


$motortouring = new Rental("Motor Touring", 50000, 10000);
$motorsport = new Rental("Motor Sport", 70000, 10000);
$motorsporttouring = new Rental("Motor Sport Touring", 90000, 10000);
$motorbalap = new Rental("Motor Balap", 100000, 10000);

$hitungan = [
    new hitung($motortouring->motor, $motortouring->harga, $motortouring->pajak, 0),
    new hitung($motorsport->motor, $motorsport->harga, $motorsport->pajak, 0),
    new hitung($motorsporttouring->motor, $motorsporttouring->harga, $motorsporttouring->pajak, 0),
    new hitung($motorbalap->motor, $motorbalap->harga, $motorbalap->pajak, 0),
];

if (isset($_POST['durasi']) && isset($_POST['tipe_jenis_motor'])) {
    $durasi = $_POST['durasi'];
    $tipe_jenis_motor = $_POST['tipe_jenis_motor'];
    $nama_peminjam = $_POST['nama'];

    $selected_jenis_motor = null;
    foreach ($hitungan as $rental_motor) {
        if ($rental_motor->motor === $tipe_jenis_motor) {
            $selected_jenis_motor = $rental_motor;
            break;
        }
    }

    if ($selected_jenis_motor) {
        $selected_jenis_motor->durasi = $durasi;
        $result = $selected_jenis_motor->hitungharga();
        $total = $result['total'];
        $pajak = $result['pajak'];
        $output_message = "<=================================================> <br> $nama_peminjam merental motor dengan tipe $tipe_jenis_motor dan";

        if (in_array($nama_peminjam, $selected_jenis_motor->member)) {
            $diskon = $selected_jenis_motor->harga * 0.05;
            $output_message .= " mendapatkan diskon 5%";
        } else {
            $diskon = 0;
            $output_message .= "mendapatkan diskon 0%";
        }
        
        $total = $result['total'];
        $pajak = $result['pajak'];
        
        $output_message .= " <br> Dengan durasi peminjaman selama $durasi hari. <br> Total yang harus dibayar adalah Rp. " . number_format($total, 0, ',', '.') ;
        $output_message .= "<br> Pajak yang harus dibayar adalah Rp. " . number_format($pajak, 0, ',', '.') . "<br> <=================================================> " ;
        
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Cabin', sans-serif;
    }


</style>
<body>
    <center>
        <h1>Rental Motor</h1>
        <h5>Input Jenis Motor dan Total Hari Peminjaman</h5>

        <form method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama Peminjam:</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="durasi">Durasi Hari Peminjaman:</label></td>
                    <td><input type="number" name="durasi" id="durasi"></td>
                </tr>
                <tr>
                    <td><label for="tipe_jenis_motor">Pilih Tipe Motor:</label></td>
                    <td>
                        <select name="tipe_jenis_motor" id="tipe_jenis_motor">
                            <option value="Motor Touring">Motor Touring</option>
                            <option value="Motor Sport">Motor Sport</option>
                            <option value="Motor Sport Touring">Motor Sport Touring</option>
                            <option value="Motor Balap">Motor Balap</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Kirim Data"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($output_message)) {
            echo "<p>$output_message</p>";
        }
        ?>
    </center>
</body>
</html>
