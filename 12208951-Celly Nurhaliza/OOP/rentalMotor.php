<center>
<html>
    <body>
        <form action="" method="POST">
            <h2>Rental Motor</h2>
            <table>
                <tr>
                    <td><label for="">Nama Pelanggan</label></td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><label for="">Lama Waktu Rental (per hari)</label></td>
                    <td><input type="number" name="waktu"></td>
                </tr>
                <tr>
                    <td><label for="">Pilih Tipe Bahan Bakar</label></td>
                    <td><select name="tipe" id="">
                        <option value="YN">Yamaha Nmax</option>
                        <option value="YAC">Yamaha Aerox Connected</option>
                        <option value="HV">Honda Vario 125</option>
                        <option value="HB">Honda Beat</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
class data{
    protected $pajak = 10000; // Pajak sebesar Rp. 10.000
    protected $YN = 31620000;
    protected $YAC = 31310000;
    protected $HV = 24400000;
    protected $HB = 18850000;
    protected $tipe = "";
    protected $member = array("Celly", "Amel", "Jihan");

    public function hitungHarga($nama, $waktu, $tipe) {
        $diskon = 0;
        if (in_array($nama, $this->member)) {
            $diskon = 5; // Diskon 5% untuk member
        }

        $harga_motor = 0;
        switch ($tipe) {
            case 'YN':
                $harga_motor = $this->YN;
                break;
            case 'YAC':
                $harga_motor = $this->YAC;
                break;
            case 'HV':
                $harga_motor = $this->HV;
                break;
            case 'HB':
                $harga_motor = $this->HB;
                break;
        }

        $harga_per_hari = $harga_motor + $this->pajak;
        $total_harga = $harga_per_hari * $waktu * (1 - $diskon / 100);

        return [
            'diskon' => $diskon,
            'jenis_motor' => $tipe,
            'harga_per_hari' => $harga_per_hari,
            'total_harga' => $total_harga
        ];
    }
}

$data = new data();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];
    $tipe = $_POST['tipe'];

    $result = $data->hitungHarga($nama, $waktu, $tipe);

    echo $nama . " berstatus sebagai ";
    if ($result['diskon'] > 0) {
        echo "member mendapatkan diskon sebesar " . $result['diskon'] . "%<br>";
    } else {
        echo "non member<br>";
    }
    echo "jenis motor yang dirental adalah " . $result['jenis_motor'] . " selama " . $waktu . " hari<br>";
    echo "harga rental per-harinya :" . $result['harga_per_hari'] . "<br>";
    echo "besar yang harus dibayarkan adalah Rp. " . number_format($result['total_harga'], 0, ',', '.') . "<br>";
}
?>
<h1><b>TUGAS INI BELUM BERES YAAA</b></h1>
</center>