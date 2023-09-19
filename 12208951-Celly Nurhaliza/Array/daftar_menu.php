<!DOCTYPE html>
<html>
<head>
    <title>Array</title>
</head>
<body>
    <h2>Daftar Menu</h2>
    <table border="1">
        <tr>
            <td><b>Nama Menu</b></td>
            <td><b>Harga Menu</b></td>
            <td><b>Tipe Menu</b></td>
        </tr>
        <tr>
            <td>Nasi Goreng</td>
            <td>25.000</td>
            <td>Makanan</td>
        </tr>
        <tr>
            <td>Ayam Bakar</td>
            <td>30.000</td>
            <td>Makanan</td>
        </tr>
        <tr>
            <td>Es Teh</td>
            <td>5.000</td>
            <td>Minuman</td>
        </tr>
        <tr>
            <td>Jus Jeruk</td>
            <td>7.000</td>
            <td>Minuman</td>
        </tr>
    </table><br>

    <?php
    $data = [
        [
            "nama" => "Nasi Goreng",
            "harga" => 25000,
            "tipe" => "Makanan"
        ],
        [
            "nama" => "Ayam Bakar",
            "harga" => 30000,
            "tipe" => "Makanan"
        ],
        [
            "nama" => "Es Teh",
            "harga" => 5000,
            "tipe" => "Minuman"
        ],
        [
            "nama" => "Jus Jeruk",
            "harga" => 7000,
            "tipe" => "Minuman"
        ]
    ];

    if (isset($_POST['beli'])) {
        $nama = $_POST['nama'];
        $jumlah = intval($_POST['jumlah']);
        $hasilNama = array_search($nama, array_column($data, 'nama'));

        if ($hasilNama !== false) {
            $menu = $data[$hasilNama];
            $harga = $menu['harga'];

            $diskon = 0;
            if ($jumlah >= 5) {
                $diskon = $harga * 0.1; 
            } elseif ($jumlah >= 3) {
                $diskon = $harga * 0.05;
            }

            $total = ($harga * $jumlah) - $diskon;
            
            echo "Jumlah menu yang dibeli : $jumlah<br>";
            echo "Nama menu : $nama<br>";
            echo "Harga 1 menu : $harga<br>";
            echo "Tipe menu : {$menu['tipe']}<br>";
            if ($diskon > 0) {
                echo "Total harga (setelah diskon) Rp. " . number_format($total, 2) . "<br><br>";
            } else {
                echo "Total harga Rp. " . number_format($total, 2) . "<br><br>";
            }
        } else {
            echo "Menu tidak ditemukan <br><br>";
        }
    }
    ?>

    <form action="" method="post">
        <table>
            <tr>
                <td>Jumlah menu yang dibeli</td>
                <td><input type="number" name="jumlah" min="1"></td>
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="beli" value="Beli"></td>
            </tr>
        </table>
    </form>
</body>
</html>
