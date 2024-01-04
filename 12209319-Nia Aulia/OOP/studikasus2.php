<?php
class rental {
    public $harga;
    public $jenis;
    public $waktu;
    private $member = ['Salma', 'Murti', 'Jihan', 'Sheva'];

    public function __construct($harga, $jenis, $waktu) {
        $this->harga = $harga;
        $this->jenis = $jenis;
        $this->waktu = $waktu;
    }

    public function pajak() {
        return 10000; 
    }

    public function hitung() {
        $pajak = $this->pajak();
        $total = $this->harga * $this->waktu + $pajak;

        if (in_array(strtolower($this->jenis), $this->member)) {
            $diskon = 0.05 * $total;
            $total -= $diskon;
        }

        return $total;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title>
</head>
<body>
<div class="rental">
        <h2>Rental Motor</h2>
        <form action="" method="POST">
        <label for="nama">Nama Pelanggan: </label>
        <input type="text" name="nama">
        <br>
        <br>
        <label for="waktu">Lama Waktu Rental (per hari): </label>
        <input type="number" name="waktu">
        <br>
        <br>
        <label for="dropdown">Jenis Motor:</label>
        <select id="dropdown" name="dropdown">
            <option value="Scooter">Scooter</option>
            <option value="Motor sport">Motor Sport</option>
            <option value="Motor sport turing">Motor Sport Turing</option>
            <option value="Motor listrik">Motor Listrik</option>
         </select><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $waktu = $_POST["waktu"];
        $tipe = $_POST["dropdown"];
        $harga_motor = 0;
    
        switch ($tipe) {
            case "Scooter":
                $harga_motor = 50000;
                break;
            case "Motor sport":
                $harga_motor = 70000;
                break;
            case "Motor sport turing":
                $harga_motor = 85000;
                break;
            case "Motor listrik":
                $harga_motor = 55000;
                break;
            default:
            
                echo "Jenis motor tidak valid!";
                break;
        }
    
        
        $rental = new rental($harga_motor, $nama, $waktu);
        $total_biaya = $rental->hitung();
    
        echo "Total biaya rental untuk $nama dengan jenis motor : ($tipe) selama $waktu hari adalah: Rp. " . number_format($total_biaya, 2);
    }
    ?>
</body>
</html>